

// let Usuario = document.querySelector('Usuario');
// const password = document.querySelector('input[type="Password"]');
// let as = document.querySelector('Usuario');
// let boton = document.getElementById("iniciarsesion");
// boton.addEventListener("click",function(){
// 	var focus = document.getElementById("Usuario");
// 	capa.innerHTML = focus();
// }, false)
//  const setFocusDNI = (event) => {
//   	$("Usuario").focus();
// }

function mostrar() {
	console.log("ME ejecuto");
	
	let dato = document.getElementById("Usuario").focus();
	console.log(dato);

}

// swal({
//   title: 'Error!',
//   text: 'Do you want to continue',
//   icon: 'error',
//   confirmButtonText: 'Cool'
// })

function alerta(){
 swal({
   title: "¡ERROR!",
   text: "Esto es un mensaje de errorcito",
   type: "error",
 });
}

var valorBoton = true;
function ocultarCorreo(){
	let boton  =  document.getElementById('correo');
	valorBoton ?  boton.innerText = "Cancelar":boton.innerText = "Realizar";
  valorBoton =! valorBoton;

}