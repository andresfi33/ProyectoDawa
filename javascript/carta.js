$(document).ready(function () {
    $(".indiceProductos").click(function () {
        $(this).next().toggle();
        $(this).children("img").toggleClass("icono-rotado");
    });
});

function abrirIndice(idIndice) {
    $(idIndice).next().css("display", "block");
    $(idIndice).children("img").addClass("icono-rotado");
};

function anadirPedido(linea) {
    var precio;
    var comida;
    var nuevoPedido;

    comida = $(linea).parent().prev().children("b").text();
    precio = $(linea).prev().text();

    if ($("#colCarrito").children().length == 0) {
        nuevoPedido = true;
    } else {
        nuevoPedido = false;
    }

    if (nuevoPedido) {
        $("#colCarrito").html("<div class='carrito'> " +
            "<div style='display: none;'></div>" +
            "<ul>" +
            "<li>" +
            "<div>" +
            "<b>" + comida + "</b>" +
            "<input type='number' value='1' min='1'>" +
            "<i class='icon-plus btInput'></i>" +
            "<i class='icon-minus btInput'></i>" +
            "<i class='icon-trash-empty'></i>" +
            "</div>" +
            "<span>" + precio + "</span>" +
            "</li>" +
            "</ul>" +
            "<b>Total pedido: </b>" +
            "<b id='precioTotal'>" + precio + "</b>" +
            "</div>" +
            "<div id='pagar'>" +
            "<input type='submit' value='Realizar pedido'>" +
            "</div>");
    } else {
        let filaComida = buscarAlimentoPedido(comida);

        if (filaComida >= 0) {
            //Actualizar cantidad
            let inputCantidad = $(".carrito").children("ul").children("li").eq(filaComida).find("input");
            let cantidad = Number(inputCantidad.val()) + 1;
            
            inputCantidad.val(cantidad);

            //Actualizar precio producto
            let precioProducto = $(".carrito").children("ul").children("li").eq(filaComida).children("span");
            let precioTotalProducto = Number(precioProducto.text().substr(0, precioProducto.text().length-1));

            precioTotalProducto += Number(precio.substr(0, precio.length-1));

            precioProducto.text(precioTotalProducto + "€");
        } else {
            //Añadir nueva fila
            $(".carrito").children("ul").append("<li><div>" +
                "<b>" + comida + "</b>" +
                "<input type='number' value='1' min='1'>" +
                "<i class='icon-plus btInput'></i>" +
                "<i class='icon-minus btInput'></i>" +
                "<i class='icon-trash-empty'></i>" +
                "</div><span>" + precio + "</span> </li>");
        }

        //Actualizar precio total
        let totalPedido = calcularPrecioTotal();
        $("#precioTotal").text(totalPedido);
    }
}

/**
 * Devuelve el precio total del pedido
 */
function calcularPrecioTotal() {
    var listaPedidos = $(".carrito").children("ul");
    var totalPedido = 0;

    for (let i = 0; i < listaPedidos.children().length; i++) {
        let precio = listaPedidos.children("li").eq(i).children("span").text();
        totalPedido += Number(precio.substr(0, precio.length - 1));
    };

    totalPedido += "€";

    return totalPedido;
}

/**
 * Devuelve el numero de la fila en la que está la comida que se quiere buscar
 * @param {Comida que se quiere buscar} comida 
 */
function buscarAlimentoPedido(comida) {
    var listaPedidos = $(".carrito").children("ul");
    var numFilaComida = -1;

    for (let i = 0; i < listaPedidos.children().length; i++) {
        let comidaLista = listaPedidos.children("li").eq(i).find("b").text();

        if (comidaLista == comida) {
            numFilaComida = i;
        }
    };

    return numFilaComida;
}