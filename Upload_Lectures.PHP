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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
  if ($_POST['action'] == 'delete') {
      $file_id = $_POST['file_id'];
      $filename = $_POST['filename'];

      $delete_sql = "DELETE FROM files WHERE id = $file_id";
      if ($conn->query($delete_sql) === TRUE) {
          // Delete the file from the uploads directory
          $file_path = "uploads/" . $filename;
          unlink($file_path);

          header("location: Upload_Lectures.php");
          exit(); // Add this line to stop further execution after redirect
      } else {
          echo "Error deleting file: " . $conn->error;
      }
  }
}

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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<title>Lecrure upload</title>
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
  h3{
    padding-left: 10px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 25px;
    color: rgb(0, 59, 168);
  }
  hr {
    margin-top: 0;
  }
  .imgi{
    margin-left: 100px;
  }
  .imgi img
  {
    width: 90%;
    height: 100%;
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
    <hr>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="homepage.php">Home</a> 
       <a href="teacher_dashobaord.php">Dashboard</a>
      <a href="teacher_dashobaord_addstudnet.php">Add Student</a>
      <a href="Attendance.php">Attendance</a>
      <a href="Quizes_Assignment.php">Quiz Assignment</a>
    </div>
  </div>
	<div class="container mt-5">
		<h2>Upload a Lectures</h2>


		<form action="Upload_Lectures.php" method="POST" enctype="multipart/form-data">
   
    <div class="mb-3">
    <center>
    <h4 style="color:red;">
        <?php
        error_reporting(0);
        echo $_SESSION['loginMessage'];
        session_destroy();
        ?>
    </h4>
</center>
				<label for="file" class="form-label">Select file</label>
				<input type="file" class="form-control" name="file" id = "file">
			</div>
			<button type="submit" class="btn btn-primary">Upload file</button>



    
      
		</form>
	</div>

  <!-- Displaying lectures -->

  
	<div class="container mt-5">
        <h2>Uploaded Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Download</th>
                    <th>Delete </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display the uploaded files and download links
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $file_path = "uploads/" . $row['filename'];
      ?>
      <tr>
          <td><?php echo $row['filename']; ?></td>
          <td><?php echo $row['filesize']; ?> bytes</td>
          <td><?php echo $row['filetype']; ?></td>
          <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
          <td>
              <form action="Upload_Lectures.php" method="POST" style="display:inline;">
                  <input type="hidden" name="file_id" value="<?php echo $row['id']; ?>">
                  <input type="hidden" name="filename" value="<?php echo $row['filename']; ?>">
                  <button type="submit" name="action" value="delete" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
      <?php
  }
                }
                ?>
            </tbody>
        </table>
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