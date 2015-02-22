//Esegue la funzione dopo che la pagina è stata caricata
$(document).ready(function () {
	
var loc = window.location.href;		//restituisce l'url della pagina corrente
var namepage  = loc.split('/').pop().split('.').shift();		//estrapola il nome della pagina senza estensione per la query di ricerca nel DB

       $.ajax({ type: "POST",
                url: 'searchricett.php',    //url dello script da eseguire in modo asincrono
                data: {namepg : namepage},
                success: function(data) {
               
                		$("#searchcont").append(data)
                },
                 error: function(jqXHR) {   //se la richiesta ajax fallisce
                      alert('Status Code: ' + jqXHR.status + '\nStatus Text: ' + jqXHR.statusText + '\n\n' + jqXHR.responseText);
                }
        });
});
                                                                     