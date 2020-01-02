function gps(){
	
	var content = document.getElementById("geolocation-test");
											

		if (navigator.geolocation){
												
			navigator.geolocation.getCurrentPosition(function(objPosition){
				var lon = objPosition.coords.longitude;
				var lat = objPosition.coords.latitude;

				//content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";
				content.innerHTML = "<p><strong>Colombia </strong></p>";
													
				if(lat > 4 && lon < -74){
					 document.getElementById("flag").innerHTML = "<img src='images/Colombia-Flag-icon.png' width='30' height='30'/>";
													}

												}, function(objPositionError)
												{
													switch (objPositionError.code)
													{
														case objPositionError.PERMISSION_DENIED:
															content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
														break;
														case objPositionError.POSITION_UNAVAILABLE:
															content.innerHTML = "No se ha podido acceder a la información de su posición.";
														break;
														case objPositionError.TIMEOUT:
															content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
														break;
														default:
															content.innerHTML = "Error desconocido.";
													}
												}, {
													maximumAge: 75000,
													timeout: 15000
												});
											}
											else
											{
												content.innerHTML = "Su navegador no soporta la API de geolocalización.";
											}
										}

var content = document.getElementById("geolocation-test");
										
	if (navigator.geolocation){
												
		navigator.geolocation.getCurrentPosition(function(objPosition){
			var lon = objPosition.coords.longitude;
			var lat = objPosition.coords.latitude;

			//content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";
		if(lat > 4 && lon < -74){
			//location.href="mostrarNotificaciones.php?variable=miVariable";
			//jQuery('#div_session_write').load('mostrarNotificaciones.php?session_name=new_value');
			content.innerHTML = "<p><strong>Colombia </strong></p>";
			document.getElementById("flag").innerHTML = "<img src='images/Colombia-Flag-icon.png' width='30' height='30'/>";}

												},
												 function(objPositionError)
												{
													switch (objPositionError.code)
													{
														case objPositionError.PERMISSION_DENIED:
															content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
														break;
														case objPositionError.POSITION_UNAVAILABLE:
															content.innerHTML = "No se ha podido acceder a la información de su posición.";
														break;
														case objPositionError.TIMEOUT:
															content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
														break;
														default:
															content.innerHTML = "Error desconocido.";
													}
												}, {
													maximumAge: 75000,
													timeout: 15000
												});
											}
											else
											{
												content.innerHTML = "Su navegador no soporta la API de geolocalización.";
											}