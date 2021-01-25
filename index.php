<!DOCTYPE html>
<html lang="en">

<head>


<!--php to connect to database-->

<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>


<!--title & meta-->

        <title>San Antonio Car Hub - Hotspot Tracker</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--External Files-->

        <!--CSS Links Here-->
                <!--API Icon CSS-->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!--Native CSS-->

                    <link rel="stylesheet" href="CSS/main.css">
                    <link rel="stylesheet" href="CSS/mobile-only.css">


      
        <!--Javascript Links Here-->
                <!--Native JS-->
                    <script src="JS/submit.js"></script>
                    <script src="JS/geolocation.js"></script>
                    <script src="JS/userLocation.js"></script>

                <!--Google Maps JS API-->
                    <script defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWaEfDgZ0XXRmFZvab-SyU5X92DpcoG2k&map_ids=6cbaf94f194ffc7a&callback=initMap">
                    </script>
                    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                    <script
                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWaEfDgZ0XXRmFZvab-SyU5X92DpcoG2k&callback=initMap&libraries=visualization&v=weekly"
                      defer>
                    </script>














        <!--Google Font's Here-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
                <!--Jura Font-->
                <link href="https://fonts.googleapis.com/css2?family=Jura:wght@600&display=swap" rel="stylesheet">
                <!--Cormorant Font-->
                    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300&display=swap" rel="stylesheet">
                <!--Economica Font-->
                    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300&family=Economica:ital@1&display=swap" rel="stylesheet">
                <!--Titillium Font-->
                    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

    </head>

    <body>

        <header>
            <div class="banner">
                <img src="IMAGES/sanantonio-heat-banner.png" alt="San Antonio Heat">
            </div>




        <p id="popup-notice"></p>




        <div class="report-button">
            <button type="button" id="button-submit" onclick="getLocation(); submit();">Report a Hotspot</button>
        </div>
        </header>






    <div class="latlong-user-coord">

        <p id="user-latlong"></p>

    </div>










        <div class="heat-map">

            <div id="map"></div>
                 
        </div>

        


        <div class="mobile-warning">
            <h1>Attention: You're viewing this page on a non-mobile device. <br>
                Please come back on a mobile device.
            </h1>
        </div>

<div class="icon-legend">

    <span id="counter-ticker">
        <i class="material-icons" id="thermo" style="font-size: 8vw;">filter_9_plus</i>
        <p>The number of reports submitted by users in the area</p>
    </span>

    <span id="counter-ticker" style="margin-bottom: 7%; margin-top: 3%;">
        <i class="fa fa-thermometer-3" id="thermo" style="font-size: 8vw;"></i>
        <p>A visual of how <em>'hot' </em>an area is. It varies from <em>'No Police, Light, Medium, and Heavy' </em>police presence.</p>
    </span>

</div>






<div class="main-feed">

        <h1 id="main-feed-title">
            Trending Hotspots
        </h1>

                <div class="hotspot-blocks" style="margin-top: 0;">
                    <h1>Loop 1604 and I-10</h1>
                        <h3><i class="material-icons"  style="font-size:5vw">filter_1</i> Recent Reports</h3>
                        <i class="fa fa-thermometer-0" id="thermo" style=" font-size:4vw; padding-left: 3%; margin-bottom: 2%;"></i>  No Police Presence Reported
                </div>
                <div class="hotspot-blocks">
                    <h1>US-281</h1>
                        <h3><i class="material-icons"  style="font-size:5vw">filter_4</i> Recent Reports</h3>
                        <i class="fa fa-thermometer-2" id="thermo" style=" font-size:4vw; padding-left: 3%; margin-bottom: 2%;"></i>  Light Police Presence Reported
                </div>
                <div class="hotspot-blocks">
                    <h1>I-10 and De Zavala</h1>
                        <h3><i class="material-icons"  style="font-size:5vw">filter_9</i> Recent Reports</h3>
                        <i class="fa fa-thermometer-4" id="thermo" style=" font-size:4vw; padding-left: 3%; margin-bottom: 2%;"></i>  Heavy Police Presence Reported
                </div>
                <div class="hotspot-blocks">
                    <h1>Medical Center</h1>
                        <h3><i class="material-icons"  style="font-size:5vw">filter_5</i> Recent Reports</h3>
                        <i class="fa fa-thermometer-3" id="thermo" style=" font-size:4vw; padding-left: 3%; margin-bottom: 2%;"></i>  Medium Police Presence Reported
                </div>
</div>




<div class="live-fade-in">
    <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="red" class="bi bi-dot" viewBox="0 0 15 15">
        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
      </svg>Live
    </p>
</div>


<footer>

    <ul class="footer-list">
        <li style="margin-bottom: 2%;"><a href="#disclaimer">Disclaimer</a></li>
            <ul><li id="disclaimer-footer">We do not<i style="background: -webkit-linear-gradient(45deg, rgba(222,0,0,1) 0%, rgba(46,0,255,1) 100%);
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent; color: white;"> condone </i>any form of illegal activity, especially any form of street racing, dig racing, or roll racing. This website is <i style="background: -webkit-linear-gradient(45deg, rgba(222,0,0,1) 0%, rgba(46,0,255,1) 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; color: white;"> solely </i> for entertainment purposes.
            <br><br>We are <i style="background: -webkit-linear-gradient(45deg, rgba(222,0,0,1) 0%, rgba(46,0,255,1) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; color: white;"> not liable </i>for any information presented on this website, whether accurate or not.</li></ul>
        <li style="margin-bottom: 2%;"><a href="#privacy">Privacy</a></li>
            <ul><li id="disclaimer-footer">We do not store, collect, or sell any information provided to us through the<i style="background: -webkit-linear-gradient(45deg, rgba(222,0,0,1) 0%, rgba(46,0,255,1) 100%);
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent; color: white;"> 'report a hotspot' </i>feature.</li></ul>
        <li style="margin-bottom: 2%;"><a href="#career">Careers</a></li>
                <ul><li id="disclaimer-footer">Coming Soon!</li></ul>
        <li style="margin-bottom: 2%;"><a href="#design">iridescXnt Designs</a></li>
                <ul><li id="disclaimer-footer"><a style="text-decoration: none; color: white;" href="https://jas010i.github.io/SACH/">San Antonio Car Hub - Home Page</a></li></ul>

    </ul>


    <img src="IMAGES/SACH_LOGO.png" alt="San Antonio Car Hub Logo">

</footer>

</body>


</html>