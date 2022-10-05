
<?php
require_once './engine/db.php';
if(!isset($_SESSION["loggin"])){
    header('Location:login_page.php');
} else {
    
}
$user_email=$_SESSION["loggin"];
$getdata= $mysql->query("SELECT * FROM register WHERE email='$user_email'");
$fetch= mysqli_fetch_array($getdata);





?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>WELCOME :<b style="color: red"> <?php echo $fetch['username']; ?> </b> to WebSite.</h1> 
        
        <pre>EMAIL:<?php echo $fetch['email']; ?></pre>
        <pre>EMAIL:<?php echo $fetch['password']; ?></pre>
        
        
<?php
//
//
//if (isset($_SESSION["loggin"])) {
//
//    echo 'loginnn';
//    
//    
//    
//}else{
//    echo 'not login';
//}
//
//
//?>
        
        
        
        <br> <a href="logout.php">LogOut the Profile!</a>
    </body>
</html>
