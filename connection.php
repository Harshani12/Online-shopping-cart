<?php 
$host="localhost";
$userName="root";
$password="";
$db="online_shopping";
$con=mysqli_connect($host,$userName,$password,$db);
if ($con) {
    echo "connection successfull";
}
else {
    echo "connection unsuccessfull";
}
?>