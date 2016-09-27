<?php include 'loginCheck.php'?>
<?php include 'header.php'?>

    <h1 class="text-center">Lista e Shpenzimeve</h1>
    <p>
        <form method="get">
            <label>Shfaq shpenzimet prej: </label><br/>
            <input type="text" name="fromDate" value="<?php if(isset($_GET["fromDate"])) echo $_GET["fromDate"]; ?>" placeholder="YYYY-MM-DD"/>
            <label>deri:</label>
            <input type="text" name="toDate" value="<?php if(isset($_GET["toDate"])) echo $_GET["toDate"]; ?>" placeholder="YYYY-MM-DD"/>
            <input type="submit" value="Filtro"/> <br/>
        </form>
    </p>
    <p>
        <form method="get">
            <label>Shfaq shpenzimet per:</label><br/>
            <input type="text" name="date" value="<?php if(isset($_GET["date"])) echo $_GET["date"]; ?>" placeholder="YYYY-MM-DD"/>
            <input type="submit" value="Filtro"/> <br/>
        </form>
    </p>
    <p>
        <form method="get">
            <label>Shfaq shpenzimet vetem per:</label>
            <select name="category">
                <?php
                $categories = mysqli_query($connection, "select * from categories");
                while($row = mysqli_fetch_assoc($categories)){
                    echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                }
                ?>
            </select>
            <input type="submit" value="Filtro"/> <br/>
        </form>
    </p>
    <br/>

    <?php
        $sql = "select * from expenses";
        if (isset($_GET["date"])) {
            $sql = "select * from expenses where `date`='".$_GET["date"]."'";
        }
        if (isset($_GET["category"])) {
            $sql = "select * from expenses where `category`='".$_GET["category"]."'";
        }
        if (isset($_GET["fromDate"]) && isset($_GET["toDate"])) {
            $sql = "select * from expenses where `date` >= '".$_GET["fromDate"]."' AND `date` <= '".$_GET["toDate"]."'";
        }
        $result = mysqli_query($connection, $sql);
    ?>
    <div>
        <hr/>
        <table border="1" style="">
            <tr>
                <td>Id</td>
                <td>Data</td>
                <td>Kategoria</td>
                <td>Vlera</td>
            </tr>

            <?php
            $total = 0;
            while($row = mysqli_fetch_assoc($result)){
                $cat_name = mysqli_query($connection, "select `name` from categories where id='".$row['category']."';");
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".mysqli_fetch_assoc($cat_name)["name"]."</td>";
                echo "<td>".$row['value']."</td>";
                echo "</tr>";
                $total += $row['value'];
            }
            echo '<tr><td></td><td></td><td><strong>Totali</strong></td><td>';
            echo '<strong>'.$total.'</strong>';
            echo '</td></tr>';
            ?>
        </table>
    </div>

    <a href="addExpense.php" class="float-right">Regjistro shpenzim te ri</a>

<?php include 'footer.php'?>