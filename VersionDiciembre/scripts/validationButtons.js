alert("kjfldks");

function Modificar(){
	var f = document.form1; //Se guarda en formulario

	f[1].disabled = false;

	f.tbxOperacion.value = 'modificar';//Cambia el valor de input oculto, enviando al controlado la accion que se va a realizar
	f.brevaryDB.disabled = false;
	f.calendarMonth.disabled = false;
	f.calendarDay.disabled = false;

}

function Buscar(){
	var f = document.form1;
	f[0].disabled = false;
	f.submit();

}


function Guardar(){
	var f = document.form1;
	f[0].disabled = false;
	f.submit;

}