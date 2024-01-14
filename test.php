<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "dbms_sem_project";
    
    $con = new mysqli($server_name, $username, $password, $database_name);
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the new column name from the form
    $newColumnName = $_POST['newColumnName'];


    // SQL query to add a new column to the table
    $sql = "ALTER TABLE markss ADD COLUMN $newColumnName VARCHAR(255)";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        echo "New column added successfully";
    } else {
        echo "Error adding column: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Column Form</title>
</head>
<body>
  <form action="test.php" method="post">
    <label for="newColumnName">New Column Name:</label>
    <input type="text" id="newColumnName" name="newColumnName" required>
    <input type="submit" value="Add Column">
  </form>
</body>
</html>
