// JavaScript Document
$(document).ready(function () {
    //Al pasar sobre .gepic animamos la imágen dando un tamaño menor y mostramos el div .negro
    $('.imagenTabla').mouseenter(function (e) {
        $(this).addClass("activada");


    }).mouseleave(function (e) {
        $(this).removeClass("activada");

    });
});