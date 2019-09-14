<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            body{
            background-image: url("hospital back.jpg");
            background-repeat:no-repeat;
            background-attachment:fixed;
            height:1000%;
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
            .upload{
                float:left;
                margin-top:-150px;
                margin-left:100px;
                background-color:rgba(29,117,224);
                -webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
padding-left:25px;
padding-top:10px;
padding-bottom:10px;
padding-right:25px;
                }
                .upload input[type="text"]{
                        width:300px;
height:50px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
}
.upload input[type="submit"]{
width:200px;
height:51px;
border:0;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;
font-size:25px;
}
.upload input[type="file"]{
width:400px;
height:51px;
border:0;
display:block;
font-size:25px;
position:absolute;
border-radius:5px;
-webkit-border-radius:5px;
-o-border-radius:5px;
-moz-border-radius:5px;

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
                <li><a href="#aa">CONTACT US</a></li>
                <li><a href="about.html">ABOUT Us</a></li>
                </ul></h3>
        </nav>
        <div style="color:white;background-color:rgba(0,0,0,0.5);-webkit-border-radius:15px;
-o-border-radius:15px;
-moz-border-radius:15px;padding-top:10px;
padding-left:40px;margin-left:50px;padding-bottom:10px;width:800px;float:left;
margin-top:50px;" >
        <h1 style="color:orange;">Today's Appointments:</h1>
        <?php
        
        session_start();
        $conn=mysqli_connect("localhost","root","","php");
        $today=date("Y-m-d");
        $doctor=$_GET['rishi'];
        $sql="select * from appointment where doctorname='$doctor' and date='$today' ";
        $result=$conn->query($sql);
        
        if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
        echo"<h1>Name:".$row["username"]."   ,  Time Slot:".$row["time"]."   ,  Date:".$row["date"];"<br><br>";
        
        }
        
        }
        else{
                echo"<h1>There Are No Appointments Today!";
        }
        $conn->close();
        ?>
        </div>



        <div style="color:white;background-color:rgba(0,0,0,0.5);-webkit-border-radius:15px;-o-border-radius:15px;-moz-border-radius:15px;padding-top:10px;padding-left:40px;margin-left:50px;padding-bottom:10px;width:800px;float:left;margin-top:50px;" >
        <h1 style="color:orange;">Mild Problem Patients</h1>
        <?php
        $conn=mysqli_connect("localhost","root","","php");

        $today=date("Y-m-d");
        
        $sql="select * from appointment where doctorname= '$doctor' and disease='mild' and date='$today' ";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
        echo"<h1>Name:".$row["username"];"<br><br>";
        }

        }
        else{
                echo"<h1>There Are No Mild Problem Patients Today";
        }
        $conn->close();
        ?>
        
        <h1 style="color:orange;">Serious Problem Patients</h1>
        <?php
        $conn=mysqli_connect("localhost","root","","php");

        $today=date("Y-m-d");
        
        $sql="select * from appointment where doctorname= '$doctor' and disease='serious' and date='$today' ";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
        echo"<h1>Name:".$row["username"];"<br><br>";
        }

        }
        else{
                echo"<h1>There Are No Serious Problem Patients Today";
        }
        $conn->close();
        ?>
        
        <h1 style="color:orange;">Emergency Problem Patients</h1>
        <?php
        $conn=mysqli_connect("localhost","root","","php");

        $today=date("Y-m-d");
        
        $sql="select * from appointment where doctorname= '$doctor' and disease='emergency' and date='$today' ";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
        echo"<h1>Name:".$row["username"];"<br><br>";
        }

        }
        else{
                echo"<h1>There Are No Emergency Problem Patients Today";
        }

        $conn->close();
        session_destroy();
        ?>
        </div>
        <div class="upload">
                <h1 style="color:red;font-size:50px;">Upload Prescription:</h1>
                <form method="post" action="prescription.php" enctype="multipart/form-data">
                        <P style="font-size:30px;">Username:  &nbsp;<input type="text" name="username"placeholder="Enter" ><br><br>
                        Prescription:  <input type="file" name="prescription" value="Upload Prescription"><br><br></p>
                        <center><input type="submit" value="Upload" name="upload"></center>
                </form>
        </div>
</body>
</html>