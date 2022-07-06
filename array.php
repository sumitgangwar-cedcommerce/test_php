<?php 
    $user_arr = array(
        "sumit"=>"1234",
        "amit"=>"123",
        "shiv"=>"12",
        "kamal"=>"12345",
        "vaibhav"=>"12345"
    );
    $user_arr = json_encode($user_arr);

    $ar  =  json_decode($user_arr);
?>