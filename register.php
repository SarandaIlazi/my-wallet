<?php include 'header.php'?>
    <h1 class="text-center">Regjistrohu</h1>
    <form action="addUser.php" method="post" >
        <label>Emri: </label><br/>
        <input type="text" name="name" placeholder="Sheno emrin" required><br/><br/>
        <label>Mbiemri: </label><br/>
        <input type="text" name="surname" placeholder="Sheno mbiemrin" required><br/><br/>
        <label>Email: </label><br/>
        <input type="text" name="email" placeholder="example@hotmail.com" required><br/><br/>
        <label>Password: </label><br/>
        <input type="password" name="password" required><br/></br>
        <input type="submit" >
        <a href="index.php" class="float-right">Kyqu</a>
        <br/>
    </form>
<?php include 'footer.php'?>