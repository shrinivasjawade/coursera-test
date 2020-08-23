
<?php

include 'connect.php';


mysqli_select_db($conn,"emp")or die(mysqli_error());


//Display operation

$res=mysqli_query($conn,"select * from etable");
print "<html><body><br/>";
print "<b> Employee Infomation </b>";
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
