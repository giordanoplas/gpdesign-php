$(function(){
    var boton = $('#btn-menu');
    var fondo_enlace = $('#fondo-enlace');

    boton.on('click', function(e){
        fondo_enlace.toggleClass('active');
        $('#barra-lateral-izquierda').toggleClass('active');
        e.preventDefault();
    });

    fondo_enlace.on('click', function(e){
        fondo_enlace.toggleClass('active');
        $('#barra-lateral-izquierda').toggleClass('active');
        e.preventDefault();
    });
}())


/*$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menu').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
    
    /*
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
    });
    */
//}