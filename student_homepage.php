<?php
session_start();
if(!isset($_SESSION['User_Name']))
{
  header("location:login_student.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Dashboard - STMU</title>
  <link rel="stylesheet" href="teacher_homepg.css">
</head>

<body>

  <header>
    <div class="logo">
      <h1>STMU</h1>
      <a href="logout.php">logout</a>
      <input type="text" placeholder="Search Courses...">
    </div>
  </header>

  <div id="main">
    <div class="navi">
      <nav>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <a href="#">Home</a>
        <a href="#">Dashboard</a>
        <a href="#">Courses</a>
        <a href="#">Events</a>
      </nav>
    </div>
    <hr>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Home</a>
      <a href="#">My Courses</a>
      <a href="#">Events</a>
      <a href="#">Dashboard</a>
      <a href="#">Quiz</a>
      <a href="#">Assignment</a>
      <a href="#">Attendance</a>
    </div>
  </div>
  <br>
  <h3>Departments:</h3>
  <div class="imgi">
  <img src="http://115.186.163.26/pluginfile.php/2/course/section/6/first.jpg" alt="  " width="905" height="489" class="img-responsive atto_image_button_text-bottom">
  <img src="http://115.186.163.26/pluginfile.php/2/course/section/6/second.jpg" alt="  " width="905" height="489" class="img-responsive atto_image_button_text-bottom">
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

</body>
</html>