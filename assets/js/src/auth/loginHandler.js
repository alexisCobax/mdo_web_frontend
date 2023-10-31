
// function login() {

//     const url = api + "/login";

//     const loginData = {
//         nombre: $('#user').val(),
//         clave: $('#pass').val()
//     };

//     const requestOptions = {
//         method: "POST",
//         headers: { "Content-Type": "application/json" },
//         body: JSON.stringify(loginData)
//     };

//     fetch(url, requestOptions)
//         .then(response => response.json())
//         .then(data => {
//             if(data.status == false){
//                 Swal.fire({
//                     title: "",
//                     text: "Usuario o contraseña incorrectos",
//                     icon: "error",
//                     confirmButtonText: "Continuar",
//                     confirmButtonColor: "#ba417c"
//                   });
//             }else{
//                     localStorage.setItem('token', data.token);
//                     localStorage.setItem('cliente', JSON.stringify(data.user));
//                     document.cookie = "token=" +  data.token ;
//                     document.cookie = "cliente=" +  JSON.stringify(data.user);
//                     location.href = 'index.php';
//             }
//         })
        
//         .catch(error => {
//             console.error("Error al realizar el inicio de sesión:", error);
//             return JSON.stringify({ status: 500, error: "Error al realizar el inicio de sesión" });
//         });

// }

function login() {
    const url = api + "/login";

    const loginData = {
        nombre: $('#user').val(),
        clave: $('#pass').val()
    };

    const requestOptions = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(loginData)
    };

    fetch(url, requestOptions)
        .then(response => response.json())
        .then(data => {
            if (data.status == false) {
                Swal.fire({
                    title: "",
                    text: "Usuario o contraseña incorrectos",
                    icon: "error",
                    confirmButtonText: "Continuar",
                    confirmButtonColor: "#ba417c"
                });
            } else {
                localStorage.setItem('token', data.token);
                localStorage.setItem('cliente', JSON.stringify(data.user));
                document.cookie = "token=" + data.token;
                document.cookie = "cliente=" + JSON.stringify(data.user);
                location.href = 'index.php';

                // Programar la eliminación del token después de 8 horas
                setTimeout(function () {
                    localStorage.removeItem('token'); // Elimina el token del localStorage
                    var cookies = document.cookie.split(";");
                    for (var i = 0; i < cookies.length; i++) {
                        var cookie = cookies[i];
                        while (cookie.charAt(0) == ' ') {
                            cookie = cookie.substring(1);
                        }
                        if (cookie.indexOf("token=") == 0) {
                            document.cookie = "token=; expires=Thu, 01 Jan 1970 00:00:00 UTC"; // Elimina la cookie del token
                        }
                    }
                }, 8 * 60 * 60 * 1000); // 8 horas en milisegundos
            }
        })
        .catch(error => {
            console.error("Error al realizar el inicio de sesión:", error);
            return JSON.stringify({ status: 500, error: "Error al realizar el inicio de sesión" });
        });
}
