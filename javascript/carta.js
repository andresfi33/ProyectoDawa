$(document).ready(function() {
    $(".indiceProductos").click(function() {
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
            "<input type='number' value='1' min='0' onchange='actualizaCantidad(this)'>" +
            "<i class='icon-plus btInput'></i>" +
            "<i class='icon-minus btInput'></i>" +
            "<i class='icon-trash-empty'></i>" +
            "</div>" +
            "<span>" + precio + "</span>" +
            "</li>" +
            "</ul>" +
            "<b>Total pedido: </b>" +
            "<b id='precioTotal' name='precioTotal'>" + precio + "</b>" +
            "</div>" +
            "<div id='pagar'>" +
            "<input type='submit' onclick='crearDatosPedido();' id='pedido' name='pedido' value='Realizar pedido' " + ">" +
            "</div>" +
            "</div>");
    } else {
        let filaComida = buscarAlimentoPedido(comida);

        if (filaComida >= 0) {
            //Actualizar cantidad
            let inputCantidad = $(".carrito").children("ul").children("li").eq(filaComida).find("input");
            let cantidad = Number(inputCantidad.val()) + 1;

            inputCantidad.val(cantidad);
        } else {
            //Añadir nueva fila
            $(".carrito").children("ul").append("<li><div>" +
                "<b>" + comida + "</b>" +
                "<input type='number' value='1' min='0' onchange='actualizaCantidad(this)'>" +
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
        let cantidad = listaPedidos.children("li").eq(i).children("div").children("input").val();

        totalPedido += Number(precio.substr(0, precio.length - 1) * cantidad);
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

/**
 * Crea los datos del pedido para registrar en la base de datos
 * @returns $datosPedido
 */
function crearDatosPedido() {
    var datosPedido = "";
    var precioTotalPedido = "";

    var listaPedidos = $(".carrito").children("ul");

    for (let i = 0; i < listaPedidos.children().length; i++) {
        let precio = listaPedidos.children("li").eq(i).children("span").text();
        let nombrePedido = listaPedidos.children("li").eq(i).children("div").children("b").text();
        let cantidadPedido = listaPedidos.children("li").eq(i).children("div").children("input").val();

        datosPedido += nombrePedido + "," + cantidadPedido + "," + precio + ";";
    };

    precioTotalPedido = calcularPrecioTotal();

    $("#datosPedido").val(datosPedido);
    $("#precioTotalPedido").val(precioTotalPedido.substr(0, precioTotalPedido.length - 1));
}

/**
 * Actualiza el precio total del pedido y elimina las filas en las que no hay cantidad
 * @param {input que se está modificando} input 
 */
function actualizaCantidad(input) {
    var listaPedidos = $(".carrito").children("ul");
    var numProductos = listaPedidos.children().length;

    if (input.value == 0) {
        if (numProductos == 1) {
            $("#colCarrito").html("");
        } else {
            for (var i = 0; i < numProductos; i++) {
                var producto = $(input).parent().children("b").text();
                if (producto == listaPedidos.children("li").eq(i).children("div").children("b").text()) {
                    listaPedidos.children().eq(i).remove();
                    break;
                }
            }
        }
    } else if (input.value > 25) {
        input.value = 25;
    } else if (input.value < 0) {
        input.value = 1;
    }

    //Actualizar precio total
    let totalPedido = calcularPrecioTotal();
    $("#precioTotal").text(totalPedido);
}