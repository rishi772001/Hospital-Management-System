<?php
session_start();



$conn=mysqli_connect("localhost","root","","php");
$sql="select * from appointment where username= $_SESSION['username']";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"DATE:".$row["date"].",TIME:".$row["time"]."";
}

}
else{
echo"0 result";
}
$conn->close();
?>