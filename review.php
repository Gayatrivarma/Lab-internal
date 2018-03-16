<?php
include 'connect.php';
session_start();
if (isset($_POST['sub'])) {
    $user=_SESSION['name'];
    $id=_SESSION['id'];
    $rating=$_POST['rating'];
    $des=$_POST['des'];
    $qry = "INSERT INTO `reviews` (`username` , `id` ,`rating`, `Des`) 
    VALUES ('$user' , '$id' ,'$rating' ,'$des');";
    mysqli_query($conn, $qry) ;
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
        Rating : <br> <input class="inp" type="text" name="rating" required></input><br><br>
        <!-- Name : <br> <input class="inp" type="text" name="name" required></input><br><br> -->
        Description : <br> <textarea class="inp" name="des" rows=10 cols=50 > </textarea><br><br>
        <input class="inp" type="submit" name="sub">
        <!-- Email : <br> <input type="email" name="email" required></input> -->
</form>
</div>
</body>
</html>