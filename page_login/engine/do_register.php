<?php
require_once './db.php';
$username= $_POST['username'];
$email= $_POST['email'];
$password= md5($_POST['password']);
$pass_config= md5($_POST['conf_pass']);


//......................................
//echo '<h1>'.$username.'</h1>';
//echo '<h1>'.$email.'</h1>';
//echo '<h1>'.$password.'</h1>';
//echo '<h1>'.$pass_config.'</h1>';

//----------------------------------------

if($password != $pass_config){
    echo 'FALSE PASSCNOFIG...........';
} else {
    $register="INSERT INTO register VALUES(Null,'$username','$email','$password')";

        if($mysql->query($register)=== true){
            header('Location:../login_page.php');
        } else {
            echo "<p>Error: </p>".$mysql->error;
            include '../index.php';
}
}



