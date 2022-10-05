<?php
require_once './db.php';
$email2= $_POST['email'];
$pass_word= md5($_POST['pass_word']);
//echo $email2.'    '.$pass_word;



//$checking=mysqli_query($db,"SELECT * FROM register WHERE username='$email2' AND password='$pass_word' ");

$checking=$mysql->query("SELECT * FROM register WHERE email='$email2' AND password='$pass_word' ");
$showdisplay=$mysql->query("SELECT * FROM register");

//print_r($showdisplay);show value and lenght tabel in mysql
//$checkrow=mysqli_num_rows($checking);
echo '<br>';
//echo mysqli_num_rows($checking);
if (mysqli_num_rows($checking)>0) {
    $_SESSION["loggin"]=$email2; 
    
 
    header('Location:../profile.php'); 
} else {
    echo 'you do not find.';
}
//print_r($checking);



//if (mysqli_num_rows($checking)) {
//    
//}
//



