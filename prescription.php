<?php
$conn=mysqli_connect("localhost","root","","php");
if(!$conn){
die("Database Connect Error");
}



$name=$_POST['username'];
$prescription=$_FILES['prescription'];
$prescription_name=$prescription['name'];
$prescription_type=$prescription['type'];
$prescription_size=$prescription['size'];
$prescription_path=$prescription['tmp_name'];



$folder="prescription upload/";
move_uploaded_file($prescription_path,$folder.$prescription_name);
$today=date("Y-m-d");
$query="SELECT * FROM prescription WHERE name='$name'";
$result=$conn->query($query);

if($result->num_rows==0){
    $sql="INSERT INTO prescription (name,filename,date) VALUES ('$name','$prescription_name','$today')";

    if(mysqli_query($conn,$sql)){
    echo"<script type='text/javascript'>window.alert('Prescription uploaded successfully');window.location='admin dashboard.php';</script>";
    }
    else{
        echo"error1";    
    }
}
else{
    $sql="UPDATE prescription SET filename='$prescription_name' ";

    if(mysqli_query($conn,$sql)){
    echo"<script type='text/javascript'>window.alert('Prescription uploaded successfully');window.location='admin dashboard.php';</script>";
    }
    else{
        echo"error2";    
    }
}
    


mysqli_close($conn);


?>