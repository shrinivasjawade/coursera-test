<?php
include 'connect.php';

mysqli_select_db($conn,"emp")or die(mysqli_error());

//Delete record

$sql = "DELETE FROM etable WHERE fname='sy'";

if(mysqli_query($conn,$sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
