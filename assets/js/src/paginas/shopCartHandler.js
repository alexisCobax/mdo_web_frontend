function aplicarDescuento() {
    var cupon = $('#cupon').val();
    const url = api + '/web/descuento/add';
    var raw = JSON.stringify({ "cupon": cupon });
    var token = localStorage.getItem('token');

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Bearer " + token
        },
        body: raw
    };

    fetch(url, requestOptions)
        .then(response => response.json())
        .then(data => {

            if (data.status == 200) {
                obtenerTotalesCarrito()

                Swal.fire({
                    title: "",
                    text: "El cupon ha sido aplicado con exito",
                    icon: "success",
                    confirmButtonText: "ok",
                    confirmButtonColor: "#ba417c"
                });
            }

            if (data.status == 404) {

                Swal.fire({
                    title: "",
                    text: "Este cupon ya esta aplicado en esta compra",
                    icon: "info",
                    confirmButtonText: "ok",
                    confirmButtonColor: "#ba417c"
                });
            }


        })
        .catch(error => {
            Swal.fire({
                title: "",
                text: "El numero de cupon es inexistente",
                icon: "warning",
                confirmButtonText: "ok",
                confirmButtonColor: "#ba417c"
            });
            return JSON.stringify({ status: 500, error: "Error" });
        });





}