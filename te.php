<?php
$servername = "rm-l4v670ce623mi4fxv.mysql.me-central-1.rds.aliyuncs.com";
$username = "amb";
$password = "No123456";
$dbname = "demodb";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "hellloooo";

if(isset($_POST["submit"])){
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    echo $latitude;

$query = "UPDATE ambulances SET Ambulance_latitude = $latitude, Ambulance_longitude = $longitude WHERE id_ambulance = '001'";
    mysqli_query($conn, $query);
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
}
$conn->close();

?>