<?php
include 'loginCheck.php';
include 'header.php';
if (isset($_POST["modifyCategory"])) {
    $sql = "update `categories` set `name`='".$_POST['name']."' where id='".$_POST['id']."'";
    mysqli_query($connection, $sql) or die(mysqli_error($connection));
    echo 'Kategoria u ndryshua me sukses.';
}
$category = mysqli_query($connection, "select * from categories where id='".$_GET["id"]."'");
$result = mysqli_fetch_assoc($category);
?>

    <h1 class="text-center">Modifiko Kategorine</h1>
    <form method="post">
        <label>Kategoria: </label><br/>
        <input type="text" name="name" value="<?php echo $result['name']; ?>"/><br/>
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>"/>
        <input type="submit" name="modifyCategory" value="Modifiko Kategorine"/>
    </form>

<?php include 'footer.php'?>