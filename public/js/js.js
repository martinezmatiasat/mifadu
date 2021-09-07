/* CONTROL SWITCH */


$('input[type=checkbox]').on('change',function(e) {
    if ($(this).prop('checked')) {
        $('.pub').addClass('switch-act');
        $('.priv').removeClass('switch-act');
    } else {
		$('.priv').addClass('switch-act');
		$('.pub').removeClass('switch-act');
    };
});



/* TABS TRABAJOS PRACTICOS */


$(document).ready(function(){
	$(".tab div button").hover(function(){
		$(this).parent().addClass('tab-activo');
	}, function(){
		$(this).parent().removeClass('tab-activo');
	});
	
	$( ".tab div button" ).click(function() {
		$(this).parent().addClass("tab-activo");
	});
	
	
});

/* MODALES */


/*MODAL CANCELAR*/

//Aparece modal
$( "#modalCancelar" ).click(function(event) {
	event.preventDefault();
	$('.modal-cancelar').css('display','flex');
	$('.modal-negro').css('display','block');
});

//Cerrar modal con la cruz
$( ".cruz" ).click(function() {
	event.preventDefault();
	$('.modali').css('display','none');
	$('.modal-negro').css('display','none');
});


/*MODAL CONFIRMAR*/
$( "#modalPublicar" ).click(function(event) {
	event.preventDefault();
	$('.modal-confirmar').css('display','flex');
	$('.modal-negro').css('display','block');
});

/*FELICITACIONES */
$( ".modal-confirmar .boton2" ).click(function(event) {
	event.preventDefault();
	$('.modal-confirmar').css('display','none');
	$('.modal-entrega').css('display','flex');
});



/* TABS */

function TabPractico(evt, NombreTrabajo) {
	  var i, tabcontenido, tablinks;
	  tabcontenido = document.getElementsByClassName("tabcontenido");
	  for (i = 0; i < tabcontenido.length; i++) {
	    tabcontenido[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace("active", "");
	  }
	  document.getElementById(NombreTrabajo).style.display = "block";
	  evt.currentTarget.className += " active";
	}

/* ORDENAR */

 $('.ordenar').on('click', function() {
    $('.checks-ordenar').toggleClass("activista");
    $('.ordenar span img').toggleClass("flecha-arriba");
    $('.ordenar span').toggleClass("fondo");
 });


/* TABS AUTOEVALUCIÓN */

function TabPractico(evt, NombreTrabajo) {
	  var i, tabcontenido, tablinks;
	  tabcontenido = document.getElementsByClassName("tabcontenido");
	  for (i = 0; i < tabcontenido.length; i++) {
	    tabcontenido[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace("active", "");
	  }
	  document.getElementById(NombreTrabajo).style.display = "block";
	  evt.currentTarget.className += " active";
	}

/* MENU MOBILE */

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

/* SCROLL MENU MOBILE */

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementsByClassName("menu-mobile")[0].style.top = "0";
  } else {
    document.getElementsByClassName("menu-mobile")[0].style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}

/* AGREGAR DIV RELLENO */

$( "body" ).prepend( "<div class='relleno'></div>" );





