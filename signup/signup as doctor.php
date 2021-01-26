<?php

$conn=mysqli_connect("localhost", "root", "", "php");
if (!$conn) {
    die("Database Connect Error");
}
$name=$_POST['name'];
$dob=$_POST['dob'];
$mail=$_POST['mail'];
$docid=$_POST['docid'];
//$joindate=$_POST['joindate'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$qualification=$_POST['qualification'];
$department=$_POST['department'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$rpass=$_POST['repass'];

// $role=$_POST['n1'];
if ($pass==$rpass) {
    $sql="INSERT INTO doctors (name,dob,mail,docid,address,phno,qualification,department,uname,pass) VALUES ('$name','$dob','$mail','$docid','$address','$phno','$qualification','$department','$uname','$pass')";

    if (mysqli_query($conn, $sql)) {
        echo"<script type='text/javascript'>window.alert('successfully completed');window.location='index.html';</script>";
    } else {
        echo"<script type='text/javascript'>window.alert('Something went wrong,Please Try again after some time');window.location='signup/signup as doctor.html';</script>";
    }
} else {
    echo"<script type='text/javascript'>window.alert('Password Does Not Match,Please Try Again');window.location='signup/signup as doctor.html';</script>";
}
mysqli_close($conn);
?>



