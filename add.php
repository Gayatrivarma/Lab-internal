<?php
    include 'connect.php';
    session_start();
    if (isset($_POST['sub'])) {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $des=$_POST['des'];
        $image=$_FILES['image']['name'];
        $target = "images/".$image;
        $qry = "INSERT INTO `pro_Des` (`id` , `name` ,`Des`, `image`) 
        VALUES ('$id' , '$name' ,'$des' ,'$image');";
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
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
        <form action="" method="post" enctype="multipart/form-data">
        Product_Id : <br> <input class="inp" type="text" name="id" required></input><br><br>
        Name : <br> <input class="inp" type="text" name="name" required></input><br><br>
        Description : <br> <textarea class="inp" name="des" rows=10 cols=50 > </textarea><br><br>
        <input type="file" name="image"> 
        <input class="inp" type="submit" name="sub">
        <!-- Email : <br> <input type="email" name="email" required></input> -->
</form>
</div>
</body>
</html>