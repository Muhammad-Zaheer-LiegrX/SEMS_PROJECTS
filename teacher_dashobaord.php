<!DOCTYPE html>
<html lang="en">

<head>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  a {
    text-decoration:none;
    color:white;
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
 
 @media screen and (max-height: 450px) {
   .sidenav {padding-top: 15px;}
   .sidenav a {font-size: 18px;}
 }
 main {
    margin-left: 200px;
    font-family: Arial, sans-serif;
    font-size: 16px;
    color: #000000;
}

.main h1 {
    font-size: 38px;
    font-weight: bold;
    color: rgb(0, 140, 255);
    padding: 20px;
}

.main .options {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    padding: 20px;
}

.main .option {
    width: 300px;
    height: 250px;
    border: 1px solid #ccc;
    background-color: #f3f3f3;
    margin: 10px;
    text-align: center;
    padding: 10px;
}

.main .option h2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.main .option p {
    font-size: 14px;
    margin-bottom: 10px;
}

.main .option button {
    
    width: 100px;
    height: 40px;
    border: none;
    background-color: #0A2463;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}


.main .option button:hover {
    background-color: #0084ff;
}
  
  </style>
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
  
    <div class="main">
        <!-- HTML code for the main content -->
       
        <h1>Teacher Dashboard</h1>
        <div class="options">
            <!-- HTML code for the different options -->
            <div class="option">
                <h2>Add Student</h2>
                <p>Add a New student.</p>
                <a href="teacher_dashobaord_addstudnet.php">  <button >Go</button></a>
              
            </div>
            <div class="option">
                <h2>Marks</h2>
                <p>View and edit the marks of your students.</p>
                <a href="Assignment_quiz_marks.php">  <button >Go</button></a>
            </div>
            <div class="option">
                <h2>Student Attendance</h2>
                <p>Track and manage the attendance of your students.</p>
                <a href="Attendance.php">  <button >Go</button></a>

            </div>
            <div class="option">
                <h2>Quiz and Exams</h2>
                <p>Create and conduct quizzes and exams for your students.</p>
                <a href="Quizes_Assignment.php">  <button >Go</button></a>
            </div>
            <div class="option">
                <h2>Upload Lectures</h2>
                <p>Upload and share your lectures with your students.</p>
                <a href="Upload_Lectures.PHP">  <button >Go</button></a>
            </div>
        </div>
    </div>
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