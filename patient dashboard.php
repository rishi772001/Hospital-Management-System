<?php  
$conn=mysqli_connect("localhost","root","","php");
?>
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
p{
text-decoration: none;
display:block;
color:#f2f2f2;
font-size:20px;
font-family:sans-serif;
letter-spacing:0.5px;
border-radius:10px;
}
.aa{
width:1000px;


height:850px;
margin-left:0 auto;
margin-top:75px;
-webkit-border-radius:15px;
-o-border-radius:15px;
-moz-border-radius:15px;
color:white;
font-weight:bolder;
padding-top:10px;
padding-left:40px;
}
.lv{
margin-left:1050px;
margin-top:-250px;
float:left;
font-weight:bolder;
padding-top:10px;
padding-left:40px;
}
.pa{
float:left;
margin-left:1350px;
margin-top:-240px;
}
.aa input[type="submit"]{
width:200px;
height:51px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
.aa input[type="text"]{
width:300px;
height:50px;
border:0;
margin-left:0px;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}

.lv input[type="submit"]{
width:200px;
height:51px;
border:0;

border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
.lv input[type="text"]{
width:300px;
height:50px;
border:0;
margin-left:0px;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}


.aa input[type="radio"]{
width:20px;
height:50px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
.doctor_list{
width:300px;
height:50px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}

.prescription{

    width:500px;
    margin-top:80px;  
    margin-right:120px;
float:right;
height:500px;
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
<li><a href="#bb">CONTACT US</a></li>
<li><a href="about.html">ABOUT Us</a></li>
</ul></h3>
</nav>

<a href="display.php?uname=".<?php $username=$_GET['rishi'];echo $username;?>><img src="prescription copy.jpg" height="450px" width="400px" style="float:right;margin-right:200px;margin-top:150px;"></a> 


<div class="aa" style="background-color:rgba(0,0,0,0.5); ">
    <h1 style="color:orange;font-size:50px;">Book An Appointment Here!</h1>
    <form action="appointment 2.php" method="post">
    <p style="text-decoration: none;display:block;color:#f2f2f2;font-size:35px;font-family:sans-serif;letter-spacing:0.5px;border-radius=10px;">Select Date: &nbsp;<input type="text" name="date" placeholder="DD/MM/YYYY" onfocus="(this.type='date')" onblur="(this.type='text')" required><br><br>
    <input type="text" placeholder="Enter Username" value="<?php $username=$_GET['rishi'];echo $username; ?>" name="username"  required><br><br>
    
    <select name="doctor_name" class="doctor_list" required>
        <option>----Enter Doctor Name-----</option>
        <?php 
        $sql="select * from doctors";
        $doc=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($doc)){
        ?>
        
        <option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option><br><br>
        <?php
        }
        ?>
    </select>
    
    <p style="text-decoration: none;display:block;color:#f2f2f2;font-size:35px;font-family:sans-serif;letter-spacing:0.5px;border-radius=10px;">Select Time Slot:</P><p><input type="radio" name="time" value="9-11">09.00 a.m-11.00 a.m &nbsp;
    <input type="radio" name="time" value="11-1">11.00 a.m-01.00 p.m &nbsp;
    <input type="radio" name="time" value="6-8">06.00 p.m-08.00 p.m &nbsp;
    <input type="radio" name="time" value="8-10">08.00 p.m-10.00 p.m<br><br>

    <p style="text-decoration: none;display:block;color:#f2f2f2;font-size:35px;font-family:sans-serif;letter-spacing:0.5px;border-radius=10px;">Select Disease Type:</P><p><input type="radio" name="disease" value="mild">Simple Problem &nbsp;
    <input type="radio" name="disease" value="serious">Serious Problems &nbsp;
    <input type="radio" name="disease" value="emergency">Very Emergency Problems<br><br>
    
    
    <input type="submit" value="submit" name="submit" style="background-color:skyblue;"></p>
    </form>
</div>
<div class="lv">
    <span><h1 style="color:red;display: inline;font-size:45px;">Last Visit:<br></h1>
    <?php




$conn=mysqli_connect("localhost","root","","php");
$username=$_GET['rishi'];
$sql="select * from appointment where username= '$username' and date='MAX(date)'";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"<h2>DATE  :  ".$row["date"].",<br>TIME SLOT  :  ".$row["time"]."</h2>";
}

}
else{
echo"<h2>0 Result</h2>";
}
$conn->close();
?>
        
</div>
<div class="pa">
    <h1 style="color:red;display: inline;font-size:45px;">Pending Appointments:<br></h1>
    <?php
$username=$_GET['rishi'];
$conn=mysqli_connect("localhost","root","","php");
$date=date('Y-m-d');
 
$next_date = date('Y-m-d', strtotime($date .' +1 day'));
$sql="select * from appointment where username= '$username' and date=$next_date ";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"<h2>DATE  :  ".$row["date"].",TIME Slot  :  ".$row["time"]."</h2>";
}

}
else{
echo"<h2>0 Result</h2>";
}
$conn->close();
?>










</body>
</html>
