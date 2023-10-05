
function logout() {

    const url = api + "/logout";
    const token = localStorage.getItem('token');

    var raw = JSON.stringify({
        "token": token
    });

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
            localStorage.removeItem('token');
            localStorage.removeItem('cliente');
            document.cookie = `token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/tienda;`;
            document.cookie = `cliente=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/tienda;`;

            document.cookie = `token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
            document.cookie = `cliente=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;

/*             document.cookie.removeItem("token");
            document.cookie.removeItem("cliente") ; */
            location.href = 'login.php';
            return JSON.stringify({ status: 200, token: data.message });
        })
        .catch(error => {
            console.error("Error al realizar el cierre de sesión:", error);
            return JSON.stringify({ status: 500, error: "Error al realizar el cierre de sesión" });
        });
}