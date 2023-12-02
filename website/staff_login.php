<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="images/favicon.png" href="images/favicon.png">  
        <title>KAHE Trainig and Placement</title>
        <link rel="stylesheet" href="style.css"> 
        <style>
            .signup{
            display: flex;
            flex-direction: column;
            align-items: center;
            border:2px solid black;
            margin: 40px 500px;
            padding: 10px;
          }
          input{
            margin: 10px 580px;
            align-items: center;
          }
        </style>
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
            <li><a href="stu_login.php">STUDENT LOGIN</a></li>
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
            $staffID = $_POST['staffID'];
            $pswrd = $_POST['pswrd'];

            if(!empty($staffID) && !empty($pswrd))
            {
                $query = "select * from staff_info where staffID = '$staffID'" ;
                $result = mysqli_query($con, $query);

                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pswrd'] == $pswrd)
                    {
                        header("location:reg.php");
                    
                        die;
                        echo"<script type='text/javascript'> alert('Successsfully Registered')</script";
                    }

                    }
                    else{
                        echo"<script type='text/javascript'> alert('Please enter valid information')</script";


                
            }
        }
    }
        ?>
        <head>
        <link rel="stylesheet" href="style_form.css">
        </head>
  <body>
        <div classs="signup">
        <h1>STAFF LOGIN</h1>
        <form method="POST">
            <input type="text" name="staffID" placeholder="STAFF ID" required>
            <input type="text" name="pswrd" placeholder="PASSWORD" required>
            <input type="submit" name="" value="Submit"required>
        </form>
    </div>
</body>
</html>