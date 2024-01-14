
<?php
error_reporting(0);
session_start();
$server_name="localhost";
$username="root";
$password="";
$database_name="dbms_sem_project";

$con=new mysqli($server_name,$username,$password,$database_name);
if($con->connect_error)
{
    echo"failed";
}
else{
    echo"";
}
if (isset($_POST['submit'])) {
   $std_name=$_POST['name'];
   $std_father_name=$_POST['fat_name'];
   $std_dept=$_POST['Department'];
   $prg=$_POST['Program'];
   $std_batch=$_POST['Batch'];
   $std_sec=$_POST['Section'];

   $sql="INSERT INTO `student_bio_data`(`Student_full_Name`, `Student_department`, `Student_program`, `Student_batch`, `Student_section`, `Student_father_name`) VALUES ('$std_name',' $std_dept',' $prg',' $std_batch',' $std_sec',' $std_father_name')";

   $result=mysqli_query($con,$sql);
   if ($result) {
    $message="New Student Added Succesfully";
    $_SESSION['Suucess']=$message;
    header("location:teacher_dashobaord_addstudnet.php");
     
     } else {
         echo "query failed" . mysqli_error($con);
     }
}

?>

<!DOCTYPE html>
<html lang="en">
  
<style>

  
.container {
      max-width: 900px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      border: 1px solid #ccc;
    }


    label {
      font-size: 20px;
      color: #2255fd;
      margin: 10px;
    }

    input {
      width: 300px;
      height: 40px;
      border-radius: 5px;
      background-color: rgb(240, 238, 238);
      border: 1px solid #cccccc;
      padding: 10px;
      font-size: 16px;
    }

    button {
      width: 100px;
      height: 40px;
      border: none;
      background-color: #08b1ff;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      margin: 10px;
    }

    button:hover {
      width: 120px;
      height: 50px;
      border: none;
      background-color: #333;
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      margin: 10px;
    }

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header {
    background-color: #3295ad;
    color: white;
    padding: 10px;
  }
  
  .logo {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .logo input {
    padding: 5px;
  }
  
  
  .navi {
    background-color: #414141;
    color: white;
    padding: 10px;
  }
  
  nav a {
    color: white;
    text-decoration: none;
    padding: 8px;
  }
  

  /*side bar menu*/
  .sidenav {
    margin-top: 16vh;
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #f0f0f0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #000000;
    display: block;
    transition: 0.3s;
  }
  
  
  .sidenav a:hover {
   
   background-color: rgb(94, 223, 255);
   color: white;
 }
 
 .sidenav .closebtn {
   position: absolute;
   top: 0;
   right: 25px;
   font-size: 36px;
   margin-left: 50px;
 }
 #main {
   transition: margin-left .5s;
   padding: 16px;
 }
 
 a {
    text-decoration:none;
    color:white;
  }
 </style>
<head>
 
</head>
<body>

    
<header>
    <div class="logo">
      
    <a href="homepage.php"><h1>STMU</h1></a>
      <input type="text" placeholder="Search Courses...">
    </div>
  </header>

  <div id="main">
    <div class="navi">
    <nav>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <a href="homepage.php">Home</a>
        <a href="teacher_dashobaord.php">Dashboard</a>
        <a href="#">Student Details</a>
        <a href="#">Events</a>
      </nav>
    </div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="homepage.php">Home</a> 
       <a href="teacher_dashobaord.php">Dashboard</a>
      <a href="teacher_dashobaord_addstudnet.php">Add Student</a>
      <a href="Attendance.php">Attendance</a>
      <a href="Quizes_Assignment.php">Quiz Assignment</a>
    </div>
  
  <div class="container">
    <!-- HTML code for the page content -->
    <h1>Add Data of New Student</h1>
    <center>
    <h4 style="color:blue;">
                <?php

                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['Suucess'];
                ?>
            </h4></center>
    <!-- form start here -->
    <form action="teacher_dashobaord_addstudnet.php" method="Post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" placeholder="Enter student name" required>
      
      <label for="class">Father Name:</label>
      <input type="text" name="fat_name" id="fat_name" placeholder="Enter student Father Name" required>
      
      <label for="name">Department:</label>
      <input type="text" name="Department" id="Department" placeholder="Enter student Department" required>
      
      <label for="name">Program:</label>
      <input type="text" name="Program" id="Program" placeholder="Enter student Program" required>
      
      
      <label for="email">Student Batch:</label>
      <input type="date"name="Batch" id="Batch" placeholder="Enter student Batch" required>
    
      
      <label for="text">Student Section:</label>
      <input type="text" name="Section" id="Section" placeholder="Enter student Section" required>
      
    <button type="submit" name="submit">Add</button>
    </form>
  </div>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "r rgb(236, 235, 235);";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = " rgb(236, 235, 235);";
    }
  </script>
</body>
</html>