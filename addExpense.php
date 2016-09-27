<?php
    include 'loginCheck.php';
    include 'header.php';
    $categories = mysqli_query($connection, "select * from categories");
    if (isset($_POST["addExpense"])) {
        $sql = "insert into `expenses` (`date`, `category`, `value`) values ('".$_POST['date']."','".$_POST['category']."','".$_POST['value']."')";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        echo 'Shpenzimi u shtua me sukses.';
    }
?>

    <h1 class="text-center">Regjistro Shpenzimin</h1>
    <form method="post">
        <label>Kategoria: </label><br/>
        <select name="category">
            <?php
                while($row = mysqli_fetch_assoc($categories)){
                    echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                }
            ?>
        </select><br/><br/>
        <label>Data:</label><br/>
        <input type="text" name="date" placeholder="YYYY-MM-DD"/><br/><br/>
        <label>Vlera</label><br/>
        <input type="number" name="value" ><br/><br/>
        <input type="submit" name="addExpense" value="Ruaj shpenzimin"/>
    </form>

<?php include 'footer.php'?>