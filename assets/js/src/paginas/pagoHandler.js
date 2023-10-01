documentReady(() => {
  $('#autorizando').hide();
  CargarClover();
});     

function CargarClover() {
     //const clover = new Clover('8b05b19305846bc8b159a9f09e889cdf'); 
     const clover = new Clover('ba1090352e049b65b489bd361516c52e'); //sandbox 
        
     const elements = clover.elements();
     const styles = {
       body: {
         fontFamily: 'Roboto, Open Sans, sans-serif',
         fontSize: '16px',
       },
       input: {
         fontSize: '16px',
       }
     };
     const cardNumber = elements.create('CARD_NUMBER', styles);
     const cardDate = elements.create('CARD_DATE', styles);
     const cardCvv = elements.create('CARD_CVV', styles);
     const cardPostalCode = elements.create('CARD_POSTAL_CODE', styles);
     

     cardNumber.mount('#card-number');
     cardDate.mount('#card-date');
     cardCvv.mount('#card-cvv');
     cardPostalCode.mount('#card-postal-code');  
     

     const cardResponse = document.getElementById('card-response');

     const displayCardNumberError = document.getElementById('card-number-errors');
     const displayCardDateError = document.getElementById('card-date-errors');
     const displayCardCvvError = document.getElementById('card-cvv-errors');
     const displayCardPostalCodeError = document.getElementById('card-postal-code-errors');
     

   


     // TODO: Register event handlers
     const botonPago = document.getElementById('btnPago');
     botonPago.addEventListener('click', function(event) {
      event.preventDefault();
      $('#autorizando').show();
      $("#btnPago").hide();
      clover.createToken()
        .then(function(result) {
        if (result.errors) {
          Object.values(result.errors).forEach(function (value) {
            Swal.fire({
                    title: "",
                    text: value,
                    icon: "error",
                    confirmButtonText: "warning",
                    confirmButtonColor: "#ba417c"
                  });
            console.log(value);
            $('#autorizando').hide();
            $("#btnPago").show();
          });
        } else {
       
           if(result.token=="") {
                Swal.fire({
                    title: "",
                    text: "Por favor verifique sus datos",
                    icon: "error",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#ba417c"
                  });
          
          }else{
                autorizar(result.token)
                
          }
        }
      }).catch(function(data){
           console.log(data);
           $('#autorizando').hide();
           $("#btnPago").show();
      });
    });
  }
function autorizar(tokenClover) {
  $('#autorizando').show();
  $("#btnPago").hide();
  const url = api + '/web/pagar/carrito';
  var raw = JSON.stringify({ "token": tokenClover});
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
          Swal.fire({
            title: "",
            text: "Su pago ha sido procesado con exito",
            icon: "success",
            confirmButtonText: "ok",
            confirmButtonColor: "#ba417c"
          });
          window.location.href = "gracias.php";
        } else {
          Swal.fire({
            title: "",
            text: "Su Pago Fue rechazado, por favor verifique sus datos o ingrese otro metodo de pago",
            icon: "warning",
            confirmButtonText: "ok",
            confirmButtonColor: "#ba417c"})
            $('#autorizando').hide();
            $("#btnPago").show();
    }})
    .catch(error => {
        Swal.fire({
          title: "",
          text: "No podemos Confirmar su pago por este medio en este momento, por favor comuniquese con nosotros por WhatsApp al +1/786-800-0990 o clientes@mayoristasdeopticas.com",
          icon: "warning",
          confirmButtonText: "ok",
          confirmButtonColor: "#ba417c"
        });
        $('#autorizando').hide();
        $("#btnPago").show();
        return JSON.stringify({ status: 500, error: "Error" });
    });





}