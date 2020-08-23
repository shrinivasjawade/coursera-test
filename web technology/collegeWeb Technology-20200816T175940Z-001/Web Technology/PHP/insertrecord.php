
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_error());
} 
echo "Connected successfully";


mysqli_select_db($conn,"emp")or die(mysqli_error());

//Insert operation

$sql="insert into etable (fname,lname) VALUES ('$_POST[fname]','$_POST[lname]')";
mysqli_query($conn,$sql)or die(mysqli_error());


echo "Record inserted successfully";


?>
