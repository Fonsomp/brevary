/*funciones llamadas en index.php*/
function viewFiles(){
	document.getElementById("login").style.display = "none";
	document.getElementById("contenido").style.display = "none";
	document.getElementById("verArchivos").style.display = "block";
	document.getElementById("verNotificaciones").style.display = "none";}

function viewNotifications(){
	document.getElementById("login").style.display = "none";
	document.getElementById("contenido").style.display = "none";
	document.getElementById("verArchivos").style.display = "none";
	document.getElementById("verNotificaciones").style.display = "block";}

function viewLogin(){
	document.getElementById("login").style.display = "block";
	document.getElementById("contenido").style.display = "none";
	document.getElementById("verArchivos").style.display = "none";
	document.getElementById("verNotificaciones").style.display = "none";}


/*Funciones llamadas en controlPanel.php*/
function viewEditLiturgias(){
	document.getElementById("notificacion").style.display = "none";
	document.getElementById("liturgias").style.display = "block";
	document.getElementById("upFiles").style.display = "none";}

function viewEditNotifications(){
	document.getElementById("notificacion").style.display = "block";
	document.getElementById("liturgias").style.display = "none";
	document.getElementById("upFiles").style.display = "none";}
				
function viewUpFiles(){
	document.getElementById("notificacion").style.display = "none";
	document.getElementById("liturgias").style.display = "none";
	document.getElementById("upFiles").style.display = "block";}

//Funciones llamadas en misal.php
function viewODM(){
	//document.getElementById("divIntro").style.display = "none";
	document.getElementById("divODM").style.display = "block";
	document.getElementById("divPrefacio").style.display = "none";
	document.getElementById("divPE").style.display = "none";
	document.getElementById("divComunes").style.display = "none";}

function viewPrefacio(){
	//document.getElementById("divIntro").style.display = "none";
	document.getElementById("divODM").style.display = "none";
	document.getElementById("divPrefacio").style.display = "block";
	document.getElementById("divPE").style.display = "none";
	document.getElementById("divComunes").style.display = "none";}

function viewPlegaria(){
	//document.getElementById("divIntro").style.display = "none";
	document.getElementById("divODM").style.display = "none";
	document.getElementById("divPrefacio").style.display = "none";
	document.getElementById("divPE").style.display = "block";
	document.getElementById("divComunes").style.display = "none";}

function viewComunes(){
	//document.getElementById("divIntro").style.display = "none";
	document.getElementById("divODM").style.display = "none";
	document.getElementById("divPrefacio").style.display = "none";
	document.getElementById("divPE").style.display = "none";
	document.getElementById("divComunes").style.display = "block";}

/*function enabledButton(){
	switch(document.forms[0].brevaryDB.selectedIndex){
		case 3:
				document.getElementById("HI").style.display = "block";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 6:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "block";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;

		case 8:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "block";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 9:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "block";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 10:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "block";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 11:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "block";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 12:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "block";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 13:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "block";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;
		case 14:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "block";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
				break;						
		default:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btn-enviar").disabled = false;
				document.getElementById("selectCD").disabled = false;
				document.getElementById("selectCM").disabled = false;
	}
}*/

function viewSelect(){
	//alert(document.forms[0].brevaryDB.selectedIndex);
	switch(document.forms[0].brevaryDB.selectedIndex){
		case 1:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("dateL").disabled = false;
				document.getElementById("dateL").style.background = "#FFFFFF";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
		break;
		case 2:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = false;
				document.getElementById("dateL").style.background = "#FFFFFF";
		break;
		case 3:
				document.getElementById("HI").style.display = "block";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = false;
				document.getElementById("dateL").style.background = "#FFFFFF";
		break;
		case 4:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = false;
				document.getElementById("dateL").style.background = "#FFFFFF";
		break;
		case 5:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = false;
				document.getElementById("dateL").style.background = "#FFFFFF";
		break;
		case 6:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "block";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";;
				break;
		case 7:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = false;
				document.getElementById("dateL").style.background = "#FFFFFF";
		break;			
		case 8:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "block";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;
		case 9:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "block";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;
		case 10:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "block";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;
		case 11:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "block";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;
		case 12:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "block";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;
		case 13:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "block";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;
		case 14:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "block";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
				break;						
		default:
				document.getElementById("HI").style.display = "none";
				document.getElementById("ODM").style.display = "none";
				document.getElementById("Pre").style.display = "none";
				document.getElementById("PE").style.display = "none";
				document.getElementById("Co").style.display = "none";
				document.getElementById("PPPCC").style.display = "none";
				document.getElementById("SPRPR").style.display = "none";
				document.getElementById("TP").style.display = "none";
				document.getElementById("AM").style.display = "none";
				document.getElementById("btnEnviar").disabled = false;
				document.getElementById("btnBuscar").disabled = false;
				document.getElementById("dateL").disabled = true;
				document.getElementById("dateL").style.background = "rgba(210, 215, 217, 0.15)";
	}

}