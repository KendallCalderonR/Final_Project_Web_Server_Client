function validarRegistro(){

var verificar = true;

var expRegNombre =/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/;
var expRegularApellido =/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/;
var expRegularCedula =/^[1-9]\d{4}\d{4}$/;
var expRegularEmail= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
var expRegularUsuario= /^[a-z0-9ü_-][a-z0-9ü_-]{3,9}$/;


if (!document.registro_form.nombre.value) 
{

	alert("El campo 'Nombre' es requerido");
	document.registro_form.nombre.focus();
	verificar = false;
}
else if (!expRegNombre.exec(document.registro_form.nombre.value)) 
{

	alert("El campo 'Nombre' no es valido, recuerde empezar con mayúscula y no utilizar números");
	document.registro_form.nombre.focus();
	verificar = false;
}
else if (!document.registro_form.apellido.value) {

	alert("El campo 'Apellido es requerido");
	document.registro_form.apellido.focus();
	verificar = false;

}
else if (!expRegularApellido.exec(document.registro_form.apellido.value)) 
{

	alert("El campo 'Apellido' no es valido, recuerde empezar con mayúscula y no utilizar números");
	document.registro_form.apellido.focus();
	verificar = false;
}
else if (!document.registro_form.cedula.value) {

	alert("El campo 'Cédula' es requerido");
	document.registro_form.cedula.focus();
	verificar = false;

}
else if (!expRegularCedula.exec(document.registro_form.cedula.value)) 
{

	alert("El campo 'Cedula' no es valido,cumpla con el formato: 1 1111 1111");
	document.registro_form.cedula.focus();
	verificar = false;
}
else if (!document.registro_form.email.value) {

	alert("El campo 'E-mail' es requerido");
	document.registro_form.email.focus();
	verificar = false;

}
else if (!expRegularEmail.exec(document.registro_form.email.value)) 
{

	alert("El campo 'E-mail' no es valido, cumpla con formato: ejemplo@example.com");
	document.registro_form.email.focus();
	verificar = false;
}
else if (!document.registro_form.usuario.value) {

	alert("El campo 'Usuario' es requerido");
	document.registro_form.usuario.focus();
	verificar = false;

}
else if (!expRegularUsuario.exec(document.registro_form.usuario.value)) 
{

	alert("El campo 'Usuario' no es válido, en minúscula, no utilice tildes, máximo 10 caracteres");
	document.registro_form.usuario.focus();
	verificar = false;
}
else if (!document.registro_form.contrasena.value) {

	alert("El campo 'Contraseña' es requerido");
	document.registro_form.contrasena.focus();
	verificar = false;

}



if(verificar){

	document.registro_form.submit();
}



}

window.onload = function(){

	document.registro_form.enviar.onclick = validarRegistro;
}
