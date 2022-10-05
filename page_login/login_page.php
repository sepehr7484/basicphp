

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
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div id="user">
            <form method="post" action="engine/do_login.php">
                <input type="text" name="email" class="inputs" placeholder="Enteremail...."><br>
                <input type="password" name="pass_word" class="inputs" placeholder="Enter Password"><br>
                
                <input type="submit" name="do-login" value="Login"><br><!-- comment -->
                
                
                <a href="index.php" id="c_account">Create Account?</a>
                
            </form>
            
        </div>
    </body>
</html>
