
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
            if(data.status == false){
                Swal.fire({
                    title: "",
                    text: "Usuario o contraseña incorrectos",
                    icon: "error",
                    confirmButtonText: "Continuar",
                    confirmButtonColor: "#ba417c"
                  });
            }else{
                    localStorage.setItem('token', data.token);
                    localStorage.setItem('cliente', JSON.stringify(data.user));
                    document.cookie = "token=" +  data.token ;
                    document.cookie = "cliente=" +  JSON.stringify(data.user) ;
                    location.href = 'tienda.php';
            }
        })
        .catch(error => {
            console.error("Error al realizar el inicio de sesión:", error);
            return JSON.stringify({ status: 500, error: "Error al realizar el inicio de sesión" });
        });

}
