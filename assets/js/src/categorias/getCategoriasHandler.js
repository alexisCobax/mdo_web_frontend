
// function CategoriasFindAll() {

//     const url = api + "/grupo";

//     const loginData = {
//         token: localStorage.getItem('token')
//     };

//     fetch(url, {
//         headers: {
//             'Authorization': `Bearer ${loginData.token}`
//         }
//     })
//         .then(function (response) {
//             return response.ok ? response.json() : new Error('Error de red');
//         })
//         .then(function (response) {

//             iterateMenuCategorias(response.data);
//         })
//         .catch(function (error) {
//             return JSON.stringify({ status: 500, error: error.message });
//         });
// }


function iterateMenuCategorias() {

    let html = '';
    $("#categori-dropdown-wrap").empty();

    fetch('/assets/js/src/categorias/categorias.json')
    .then(response => response.json())
    .then(data => {
    
        html += `<ul>`;

        for (i in data) {
    
            html += `<li>
        <a href="tienda.php?grupo=${data[i].id}">
        <i class="evara-font-desktop"></i>${data[i].nombre}
        </a>
        </li>`;
    
        }
        html += `</ul>`;
    
        $("#categori-dropdown-wrap").append(html);
        

    })
    .catch(error => {
    console.error('Error:', error);
    });

}

function iterateMainCategorias() {
    let html = '';
    $("#categoriesMain").empty();

    fetch('/assets/js/src/categorias/categorias.json')
    .then(response => response.json())
    .then(data => {
    
        html += `<ul class="categories">`;

        for (i in data) {
    
            html += `<li>
        <a href="tienda.php?grupo=${data[i].id}">
        <i class="evara-font-desktop"></i>${data[i].nombre}
        </a>
        </li>`;
    
        }
        html += `</ul>`;
    
        $("#categoriesMain").append(html);

        $('#collapseExample').collapse('toggle');
        

    })
    .catch(error => {
    console.error('Error:', error);
    });

}