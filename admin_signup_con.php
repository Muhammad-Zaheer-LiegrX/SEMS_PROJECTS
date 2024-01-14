
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
//signup
if(isset($_POST['Sumbit']))
{
    $admin_id=$_POST['ids'];
    $name = $_POST['nm'];
    $numb = $_POST['num'];
    $mail = $_POST['mailing'];
    $pass_key = $_POST['keys'];
   
    $sql = "INSERT INTO `admin_security`(`user_id`, `User_Name`, `phonenumber`, `email`, `password`) VALUES ('$admin_id','$name','$numb','$mail','$pass_key')";

    $result=mysqli_query($con,$sql);
    if ($result) {
        echo "success data updated";
      } else {
          echo "query failed" . mysqli_error($con);
      }
}

//login portion
if($_SERVER["REQUEST_METHOD"]=='POST')
{
    $usr_id=$_POST['userid'];
    $pass=$_POST['pswd'];
    $sql="SELECT *FROM admin_security WHERE user_id=$usr AND password=$pass";


    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    if($row["user_id"]==$usr_id)
      {
        $_SESSION['user_id']=$usr_id;
        header("location:homepage.php");
      } else {
       
        $message="UserID or Password Doesnot Match";
        $_SESSION['loginMessage']=$message;
        header("location:login_admin .php");
    
    }
     
}


?>