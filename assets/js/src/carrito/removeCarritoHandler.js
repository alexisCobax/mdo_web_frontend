
function remove(id, registro) {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿Esta seguro que desea remover el producto?',
        text: "No se puede revertir esta operación",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            this.eliminar(id);
            registro.closest('tr').remove();
            swalWithBootstrapButtons.fire(
                'Eliminado!',
                'Su producto fue removido.',
                'success'
            )
            
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'No se removio ningun producto de su carro',
                'error'
            )
        }
    })
}

function eliminar(id) {

    const url = api + "/carritodetalle/" + id;
    const token = localStorage.getItem('token');

    fetch(url, {
        method: 'DELETE',
        headers: {
            'Authorization': 'Bearer ' + token
        }
    })
        .then(response => {
            console.log(response);
            if (response.ok) {
                $('#carrito').empty();
                obtenerCarrito();
            } else {
                throw new Error('Error en la solicitud');
            }
            obtenerTotalesCarrito() ;
        })
        .catch(error => {
            console.error(error);
        });

}



