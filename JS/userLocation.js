




var userLocation = document.getElementById("user-latlong");
        
function getLocation() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      }
        else{ 
                userLocation.innerHTML = "Geolocation is not supported by this browser.";
            }
}


              function showPosition(position) {

                              document.getElementById("user-latlong").innerHTML = "Latitude: " + position.coords.latitude + 
                                
                                                        "<br>Longitude: " + position.coords.longitude;
              }