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
            $error = $_GET['error'];
            echo $error;
        ?>
        <div class="content">
            <h3>Sign in!</h3>
            
            <form action='trylogin.php' method="post">
                <p>Username: <input type='text' name='username'/></p>
                <p>Password: <input type='text' name='pass'/></p>
                <p> <input type='submit' value='Submit'/></p>
            </form>
        </div>
        
        <?php include("footer.php"); ?>
     
        
    </body>
</html>