Pricing.php
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $service=$_POST['service'];
    $datetime=$_POST['datetime'];
    $number=$_POST['number'];
    $con=new mysqli('localhost','root','','project');
    if($con){
        $sql="insert into makeappointment(name,email,service,datetime,number)values('$name','$email','$service','$datetime','$number')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Appointment Done";
        }else{
            die(mysqli_error($con));
        }
    }else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <title>Pricing</title>
</head>


<body>
    <header>
        <nav>
            <ul>
                <li><a href="homepage.html">HOME</a></li>
                <li><a href="">OUR SERVICES</a>
                    <ul class="service">
                        <li><a href="haircare.html">Haircare</a></li>
                        <li><a href="skincare.html">Skincare</a></li>
                    </ul>
                </li>
                <li><a href="aboutus.html">ABOUT</a></li>
                <li><a href="pricing.php">PRICING</a></li>
                
                <li><a href="adminlog.php">ADMIN</a></li>


            </ul>
        </nav>
        <div id="banner">
            <div id="banner">
                <img src="images/logo.png" class="logo">
                <div class="banner-text">
                    <h1 class="title">Services-Pricing</h1>
                    <hr>
                </div>



            </div>
    </header>
    <section>
        <table class>
            <tr>
                <th>#</th>
                <th>Service Name</th>
                <th>Pricing</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Hair-cut</td>
                <td>150</td>
            </tr>


            <tr>
                <td>2</td>
                <td>Beard trim / Shave</td>
                <td>120</td>
            </tr>


            <tr>
                <td>3</td>
                <td>Hair Colour</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Head Masssage</td>
                <td>400</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Hair Straightening or smoothening</td>
                <td>4000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Skin Facial</td>
                <td>1200</td>
            </tr>


            <tr>
                <td>7</td>
                <td>Detan Face</td>
                <td>1500</td>
            </tr>


            <tr>
                <td>8</td>
                <td>Under Eye Treatment</td>
                <td>500</td>
            </tr>


        </table>
    </section>
    <section>
        <div class="form">
    
            <h1>APPOINTMENT</h1>
       
        
        <form action="" method="post">
            <input type="text" name="name" placeholder="NAME" autocomplete="off" required/>
            <input type="email" name="email" placeholder="EMAIL" autocomplete="off" required/>
            <input list="service" name="service" placeholder="SERVICES" required/>
            <datalist id="service">
                <option value="Hair Cut"/>
                <option value="Beard trim / Shave"/>
                <option value="Hair Colour"/>
                <option value="Head Masssage"/>
                <option value="Hair Straightening and Smoothening"/>
                <option value="Skin Facial"/>
                <option value="Detan Face"/>
                <option value="Under Eye Treatment"/>
            </datalist>
            <input type="datetime-local" name="datetime" placeholder="DATE & TIME" autocomplete="off" required/>
            <input type="text" name="number" placeholder="NUMBER" autocomplete="off" required/>
            <button type="submit" class="btn" name="submit">MAKE APPOINTMENT</button>
        </form>


    </div>
    </section>



</body>


</html>







