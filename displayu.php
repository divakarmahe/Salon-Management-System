Displayu.php
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displayu</title>
    <style>
        table{
            width:80%;
    box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);


}
table, td, th{
    margin-top:5%;
    margin-left:10%;
    padding: 10px;
    border:1px solid lightgray;
    border-collapse: collapse;
    text-align: center;
}
td{
    font-size: 18px;
    font-family: Arial;
}
th{
    line-height: 50px;
    font-size: 30px;
    font-family: cursive;
    font-weight: bold;
}
    </style>
</head>
<body>
    <table class="table">
</thead>
<tr>
    <th>slno</th>
    <th>name</th>
    <th>password</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="select * from registration";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $username=$row['username'];
            $password=$row['password'];
            echo '<tr>
            <th>'.$id.'</th>
            <td>'.$username.'</th>
            <td>'.$password.'</th>
            </tr>';
        }
    }
    ?>
</body>
</html>
