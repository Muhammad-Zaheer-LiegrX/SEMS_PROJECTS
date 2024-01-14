<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "dbms_sem_project";
error_reporting(0);
$con = new mysqli($server_name, $username, $password, $database_name);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$student_query = "SELECT Studnet_id, Student_full_Name FROM student_bio_data";
$result_student = $con->query($student_query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $obtain_marks=$_POST[''];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
    <style>
       
  
.container {
      max-width: 900px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }

    .containers1 {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
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
      width: 190px;
      height: 40px;
      border: none;
      background-color: #08b1ff;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      margin: 20px;
      margin-left: 90%;
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

/* Add this style to your existing <style> tag */
.select-styling {
    width: 150px;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 35px;
    font-size:15px;
}
.select-styling:hover {
    width: 150px;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 35px;
    font-size:19px;
    font-family:Arial;
    color:White;
    background-color: #08b1ff;
}


    </style>
</head>

<body>
    <!-- Your existing HTML content here -->

    
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
   <h2>Submit Assignment Marks</h2>
   <form action="Assignment_quiz_marks.php" method="post">
       <label for="student_id">Student ID:</label>
       <input type="text" name="student_id" required>

       <label for="assignment_type">Assignment Type:</label>
       <select name="assignment_type" required>
           <option value="Quiz">Quiz</option>
           <option value="Assignment">Assignment</option>
           <option value="Midterm">Midterm</option>
           <option value="Final">Final</option>
       </select>

       <label for="assignment_marks">Assignment Marks:</label>
       <input type="number" name="assignment_marks" required>

       <button type="submit">Submit</button>
   </form>
</div>
       

<!-- ... Your HTML code below ... -->

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
