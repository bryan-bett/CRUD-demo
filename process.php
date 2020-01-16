<?php

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
   $name= $_POST['name'];
   $location = $_POST['location']; 

   $mysqli -> query("INSERT INTO data (name, location) VALUE ('$name','$location')") or
    die($mysqli->error);
}

?>