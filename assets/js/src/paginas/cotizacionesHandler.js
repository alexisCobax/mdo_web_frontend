documentReady(() => {
    cargarGrillaCotizaciones();
})
function cargarGrillaCotizaciones() {
    var token = localStorage.getItem('token');
    $("#tablaCotizaciones").DataTable({
        
            
            "ajax": {
                "url": api + "/web/cotizaciones",
                "method": "POST",
                "headers": {
                    "Authorization": "Bearer " + token
                },
                "dataSrc":  function (json) {
                    json.draw =  json.data.pagina;
                    jsonrecordsTotal= json.data.cantidad_total;
                    json.recordsFiltered= json.data.cantidad_total;
                    json.total = json.data.cantidad_total;


                    return json.data.results;
                },
                "data": function (data) {

                    data.pagina = (data.start / data.length) + 1; 
                    data.cantidad_por_pagina = data.length;
                    //data.miParametro = "valor"; // Ejemplo de otro parámetro
                    return data;
                },
                "type": "GET",
                "error": function(xhr, error, thrown) {
                    console.log("Error al cargar la grilla de Cotizaciones");
                    console.log(xhr);
                    console.log(error);
                    console.log(thrown);
                } 
            },
            searching: false, //Oculto el buscador de la grilla,
            dom: 'rt<"bottom"p><"clear">',
            language: {
                lengthMenu: " _MENU_ Registros por Página",
                zeroRecords: "No se ha encontrado nada",
                info: "Visualizando Página _PAGE_ de _PAGES_",
                infoEmpty: "Registros Vacios",
                infoFiltered: "(Filtrados para  _MAX_ de registros totales)",
                paginate: {
                    previous: "Anterior",
                    next: "Siguiente"
                }
            },

            columns: [
                { "data": "id" , title: "Numero"},
                { "data": "fecha", title: "Fecha" },
                { "data": "total" , title: "Total"},
                {
                    title: "",
                    data: function(data, type, full, meta) {
                        return (
                            "<td width='55' clas='alinear'><a class='botonera' href='#'  onClick='CotizacionACarrito(" +
                            data["id"] +
                            ")'><i class='fa fa-shopping-cart fa-lg'></i></a>" +
                            "</td>"
                        );
                    }
                }
            ],
            pageLength: 30,
            ordering: false,
            order: [
                [1, "asc"] // los primeros conjuntos de datos de la Primer columna son ordenados de forma ascendente.
            ],
            processing: false,
            "paging": true,
            serverSide: true //parametros necesarios para poder enviar peticiones al servidor de forma asincronica.
        });
}