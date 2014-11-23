<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Teacher Supply Warehouse</title>
        <meta name="description" content="Teacher Supply Warehouse">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php include("header.php"); ?>
        <?php include("navbar.php"); ?>
        <?php 
            if(isset($_GET['username'])) {
                $username = $_GET['username'];
            }
            
            else $username = false;
        ?>
        
        <div class="content">
            <?php 
            if (!$username) {
                echo "<h3>Welcome!</h3>";
                echo "<p>You haven't logged in!</p>";
                echo "<p><a href='register.php?error='>Sign up!</a><br><a href='teacherlogin.php?error='>Login!</a></p>";
            }

            else {
                echo "<h3>Welcome, ".$username."</h3>";
            }
            ?>
        </div>
        
        <?php include("footer.php"); ?>
     
        
    </body>
</html>