
function up(id,precio) {

    var span = document.querySelector('.qty-val');
    var numeroActual = parseInt(span.textContent);
    var nuevoNumero = numeroActual + 1;
    span.textContent = nuevoNumero;

    actualizarProducto(id,precio,nuevoNumero);
}

function down(id,precio) {

    var span = document.querySelector('.qty-val');
    var numeroActual = parseInt(span.textContent);
    var nuevoNumero = Math.max(numeroActual - 1, 1);
    span.textContent = nuevoNumero;

    actualizarProducto(id,precio,nuevoNumero);

}