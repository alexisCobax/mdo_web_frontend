
function obtenerValorParametro(url, parametro) {
    var urlObj = new URL(url);
    var parametros = new URLSearchParams(urlObj.search);
    return parametros.get(parametro);
}
