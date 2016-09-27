<?php
include 'loginCheck.php';
include 'header.php';
if (isset($_POST["addCategory"])) {
    $sql = "insert into `categories` (`name`) values ('".$_POST['name']."')";
    mysqli_query($connection, $sql) or die(mysqli_error($connection));
    echo 'Kategoria u shtua me sukses.';
}
?>

    <h1 class="text-center">Shto Kategorine</h1>
    <form method="post">
        <label>Kategoria: </label><br/>
        <input type="text" name="name"/><br/>
        <input type="submit" name="addCategory" value="Shto Kategorine"/>
    </form>

<?php include 'footer.php'?>