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
// Taking all 5 values from the form data(input)
		$latitude = $_REQUEST['latitude'];
		$longitud = $_REQUEST['longitud'];
echo "value captured";


		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO ambulances (Ambulance_latitude,Ambulance_longitude) VALUES ('$latitude','$longitud')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse the admin"
				. " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
