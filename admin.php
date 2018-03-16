<?php
    include 'connect.php';
    session_start();
    if(isset($_POST["Asub"]))
    {
        echo "Add";
        header("Location:add.php");
    }
    if(isset($_POST["Ssub"]))
    {
        echo "connection";
        header("Location:home.php");
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
        <div class="prod">
            <form action="" method="post">
            <br>
            <input class="inp" type="submit"  name="Asub" value="ADD PRODUCT">
            <br><br>
            <input class="inp" type="submit"  name="Ssub" value="SHOW REVIEWS">
</form>
</div>
</div>
</body>
</html>