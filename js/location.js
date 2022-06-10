// Lo primero que haremos, será definir las variables que utilizaremos para capturar los elemento que servirán para mostrar información en nuestra página.

var enlace = jQuery('.ubicar');
var longitud = jQuery('.longitud');
var latitud = jQuery('.latitud');
var mensaje = jQuery('.mensaje');


// Después verificaremos que el navegador soporte el uso de geolocation.

if (navigator.geolocation) {
    //Si entra aquí, es que el navegador lo soporta
  } else {
    alert('Lo sentimos, tu navegador no soporta geolocation');
  }

//   Si el usuario logra pasar esta validación, entonces debemos capturar el evento clic que se realice sobre el enlace para encontrar la ubicación.

  if (navigator.geolocation) {
    enlace.click(function(e) {
      e.preventDefault();
      mensaje.html("Cargando...");
      navigator.geolocation.getCurrentPosition(insertarUbicacion, errorUbicacion);
    });
  } else {
    alert('Lo sentimos, tu navegador no soporta geolocation');
  }

//   Con esto, cuando el usuario de clic sobre el enlace, el mensaje del recuadro cambiará a “Cargando…” y se calculará la ubicación desde donde esta accediendo. Para esta acción se hace una llamada a la función “getCurrentPosition” la cual recibe dos parámetros, el primero de ellos indica hacia donde se mandara la información una vez que se obtenga, y el segundo sirve para indicar el nombre de la función que se llamará en caso de una falla.
function insertarUbicacion(posicion) {
    // Obtenemos las propiedades de geolocation y las guardamos en las variables
    var glatitud = posicion.coords.latitude;
    var glongitud  = posicion.coords.longitude;
   
    // Insertar el mapa de google en un iframe
    jQuery('#mapa').html('<iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/?ie=UTF8&amp;ll='+glatitud+','+glongitud+'&amp;spn=0.332359,0.617294&amp;t=m&amp;z=11&amp;output=embed"></iframe>');
   
    longitud.html('Longitud: '+glongitud);
    latitud.html('Latitud: '+glatitud);
   
    //Hacemos una llamada ajax a la API de Google Maps para obtener el mapa de la ubicación
    jQuery.ajax({
        url: 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+glatitud+','+glongitud+'&sensor=true',
        type: 'POST',
        dataType: 'json',
        error: function(xhr, textStatus, errorThrown) {
            errorUbicacion();
         }
     });
           
  }
   
  function errorUbicacion() {
     alert('No pudimos encontrar tu ubicación exacta');
  }