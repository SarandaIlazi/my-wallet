<?php include 'header.php'; ?>
    <h1 class="text-center">Kyqu</h1>
    <form action="login.php" method="post" >
        <label>Email: </label><br/>
        <input type ="text" name="email"><br/><br/>
        <label>Fjalekalimi: </label><br/>
        <input type ="password" name= "password" ><br/><br/>
        <input type ="submit" value="Kyqu">
        <a href="register.php" class="float-right">Regjistrohu</a>
        <br/>
    </form>
<?php include 'footer.php'; ?>