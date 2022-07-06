<?php
    session_start();
    include 'dashboard.php';
    
    

    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['pass']
        $ar  = ?> <script> JSON.parse($user)</script> <?php ; 
        echo($ar);
    }
?>