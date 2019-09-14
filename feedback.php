<?php

$conn=mysqli_connect("localhost","root","","php");
if(!$conn){
die("Database Connect Error");
}
$name=$_POST['name'];
$feedback=$_POST['feedback'];

$sql="INSERT INTO feedback (name,feedback) VALUES ('$name','$feedback')";

if(mysqli_query($conn,$sql)){
    echo"<script type='text/javascript'>window.alert('Thank For Your Feedback ');window.location='hospital.html';</script>";
}
else{
 echo ("Something Went Wrong". mysqli_error($conn));
}
mysqli_close($conn);
?>



