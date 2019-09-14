<?php


$host="localhost";
$user="root";
$pass="";
$db="php";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if(isset($_POST['uname'])){

$uname=$_POST['uname'];
$password=$_POST['pass'];



$sql="select * from doctors where uname='".$uname."'AND pass='".$password."'limit 1";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1){
header("location:admin dashboard.php?rishi=".$uname);
}
else{
    echo"<script type='text/javascript'>window.alert('Invalid Username or Password');window.location='login as doctor.html';</script>";

}
}
?>





