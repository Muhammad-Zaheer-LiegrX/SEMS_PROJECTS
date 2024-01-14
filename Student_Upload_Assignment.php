<?php
error_reporting(0);
session_start();
$db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "dbms_sem_project";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

//Fetch the uploaded files from the database

$sql = "SELECT *FROM files";
$result = $conn->query($sql);

// Deleting files code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
       
        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf", "ppt", "pptx");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Database connection
              

                // Insert the file information into the database
                $sql = "INSERT INTO files (filename, filesize, filetype) VALUES ('$filename', $filesize, '$filetype')";

                if ($conn->query($sql) === TRUE) {
                  $message = "The file " . basename($_FILES["file"]["name"]) . " has been uploaded and Ready To view For Thes Student";
                  $_SESSION['loginMessage'] = $message;
                  
                  header("location: Upload_Lectures.php");
                  exit(); // Add this line to stop further execution after redirect
              
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Student Homepage</title>
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
            .content {
                padding: 20px;
            }
    

    .section {
        width: 100%;
       
       
     }
        .section input[type="text"], input[type="email"], input[type="password"], input[type="date"], input[type="file"] {
       
        padding: 10px;
        margin: 10px 0;
        border-radius:10px;
        border: none;
        background-color: rgb(226, 224, 224);
     }
    
     button {
        
        border-radius:10px;
       font-weight: 22px;
        width: 30%;
        padding: 10px;
        margin: 10px 0;
        padding-top: 10px;
        margin-left: 19%;
        background-color: rgb(1, 1, 136);
        color: rgb(255, 255, 255);
        border: none;
        cursor: pointer;
     }
    
     button:hover{
        
        border-radius:15px;
       font-weight: 25px;
        width: 30%;
        padding: 10px;
        margin: 10px 0;
        padding-top: 10px;
        margin-left: 19%;
        background-color: rgb(0, 58, 250);
        color: rgb(255, 255, 255);
        border: none;
        cursor: pointer;
     }
        </style>
    </head>
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
            <hr>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="homepage.php">Assignments</a> 
               <a href="teacher_dashobaord.php">Quizzes</a>
              <a href="teacher_dashobaord_addstudnet.php">Attendance</a>
              <a href="Attendance.php">Internal Marks</a>
              <a href="Quizes_Assignment.php">Lectures</a>
            </div>
          </div>

            

          <div class="container mt-5">
        <h1 style="color:Blue;">Assigned Assignment</h1>
        <br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Download</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                // Display the uploaded files and download links
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $file_path = "Assig_quiz/" . $row['filename'];
      ?>
      <tr>
          <td><?php echo $row['filename']; ?></td>
          <td><?php echo $row['filesize']; ?> bytes</td>
          <td><?php echo $row['filetype']; ?></td>
          <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
          
      </tr>
      <?php
  }
                }
                ?>
            </tbody>
        </table>
 

<br>
<div class="section">
<h1 style="color:Blue;">Upload Assignment</h1>
       
    
    <form action="Student_Upload_Assignment.php" method="post" enctype="multipart/form-data">
       <input type="text" name="name" id="name" placeholder="Your Name" required>
       <input type="email" name="email" id="email" placeholder="Your Email" required>
       <input type="number" name="id" id="ids" placeholder="Your ID" required>
       <input type="date" name="due_date" id="due_date" required>
       <input type="file" name="file" id="assignment" required>
       <button type="submit">Upload</button>
    </form>
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