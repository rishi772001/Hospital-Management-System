<?php

$uname="rishi";
$conn=mysqli_connect("localhost","root","","php");
if(!$conn){
die("Database Connect Error");
}
$sql="select * from patient where uname='$uname'";
$query=$conn->query($sql);
while($ros=$query->fetch_assoc()){
    $path=$ros['path'];
    header('content-Disposition:attachment;filename='.$path.'');
    header('content-type:application/octent-strem');
    header('content-length='.filesize($path));
    readfile($path);
}


?>