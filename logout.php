<?php 

    session_start();
    session_destroy();
    setcookie('flag', 'borhan', time()-10, '/');
    header('location: login.php');
?>