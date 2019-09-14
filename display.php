<html>
<body>

<?php
$uname=$_GET['uname'];

echo $uname;
$conn=mysqli_connect("localhost","root","","php");
if(!$conn){
die("Database Connect Error");
}
$sql="SELECT * FROM prescription where name='$uname'";
$query=$conn->query($sql);
$row=$query->fetch_assoc();
?>
<a href="prescription upload/<?php echo $row['filename'] ?>"><h1>click  here to download prescription</h1></a>


</body>
</html>