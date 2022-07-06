<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" id="password"></td>
        </tr>
        <tr>
            <td><button id='btn'>submit</button></td>
        </tr>
    </table>
    <div id="err"></div>
</body>
<script>
    $(document).ready(function(){
        $('#btn').click(function(){
            
            $user = $('#username').val();
            $pass = $('#password').val();
            // alert($user);
            $.ajax({
                type : 'post',
                url : 'config.php',
                data:{
                    login:'check',
                    username:$user,
                    pass : $pass
                },
                success: function(response){
                    console.log(response);
                    if(response=="True")    window.location = 'dashboard.php';
                    else    $('#err').html('invalid credentials');
                }
            });
        });
    });
</script>
</html>