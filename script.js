

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

//BOTON RESERVAR PARA LLEGAR A RESERVAS  y no perderse el dato
function Reservas(){
//const botonReservar =  document.getElementsByClassName('Reservar')[0].value;
const botonReservar =  document.getElementById('reservar');
console.log(botonReservar);
alert('alerta' + botonReservar)
let IdRuta = null;
		botonReservar.addEventListener("click", function(evento){
		
		let iniciarsesion = document.querySelector('#iniciarSesion').setAttribute("name","Reservar");
	  IdRuta   = document.querySelector('#reservar').value;
	  console.log('idRUta ' + IdRuta);
	  let referencia = document.querySelector('#referencia').value;
	  referencia = IdRuta.value; 
	  console.log(referencia );
		alert("Le has dado click reservar " + referencia + " referencia" );
		
	});
}

//BOTON COMPRAR PARA LLEGAR A COMPRAR y no perderse el dato Sin implementar
function Compras(){
const botonComprar = document.querySelector("#comprar");
	botonComprar.addEventListener("click", function(evento){
	
	let Compra = document.querySelector('#iniciarSesion').setAttribute("name","Comprar");

	alert("Le has dado click comprar " + Compra);
	
});

}

