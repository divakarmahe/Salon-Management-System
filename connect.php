Connect.php
<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='project';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
if(!$con){
    die(mysqli_error($con));
}
?>
