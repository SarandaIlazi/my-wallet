<?php
//session_destroy();
session_start();
unset($_SESSION["loggedIn"]);
header('Location: index.php');