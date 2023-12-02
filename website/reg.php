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
            <li><a href="staff_login.php">STAFFS LOGIN</a></li>
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
            $reg_no = $_POST['reg_no'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($email) && !empty($password) && !is_numeric($email))
            {
                $query = "insert into student_info (name, reg_no, email, password) values ('$name', '$reg_no', '$email', '$password')";

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
        <link rel="stylesheet" href="style_form.css">
        </head>
  <body>
        <div classs="signup">
        <h1>Enroll Students</h1>
        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" placeholder="NAME" required>
            <label>Register Number</label>
            <input type="text" name="reg_no" placeholder="REGISTER NUMBER" required>
            <label>Email</lable>
            <input type="email" name="email" placeholder="EMAIL" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="PASSWORD" required>
            <input type="submit" name="" value="Submit"required>
        </form>
    </div>
</body>
</html>