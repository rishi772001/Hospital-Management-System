<?php


$host="localhost";
$user="root";
$pass="";
$db="php";

$conn=mysqli_connect($host,$user,$pass,$db);
session_start();

if(isset($_POST['uname'])){

$uname=$_POST['uname'];
$password=$_POST['pass'];



$sql="select * from doctors where uname='".$uname."'AND pass='".$password."'limit 1";

$result=$conn->query($sql);

if($result->num_rows==1){
    $_SESSION["name"] = $uname;
    header("location:admin dashboard.php?rishi=".$uname);
}
else{
    echo"<script type='text/javascript'>window.alert('Invalid Username or Password');window.location='login as doctor.html';</script>";

}
}
?>





