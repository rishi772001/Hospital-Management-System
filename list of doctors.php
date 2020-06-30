<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RRV Hospitals</title>
    <meta name="keywords" content="RRV Hospitals">
    <meta name="description" content="Developed By Rishi Raj G">
</head>
<body>
<img src="assets/images/logo.png" class="logo">
<nav class="navbar navbar-expand-lg" style="background-color: #142b47;color:white;">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                        <a class="nav-link" href="index.html">Home <span
                                                        class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                SignUp
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="signup as doctor.html">SignUp as
                                                        Doctor</a>
                                                <a class="dropdown-item" href="signup as patient.html">SignUp as
                                                        Patient</a>
                                        </div>
                                </li>
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Log In
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="login as doctor.html">LogIn as Doctor</a>
                                                <a class="dropdown-item" href="login as patient.html">LogIn as
                                                        Patient</a>
                                        </div>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="appointment 1.html">Book An Appointment</a>
                                </li>
                                <li class="nav-item active ">
                                        <a class="nav-link" href="list of doctors.php">Doctors Here!</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="index.html#contact">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="about.html">About Us</a>
                                </li>
                        </ul>
                </div>
        </nav>
    <h1 style="color:black;font-size: 45px;">Our Doctors Here!</h1>
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
            echo"
            <tr>
                <td>
                    ".$row["docid"]."
                </td>
                <td>
                    ".$row["name"]."
                </td>
                <td>
                    ".$row["address"]."
                </td>
                <td>
                    ".$row["phno"]."
                </td>
                <td>
                    ".$row["qualification"]."
                </td>
                <td>
                    ".$row["department"]."
                </td>
            </tr>";
            }
            echo"</table>";
            }
            else{
            echo"0 result";
            }
            $conn->close();
            ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
