$(document).ready(function () {
    $(".indiceProductos").click(function () {
        $(this).next().toggle();
        $(this).children("img").toggleClass("icono-rotado");
    });
});

function abrirIndice(idIndice){
    $(idIndice).next().css("display","block");
    $(idIndice).children("img").addClass("icono-rotado");
};