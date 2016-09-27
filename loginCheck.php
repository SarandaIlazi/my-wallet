<?php
include "database.php";
if (isset($_SESSION['loggedIn'])) {
    //header("Location: expenses.php");
}
else {
    //header("Location: index.php");
}