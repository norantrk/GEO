<?php
$servername = "rm-l4v670ce623mi4fxv.mysql.me-central-1.rds.aliyuncs.com";
$username = "amb";
$password = "No123456";
$dbname = "demodb";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "hellloooo";

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

echo $latitude;

$query = "UPDATE ambulances SET Ambulance_latitude = $latitude, Ambulance_longitude = $longitude WHERE id_ambulance = '001'";
mysqli_query($conn, $query);

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
  </head>
  <body onload="getLocation();">
    <div id="map"></div>
    <form class="myForm" action ="" method = "post">
        latitude:<input type = "text" name="latitude" value="">
        longtiude:<input type = "text" name="longitude" value=""><br>
    </form>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
    
        // Try HTML5 geolocation.
        function getLocation(){

            if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError);
            }
        }
            function showPosition(position){
                document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;

            }
            function showError(error){
                switch(error.code){case error.PERMISSION_DENIED:
                alert("Allow")
                location.reload();
                break;
                }
            }
    </script>
  </body>
</html>
