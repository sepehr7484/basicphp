<?php
require_once './engine/db.php';
if(isset($_SESSION["loggin"])){
    header('Location:profile.php');
} else {
}
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="styles.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div id="user">
            <form action="engine/do_register.php" method="post">
                <input type="text" class="inputs" name="username" placeholder="Enter UserName...."><br>
                <input type="email" class="inputs"  name="email" placeholder="Enter Email...."><br>
                <input type="password" class="inputs"  name="password" placeholder="Enter Password...."><br>
                
                <input type="password" class="inputs"  name="conf_pass" placeholder="Enter Config Password....">
               <h1></h1>
                <input type="submit" class="submits" value="Register" name="do_login">
                
            </form>
        </div>
        
        
        
        
        <?php
     
        ?>
    </body>
</html>
