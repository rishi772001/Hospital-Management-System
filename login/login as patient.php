<?php

session_start();
require "../conn.php";
if (isset($_POST['uname'])) {
    $uname=$_POST['uname'];
    $password=$_POST['pass'];

    $sql="select * from patient where uname='".$uname."'AND password='".$password."'limit 1";

    $result=$conn->query($sql);

    if ($result->num_rows==1) {
        $_SESSION["name"] = $uname;
        $url="../patient dashboard.php";
        header('location:'.$url);
    } else {
        echo"<script type='text/javascript'>window.alert('Invalid Username or Password');window.location='login/login/login as patient.html';</script>";
    }
}
?>






