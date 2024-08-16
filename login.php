<?php
$succes=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];


    //$sql="insert into registration (username,password)values('$username','$password')";
    //$result=mysqli_query($con,$sql);
    //if($result){
    //    echo "data inserted sucessfully";
   // }
    //else{
       // die(mysqli_error($con));
    //}
    $sql="select * from registration where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "user already exist";
            $user=1;
        }else{
            $sql="insert into registration (username,password)values('$username','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
                   //echo "Registered sucessfully";
                   $succes=1;
             }
                else{
                    die(mysqli_error($con));
                }
        }
    }
}
?>
<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select *from registration where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $login=1;
            header('location:homepage.html');
        }else{
            $invalid=1;
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
    <title>LogIn</title>
</head>


<body>
  
     <?php
    if($succes){
        echo "Registered Sucessfully";
    }
    ?>
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
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form action="login.php" id="login" class="input-group" method="post">
                <input type="text" name="username" class="input-field" placeholder="User Name" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <button type="submit" name="submit" class="submit-btn">Log In</button>
            </form>


            <form action="login.php" id="register" class="input-group" method="post">
                <input type="text" class="input-field" name="username" placeholder="User Name" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");


        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>
</body>


</html>