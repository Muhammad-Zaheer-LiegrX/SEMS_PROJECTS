<?php
include("admin_signup_con.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="logn_admin.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
                <form action="admin_signup_con.php" method="POST">
				
                    
					<label for="chk" aria-hidden="true">Sign up</label>
                    
					<input type="text" name="ids" placeholder="User ID" required=""  >
					<input type="text" name="nm" placeholder="Full Name" required="" >
					<input type="number" name="num" placeholder="Phone Numner" required="" >
					<input type="email" name="mailing" placeholder="Email" required="" >
					<input type="password" name="keys" placeholder="Password" required="">
                    <div class="button input-box">
                <input type="submit" value="Sumbit" name="Sumbit">
              </div>                   
			</div>
 </form>
			<div class="login">
            <form action="admin_signup_con.php" method="POST">
            
					<label for="chk" aria-hidden="true">Login</label>
                    <center>
                    <h4 style="color:red;">
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
                ?>
            </h4>
        </center>
					<input type="text" name="userid" placeholder="USer ID" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>