<?php
/*
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/


function linkgen() {
//Link generieren
$basicLink = "http://ewahl.ml/";
$assignedLink = mysql_query("SELECT Freigabelink FROM Benachrichtigung");
$result = mysql_fetch_array($assignedLink);
do{
	$pass = $basicLink.substr(md5(uniqid(mt_rand(), true)) , 0, 5);
}while(in_array ($pass,$result))

$addpass = mysql_query("INSERT INTO Benachrichtigung VALUES('$pass', 'User', 'Wahl', date)");
return $pass;
}



?>

