<?php
    if(isset($_POST['code']) && isset($_COOKIE['code']) && isset($_COOKIE['email']) && $_POST['code']==$_COOKIE['code']){
        header('HTTP/1.1 200 Ok');
    }
    else{
        die(header('HTTP/1.1 404 non'));
    }
?>