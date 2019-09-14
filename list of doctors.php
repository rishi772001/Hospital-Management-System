<html>
<head>
<style text="text/css">
table{
border-collapse:separate;
width:100%;
color:orange;
font-size:25px;
border-color:white;
text-align:left;
background-color:rgba(0,0,0,0.5);
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
body{
background-image: url("hospital back.jpg");
background-repeat:no-repeat;
background-attachment:fixed;
height:1000px;
background-size:cover;
}
.toolbar{
background:#142b47;
width:150%;
overflow:auto;
margin-top:-10px;
margin-left:-10px;



}

.toolbar ul{
margin-top:0px;
padding:0;
list-style:none;
line-height:60px;

}

.toolbar li{
float:left;

}

.toolbar ul li a{
background:#142b47;
text-decoration: none;
width:170px;
display:block;
text-align:center;
color:#f2f2f2;
font-size:15px;
font-family:sans-serif;
letter-spacing:0.5px;
border-radius:10px;
}


.toolbar ul a:hover{
color:skyblue;
opacity:0.5;
}

.logo{
width:1920px;
margin-left:-10px;
margin-top:-10px;
height:130px;
}

</style>
</head>
<body>
<img src="logo.png" class="logo">
<nav class="toolbar">
<ul><h3>
<li><a class="active" href="hospital.html">HOME</a></li>

<li><a href="signup as doctor.html">SIGN UP as doctor</a></li>
<li><a href="signup as patient.html">SIGN UP as patient</a></li>
<li><a href="login as doctor.html">LOGIN as doctor</a></li>
<li><a href="login as patient.html">LOGIN as patient</a></li>
<li><a href="appointment 1.html">Book An Appointment</a></li>
<li><a href="list of doctors.php">Doctors Here!</a></li>
<li><a href="#contact">CONTACT US</a></li>
<li><a href="about.html">ABOUT Us</a></li>
</ul></h3>
</nav>
<h1 style="color:black;font-size:70px;">Our Doctors Here!</h1>
<table border="1">
<tr>
<th>Doctor Id</th>
<th>Name</th>

<th>Address</th>
<th>Phone Number</th>
<th>Qualification</th>
<th>Department</th><br>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","php");
$sql="select * from doctors";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["docid"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["phno"]."</td><td>".$row["qualification"]."</td><td>".$row["department"]."</td></tr>";
}
echo"</table>";
}
else{
echo"0 result";
}
$conn->close();
?>
</table>


</body>
</html>
