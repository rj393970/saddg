/**
 * Libreria para ocultar el footer cuando se despliega 
 * el teclado motivado a un bug de android
 */
var inputBody = document.body;
inputBody.addEventListener("focus", inputBodyFocusFunction, true);
inputBody.addEventListener("blur", inputBodyBlurFunction, true);

function inputBodyFocusFunction() {
	if(iOS) {
		document.getElementById("footerID").style.display = '';
		var x = document.getElementsByTagName("input");
		var i;
		for (i = 0; i < x.length; i++) {
			var e = x[i];
			var isFocused = (document.activeElement === e);
			if(isFocused)
				document.getElementById("footerID").style.display = 'none';
		}
		
		var x = document.getElementsByTagName("button");
		var i;
		for (i = 0; i < x.length; i++) {
			var e = x[i];
			var isFocused = (document.activeElement === e);
			if(isFocused) 
				document.getElementById("footerID").style.display = '';
		}
	}
}

function inputBodyBlurFunction() {
	if(iOS) 
		document.getElementById("footerID").style.display = '';
}