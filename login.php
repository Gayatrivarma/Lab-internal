<?php
    include 'connect.php';
    session_start();
    if(isset($_POST["sub"]))
    {
        $name=$_POST["name"];
        $_SESSION["name"]=$name;
        $pass=$_POST["password"];
        $qry="SELECT *  FROM `reg` where `name`='$name' and `password`='$pass' ;";
        $q=mysqli_query($conn,$qry);
        if(!$q){
            echo "connection not established";
        }
        $r=mysqli_fetch_array($q);
        $admin= $r['admin'];
        if( $admin = "true")
        {
            echo "Admin";
            header("Location:admin.php");
        }
        else if(mysqli_num_rows($q)>0)
        {
            echo "valid user";
            header("Location:home.php");
        }
        else{
            echo "invalid user";
        }
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
        Username : <br> <input class="inp" type="text" name="name" required></input><br><br>
        Paasword : <br> <input class="inp" type="password" name="password" required></input><br><br>
        <input class="inp" type="submit" name="sub">
        <!-- Email : <br> <input type="email" name="email" required></input> -->
</form>
</div>
</body>
</html>