<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
    include "database.php";
    $sql = "SELECT * FROM users WHERE email='".$_POST["email"]."' AND password='".md5($_POST["password"])."'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
        $_SESSION['loggedIn'] = true;
        header("Location: expenses.php");
    }
    else {
        header("Location: index.php");
    }
}
?>