alert "priji";
function AskForWebNotificationPermissions(){
	
	Notification.requestPermission( function(status){
		 if (status == "granted")
			alert("¡Tenemos permiso para enviar notificaciones!");
			var options = {
				body: document.getElementById("notificaciones").value, //Cuerpo de la notificacion, se obtiene el valor del input text
				icon: "icon fa-envelope" //imagen a mostrar en la notificacion
			};
			 
			var notif = new Notification("Nueva Notificación", options);
			if (status == "denied")
			    alert("¡No tenemos permiso para enviar notificaciones!");
	});
				
}