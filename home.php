<?php
    include 'connect.php';
    session_start();
    $_SESSION['name'];
    $qry= "SELECT * FROM `pro_Des`;";
    $q=mysqli_query($conn,$qry);
    if(!$q){
        echo "connection not established";
    }
    $t= mysqli_num_rows($q) ;
    
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
        <a href=""> home </a>
        <a href="login.php"> login </a>
        <a href="register.php"> Register</a>

    </header>
        <div class="prod">      
        <?php
            while($r=mysqli_fetch_array($q))
            {
                echo "<div id='block'>";
                echo "<img src='images/".$r['image']."' >";
                echo "<div id='block'>";
                echo  "Product Id :" . $r['id']  ; 
                echo  "<div id='block' > ";       
                echo "Product Name : " . $r['name'] ;
                echo "<div id='block' > ";
                echo  "Product Des : " . $r['Des'] ;
                echo "<lr>";
                echo "</div>";
                echo "</div>";
            }
        ?>
        </div>
</div>
</div>
</body>
</html>