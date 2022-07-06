<?php
session_start();


include 'array.php';

?>

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table style='text-align:left;'>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>

<?php
    foreach($ar as $key=>$val){
        echo "<tr>
            <td>".$key."<td>
            <td>".$val."<td>
        <tr>";
    }
?>
    </table>

    <button id='btn'>Logout</button> <br><br>

    <input type='text' id='ser'>

    <div id='res'></div>
    
</body>
</html>



<script>
     $(document).ready(function(){
        $('#btn').click(function(){
           // console.log($('#ser').val());
            $.ajax({
                    type : 'post',
                    url : 'config.php',
                    data:{
                        logout:'log'
                    },
                    success: function(response){
                        window.location = 'index.php';
                    }
                });
        });

        $('#ser').keyup(function(){
            $data = $('#ser').val();
            $.ajax({
                    type : 'post',
                    url : 'config.php',
                    data:{
                        dd:$data
                    },
                    success: function(response){
                       $('#res').html(response);
                    }
                });
        });
  
        });
        
        </script>
