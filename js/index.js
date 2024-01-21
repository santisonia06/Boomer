new Date().getFullYear()
document.getElementById("year").innerHTML = new Date().getFullYear();

//TEXTO VARIABLES
  var TituloPagesD1 =  document.getElementById("TituloPagesD1");
  TituloPagesD1.innerHTML = 'Boomer';
  
  
   var enlaceUnoPage = document.getElementById("TituloPagesD1EnlaceE1");
   enlaceUnoPage.innerHTML = 'Inicio';
   
   var enlaceDosPage = document.getElementById("TituloPagesD1EnlaceE2");
   enlaceDosPage.innerHTML = 'Productos';
   
   var enlaceTresPage = document.getElementById("TituloPagesD1EnlaceE3");
   enlaceTresPage.innerHTML = 'Nosotros';
   
   var enlaceCuatroPage = document.getElementById("TituloPagesD1EnlaceE4");
   enlaceCuatroPage.innerHTML = 'Contactanos';
   
//ENLACE VARIABLES



//RECARGAR
function recargarPages() {
	window.location.reload()
	let R = document.getElementById("recargar");
	 R.style.display="block";
	 
    }