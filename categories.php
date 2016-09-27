<?php include 'loginCheck.php'?>
<?php include 'header.php'?>

<h1 class="text-center">Lista e Kategorive</h1>
    <?php $result = mysqli_query($connection, "select * from categories"); ?>
    <div>
        <table border="1" style="">
            <tr>
                <td>Id</td>
                <td>Emri</td>
                <td style="width: 150px;">Menaxho</td>
            </tr>

            <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo '<td><a href="modifyCategory.php?id='.$row["id"].'"">[ Modifiko ]</a>
                     <a href="removeCategory.php?id='.$row["id"].'">[ Fshij ]</a></td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <a href="addCategory.php" class="float-right">Shto Kategori te re</a>
<?php include 'footer.php'?>