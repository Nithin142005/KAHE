<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="images/favicon.png" href="images/favicon.png">  
        <title>KAHE Trainig and Placement</title>
        <link rel="stylesheet" href="style.css"> 
        <style>
        
        .login{
            display: flex;
            flex-direction: column;
            align-items: center;
            border:2px solid black;
            margin: 20px 500px;
            padding: 10px;
          }
            
          form{
            display: flex;
            flex-direction: column;
            align-items: center;
          }
        
        form input{
        width: 200px;
        padding: 7px;
        border: none;
        border: 1px solid gray;
        border-radius: 6px;
        outline: none;
        }
        input[type="submit"]{
        width: 200px;
        height: 35px;
        margin-top: 20px;
        border: none;
        background-color: grey;
        color:white;
        font-size: 18px;
        cursor: pointer;
        }
        input[type="submit"]:hover{
        color:white;
        background: rgb(17, 227, 24);
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
    <li><a href="index.html">CONTACT US</a></li>
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

    </header>
    <?php
        session_start();

        include("db.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $reg_no = $_POST['reg_no'];
            $password = $_POST['password'];

            if(!empty($reg_no) && !empty($password))
            {
                $query = "select * from student_info where reg_no = '$reg_no'";
                $result = mysqli_query($con, $query);

                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location:re _stu.html");
                        die;

                    }
                }
                
            }
    
        }
    ?>    

 

    <div class="container">
        <form method="POST" class="login">
        <h1>STUDENT LOGIN</h1>
            <!-- <label>Register No</lable> -->
                <input type="reg_no" name="reg_no" placeholder="Register No " required><br>
            <!-- <label>Password</label> -->
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="" value="Submit">
        </form>
    </div>    
</body>
</html>