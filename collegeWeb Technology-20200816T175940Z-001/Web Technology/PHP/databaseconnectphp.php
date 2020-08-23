
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


//Delete record

$sql = "DELETE FROM etable WHERE fname='sy'";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//Display operation

$res=mysqli_query($conn,"select * from etable");
print "<html><body><br/>";
print "<b> Student Infomation </b>";
echo "<table border='1'>";

while($row=mysqli_fetch_array($res))
{
echo "<tr><td>";

echo $row['fname'];
echo "</td><td>";

echo $row['lname'];
echo "</td>";

echo "</tr>";


} 

echo "</table></body></html>";



?>
