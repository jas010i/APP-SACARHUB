


alert (var spotLocation = document.getElementById("get-location");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        spotLocation.innerHTML= "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
      }
;