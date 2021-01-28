<!DOCTYPE html>
<html lang="en">

<head>

<!--title & meta-->

        <title>San Antonio HEAT</title>
        <link rel="icon" href="../APP-SACARHUB/IMAGES/web-icon.PNG">

        
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
        <form action="post_location.php" method="POST">
                <label for="roads">Select an area:</label>
                    <select id="roads" name="roads" required>
                        <option value="null"></option>
                        <option value="Loop 1604/I-10">Loop 1604 and I-10</option>
                        <option value="De Zavala/I-10">De Zavala and I-10</option>
                        <option value="Hausman/I-10">Hausman and I-10</option>
                        <option value="Bandera/1604">Bandera and 1604</option>
                        <option value="Culebra/1604">Culebra and 1604</option>
                    </select> <br>
                <label for="quantity">How many on site?</label>
                    <select id="quantity" name="quantity" required>
                        <option value="null"></option>
                        <option value="1">1 - 2</option>
                        <option value="3">3 - 4</option>
                        <option value="5">5 - 6</option>
                        <option value="7">7 or more</option>
                    </select><br>
                <input id="form-submit" type="submit" value="Submit">
    </div>

    <div class="latlong-user-coord">

        <p id="user-latlong"></p>

    </div>

        </header>









        


        <div class="mobile-warning">
            <h1>Attention: You're viewing this page on a non-mobile device. <br>
                Please come back on a mobile device.
            </h1>
        </div>

<div class="icon-legend">

    <span id="counter-ticker">
        <i class="material-icons" id="thermo" style="font-size: 8vw; margin-top: 85%;">filter_9_plus</i>
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