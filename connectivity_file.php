
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
if(isset($_POST['Sumbit']))
{
    $firt_name=$_POST['f_nm'];
    $email=$_POST['mailing'];
    $pass_key=$_POST['keys'];
    $std_id=$_POST['regno'];
    $tel_number=$_POST['mobile_num'];
    $user_nme=$_POST['usr_nam'];

    $sql="INSERT INTO `user`(`Full_Name`, `User_Name`, `Phone_number`, `student_id`, `email`, `password`) VALUES ('$firt_name',' $user_nme',' $tel_number',' $std_id','$email',' $pass_key')";

    
    $result=mysqli_query($con,$sql);
    if ($result) {
        echo "success data updated";
      } else {
          echo "query failed" . mysqli_error($con);
      }
}

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $usr=$_POST['usr_nm'];
    $pass=$_POST['key_s'];
    $sql="SELECT *FROM user WHERE User_Name=$usr_nm AND password=$pass";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($row["User_Name"]==$usr)
      {
        $_SESSION['User_Name']=$usr;
        header("location:homepage.php");
      } else {
       
        $message="Username or Password Doesnot Match";
        $_SESSION['loginMessage']=$message;
        header("location:homepage.php");
    
    }
     
}


?>