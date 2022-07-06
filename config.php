<?php 
    session_start();
    include 'array.php';

    if(isset($_POST['login'])){
        
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        $ar  =  json_decode($user_arr);
        foreach($ar as $key=>$val){
            if($key == $user && $val == $pass){
                echo "True";
                break;
            }
        }
        $_SESSION['login'] = $user;
        
        
    }
    if(isset($_POST['logout'])) unset($_SESSION['login']);

    if(isset($_POST['dd'])){
        $dd = $_POST['dd'];
       if(strlen($dd)>0){
        foreach($ar as $key=>$val){
            
            if(strlen($dd) <= strlen($key)){
                $rr = '';
                for($i=0;$i<strlen($dd);$i++)   $rr=$rr.$key[$i]; 

                if($rr==$dd){
                    echo "<tr>
                        <td>".$key."<td>
                        <td>".$val."<td>
                    </tr>";
                }
            }
            
        }
       }
        
    }

?>