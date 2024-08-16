Adminlog.php


<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select *from adminlogin where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $login=1;
            header('location:adminp.html');
        }else{
            echo "invalid crendentials";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>AdminLogIn</title>
</head>


<body>
<?php
    if($login){
        echo "Sucessfully Logged In";
    }
    ?>
     <?php
    if($invalid){
        echo "Invalid Credentials";
    }
    ?>
    <div class="log">
        <div class="form-box">
            <h2>WELCOME</h2>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            </div>
            <form action="adminp.html" id="login" class="input-group" method="post">
                <input type="text" name="username" class="input-field" placeholder="User Name" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <button type="submit" name="submit" class="submit-btn">Log In</button>
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var z=document.getElementById("btn");
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>
</body>


</html>
