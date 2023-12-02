<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="images/favicon.png" href="images/favicon.png">  
        <title>KAHE Trainig and Placement</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
<body>
    <header>
    <div id="titleimg1">
    <img id="headimg1" src="images/LOGO-with-different-colors-03.png" alt="logo" width="800px" height="100px" class="img">

    <img id="headimg2" src="images/LOGO 2.png" alt="logo" width="800px" height="100px" class="img">

    </div>
    <nav id="bar">
   <ul class="nav_links"> 
    <li><a href="index.html"> HOME</a></li>
    <li><a href="contact.html">CONTACT US</a></li>
    <li><a href="about.html">ABOUT US</a></li>
    <li><a href="#">LOGIN</a>
    <div class="drop-menu">
        <ul>
            <li><a href="student.html">STUDENT LOGIN</a></li>
            <li><a href="staff.html">STAFFS LOGIN</a></li>
        </ul>
    </div>
    </li>
   </ul>
    </nav>
</body>
<?php
        session_start();

        include("db.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_POST['name'];
            $staffID = $_POST['staffID'];
            $email = $_POST['email'];
            $pswrd = $_POST['pswrd'];

            if(!empty($staffID) && !empty($pswrd) && !is_numeric($email))
            {
                $query = "insert into staff_info (name, staffID, email, pswrd) values ('$name', '$staffID', '$email', '$pswrd')";

                mysqli_query($con, $query);

                echo"<script type='text/javascript'> alert('Successsfully Registered')</script";
            }
            else
            {
                echo"<script type='text/javascript'> alert('Please enter valid information')</script";
            }
        }
        ?>
        <head>
        <meta name="viewpoint" content="width=device-width, intial-scale=1">
        <title>Form Login and Register</title>
        <link rel="stylesheet" href="style_form.css">
        </head>
  <body>
        <div classs="signup">
        <h1>Staff Registration</h1>
        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Staff ID</label>
            <input type="text" name="staffID" required>
            <label>EMAIL</lablel>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="text" name="pswrd" required>
            <input type="submit" name="" value="Submit"required>
        </form>
    </div>
</body>
</html>