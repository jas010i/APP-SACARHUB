


<!DOCTYPE html>
<html lang="en" style="background-color: black; display: none;">
<head>
    <head>





    <?php
$mysqli = new mysqli("localhost", "iridescXnt343_auth_user", "$6927=Jas010i.s03107@%", "sa_heat");

if ($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$roads = $_POST['roads'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO location (areaName, quantityPolice) 
          VALUES ('$roads', '$quantity')";
    if($mysqli->query($sql) === true){
      echo "Thank you for your submission.";
    } else{
      echo "ERROR: Could not submit form data. " . $mysqli->error;
    }

    $mysqli->close();
?>













        <!--title & meta-->
        
                <title>San Antonio HEAT</title>
                <link rel="icon" href="/IMAGES/web-icon.PNG" type="image/icon type">
                
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
        
<script>


function redirect() {
    window.location.href = "index.php";
}


</script>



            </head>

<body onload="redirect();"></body>


</html>