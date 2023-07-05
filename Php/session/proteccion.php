<?php
    session_start();
    if(!isset($_SESSION['identificativoDeSession'])){
        header('location:./index.php');
        exit();
    }
?>