<?php
include 'loginCheck.php';
if(isset($_GET["id"])) {
    $removeCatSql = "delete from categories where id='".$_GET['id']."';";
    $result = mysqli_query($connection, $removeCatSql) or die (mysqli_error($connection));
    $removeCatSql = "delete from expenses where category='".$_GET['id']."';";
    $result = mysqli_query($connection, $removeCatSql) or die (mysqli_error($connection));
    header("Location: categories.php");
}