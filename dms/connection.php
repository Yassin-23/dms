<?php
$hostname="localhost";
$username="root";
$password="";
$database="dms";
$conn=mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
    echo"database not connected";
}
?>