<?php
    include 'connect.php';
    session_start();
    if(isset($_POST["sub"]))
    {
        $email=$_POST["email"];
        $name=$_POST["name"];
        $pass=$_POST["password"];
        $null="null";
        $qry="INSERT INTO `reg` (`email` , `name` , `password` , `admin` ) VALUES ('$email' , '$name' ,'$pass' ,'$null');";
        //echo $qry;
        $q=mysqli_query($conn,$qry);

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
    <header>
    <img src="images/feed.png" width="100px" height="100px">
        <h1>Give Your Feedback</h1>
    </header>
    <div class="reg">
        <form action="" method="post">
        Email : <br> <input class="inp" type="email" name="email" required></input><br><br>
        Username : <br> <input class="inp" type="text" name="name" required></input><br><br>
        Paasword : <br> <input class="inp" type="password" name="password" required></input><br><br>
        <input class="inp" type="submit" name="sub">
        
</form>
</div>
</body>
</html>