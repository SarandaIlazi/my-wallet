<?php
include "database.php";
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `users` (`name`, `surname`, `email`, `password`) VALUES ('".$name."', '".$surname."', '".$email."', '".md5($password)."')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

include 'header.php';
    if($result) {
        echo 'Perdoruesi eshte shtuar me sukses.<br/>';
        echo '<a href="index.php">Kyqu</a>';
    }
    else {
        echo 'Gabim gjate shtimit te perdoruesit.';
    }
include 'footer.php';
