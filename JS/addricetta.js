
//Esegue la funzione dopo che la pagina è stata caricata
$(document).ready(function () {

		$('body').on("click", '#insRic', function() {		//esegue la richiesta ajax al click sul bottone con id "insRic"


       $.ajax({ 
                type: "POST",
                url: 'addricetta.php',    //url dello script da eseguire in modo asincrono
                data: $('#formRicet').serialize(),     //prepara la querystring da inviare al server
                success: function(data) {
                		 if (data==1) {
                		 alert("inserito!");
                      $("#formricetta").remove(); //sostituisce il contenuto html del div con i dati restituiti dal server
                      }
                      else {
                      	alert(data);
                      
                      }
                },
                 error: function(jqXHR) {   //se la richiesta ajax fallisce
                      alert('Status Code: ' + jqXHR.status + '\nStatus Text: ' + jqXHR.statusText + '\n\n' + jqXHR.responseText);
                }
        });
     });
});
                                                                     