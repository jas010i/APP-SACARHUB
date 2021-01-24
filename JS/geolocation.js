    
    
    
    
    
    
    
    
    
    
    
    
    // Initialize and add the map

    function initMap() {
    
      // San Antonio, TX
    
      const sanAntonio = { lat: 29.4241, lng: -98.4936 };
    
      // The map, centered at San Antonio
    
      const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: sanAntonio,
          mapId:'6cbaf94f194ffc7a',
        });
    }

    