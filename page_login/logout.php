<?php

require_once './engine/db.php';
unset($_SESSION["loggin"]);// delete session transfer to login
if(isset($_SESSION["loggin"])){
    echo 'do not delete..';
} else {
    header('Location:login_page.php');
}