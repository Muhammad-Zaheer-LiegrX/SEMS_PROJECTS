<?php
include("connectivity_file.php");
?>


<!DOCTYPE html>
<html lang="en">
<style>
  /* Your existing CSS */

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.site {
  width: 100%;
  height: 100vh;
  padding-top: 100pxS;
  background: #fcfcfc;
}

nav {
  width: 100%;
  height: 100px;
  display: flex;
}

.logo {
  height: 100px;
  width: 50%;
}

.logo h1 {
  line-height: 100px;
  padding-left: 30px;
  font-weight: bolder;
  font-size: 60px;
}
a{
  text-decoration: none;
  color: black;
  font-weight: 600;
}

.menu {
  width: 50%;
  height: 100px;
}

.menu ul {
  height: 100px;
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}
p{
  font-family: cursive;
}
.menu ul li {
  list-style: none;
  font-family: Arial;
  font-size: 16px;
  padding: 35px;
  font-weight: 600;
  text-transform: uppercase;
}
.menu ul li button{
  border: none;
  border-radius: 9px;
  height: 45px;
  width: 150px;
  color: rgb(255, 255, 255);
  background-color: rgb(0, 162, 255);
  font-size: 18px;
}

.menu ul li button:hover {
  border-radius: 15px;
  
  border: none;
  background-color: rgb(0, 110, 255);
  color: snow;
  height: 49px;
  width: 160px;
  font-size: 20px;
  cursor: pointer;
  box-shadow: 10px 10px 5px  rgba(1, 24, 99, 0.521); /* Adjust the values as needed */
}

section {
  display: flex;

}

.rightside {
  
  color: white;
  text-align: center;
  margin-top: 8%;
  padding: 40px;
}

.rightside h1 {
  text-align: center;
  font-family: sans-serif;
  color:  rgb(0, 0, 0);
  font-size: 60px;
  font-weight: 900;
  text-transform: uppercase;
}

.rightside p {
  font-size: 1.1rem;
  padding: 30px 0;
  color: black;
  color:  rgb(0, 71, 165);
  font-size: 30px;
  font-family:Arial;
}

.rightside button {
  font-size: 17px;
  font-weight: 600;
  color: rgb(15, 15, 15);
  text-transform: uppercase;
  border-radius: 4px 4px 4px 4px;
  padding: 20px 35px;
  border-color: #1a1a1a;
  box-shadow: 10px 10px 5px  rgba(1, 24, 99, 0.521); /* Adjust the values as needed */
}

.imgs {
 margin-top: 60px;
 margin-left: 130px;
}

.rightside button:hover {
  font-size: 22px;
  font-weight: 500;
  background-color:  rgb(0, 119, 255);
  border-radius: 15px;
  padding: 20px 35px;
  border: none;
  width:300px;
  cursor: pointer;
}
a:hover{
  color: rgb(0, 153, 255);
  text-shadow: orange;
  font-weight: 900;
}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}



/*rating portion*/

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.container {
  font-family: Arial, sans-serif;
}

.featured-in {
  display: flex;
  justify-content: space-between;
  padding: 30px;
}

.featured-in img {
  height: 70px;
  filter: grayscale(100%);
}

.ratings {
  display: flex;
  align-items: center;
  padding: 30px;
  margin-top: 100px;
  height: 190px;
  font-size: 17px;
 
}

.rating {
  padding: 30px;
  text-align: center;
  margin-left: 100px;
  width: 900px;
}

.rating-number {
  font-size: 48px;
  font-weight: bold;
  color: #000000;
}
body{
    background-color: #e6e5e5;
}
.rating-stars {
  color: gold;
}

.rating-label {
  color: #2268ff;
}

.testimonial {
  padding: 20px;
}

.testimonial-heading {
  font-size: 45px;
  font-weight: bold;
  color: #3385ff;
  margin-left: 70px;
  margin-bottom: 10px;
}

.testimonial-name {
  font-size: 18px;
  font-size: 25px;
  margin-left: 70px;
  font-weight: bold;
  color: hsl(125, 47%, 32%);
  margin-bottom: 10px;
}

.testimonial-text {
  font-size: 26px;
  margin-left: 70px;
  color: #000000;
  line-height: 1.5;
}
.team-section {
  padding-top: 80px;
  padding-bottom: 30px;
}
.meet{
  font-size: 30px;
  text-align: left;
  margin-left: 200px;
  padding-bottom: 100px;
  font-family: Arial, Helvetica, sans-serif;
}
.oneimg{
  margin-left: 150px;
}
.main_haeding{
  font-size: 46px;
  text-align: left;
  margin-left: 200px;
}
.team-member {
  display: inline-block;
  box-sizing: border-box;
  width: 30%;
 
}

.team-member1 {
  width: 30%;
  display: inline-block;
  box-sizing: border-box;
 
}

.team-member img {
 border-radius: 50%;
}
h2{
  color: rgb(0, 0, 0);
  width: 38%;
  font-size: 55px;
  margin-left: 180px;  font-weight: bolder;

}
.chance{
  color: rgb(0, 0, 0);
  font-size: 45px;
  width: 35%;
  margin-left: 165px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.campus{
  color: rgb(0, 0, 0);
  font-size: 45px;
  width: 35%;
  margin-left: 165px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.text{
  width: 35%;
  font-size: 20px;
  margin-left: 165px;
}
.team-member h2, .team-member p {
 text-align: left;
}

/*footer*/
/* CSS code for the footer */
footer {

  background-color: #333;
  color: #fff;
  font-family: Arial, sans-serif;
  font-size: 14px;
  padding: 20px;
}

.container2 {
  max-width: 600px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

h2 {
  font-size: 24px;
  font-weight: bold;
  color: #ffffff;
  margin-bottom: 10px;
}

p {
  font-size: 16px;
  color: #666;
  margin-bottom: 10px;
}

input {
  width: 70%;
  height: 40px;
  border: 1px solid #ccc;
  padding: 10px;
  font-size: 16px;
  margin-left: 80px;
}


input:focus, button:focus {
  outline: none;
}


/*cards*/

.card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
    }

    /* Use flexbox to align the card elements horizontally */
    .card-content {
      display: flex;
      align-items: center;
    }

    /* Add some margin and width to the avatar and testimonial elements */
    .card-avatar {
      margin-right: 20px;
      width: 80px;
    }

    .card-testimonial {
      width: 80%;
    }

    /* Use pseudo-elements to add quotation marks before and after the testimonial text */
    .card-testimonial::before {
      content: "\"";
      font-size: 36px;
      color: #cccccc;
    }

    .card-testimonial::after {
      content: "\"";
      font-size: 36px;
      color: #cccccc;
    }

    /* Add some styles for the name and website elements */
    
    .main h1 {
      color: #333333;
      font-size: 36px;
      margin: 20px 0;
      padding-left:7%;
    }

    .main p {
      color: rgb(0,0,0);
      font-size: 28px;
      font-family:arial;
      line-height: 1.5;
      padding-left:8%;
      padding-right:7%;
    }
    .mncard{}
   .card{
    width:40%;
   }
    .card-name {
      color: #333333;
      font-weight: bold;
      margin-top: 10px;
      width:40%
    }

    .card-website {
      color: #0078d4;
      font-style: italic;
      margin-top: 5px;
      width:40%
    }
/* CSS code for the footer */

.container1 {
  max-width: 800px;
  margin: 0 auto;
}

p {
  text-align: center;
}
.background-clip{
  position:absolute;
  right:0;
  bottom:0;
  z-index:-1;
  y-index:-1;
}
@media(min-aspect-ratio:16/9)
{
  .background-clip{
  width:100%;
  height:auto;
}
}

@media(max-aspect-ratio:16/9)
{
  .background-clip{
  width:auto;
  height:100%;
}
}
</style>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <nav>
        <div class="logo">
            <h1>CodeCrafter</h1>
        </div>
        <div class="menu">
            <ul>

                <li><a href=""> Services</a></li>
                <li><a href="">About</a> </li>
                <li> <a href="">Contact</a></li>
                <li><a href="login_admin.php"><button> Instructor Sign Up</button> </a></li>
                <li><a href="login_student.php"><button> Student Sign Up</button> </a></li>

            </ul>
        </div>
    </nav>
</header>

<body>

<div class="ste">
<section>
        <div class="mainheading"></div>
        <div class="rightside">
        <video autoplay loop muted plays-inline class="background-clip" src="images/backg.mp4" type="backg/mp4"></video>

            <h1>Welcome to STMU - Your Online Learning Partner</h1>
            <p>STMU is a leading education forum that offers online courses and complete LMS access to help students
                learn from anywhere, anytime</p>
            <div class="mainbuuton"><button>View All Services</button></div>
        </div>
       
    </section>
</div>
    <!-- Conatiner class of image and rating system -->
<br><br><br>
    <div class="container">
    <!-- HTML code for the content -->
    <div class="featured-in">
      <img src="images/logos-png-8.png" alt="Logo 1">
      <img src="images/envelope.png" alt="Logo 2">
      <img src="images/hm.png" alt="Logo 3">
      <img src="images/user.png" alt="Logo 4">
    </div>
    <br><br> <br><br>
    <div class="ratings">
      <div class="rating">
       <h1> <div class="rating-number">4.8</div>
        <div class="rating-stars">★★★★★</div>
        <div class="rating-label">2,394 Ratings</div>
        <div class="rating-label">Google Reviews</div></h1>
      </div>
      <div class="rating">
      <h1>  <div class="rating-number">A+</div>
        <div class="rating-stars">★★★★★</div>
        <div class="rating-label">125 Reviews</div>
        <div class="rating-label">BBB Rating</div></h1>
      </div>
  
    <div class="testimonial">
      <div class="testimonial-heading">Hear from Our Students</div>
      <div class="testimonial-name">JOHN CARTER</div>
      <div class="testimonial-text">STMU is a game-changer in online education. Their student registration process was seamless, and their LMS platform provides a comprehensive and interactive learning experience.</div>
    </div>
  </div>
  </div>

<br> <br><br>
<div class="main">
    <h1>What People Think About CodeCrafter.</h1>
    <p>Rather than just teach theory, we focus on real code to inspire your next project. Learning shouldn't be boring, so let's have some fun.</p>
  
  </div>

  <!-- Create the card section with the avatar, testimonial, name, and website elements -->
  <div class="mncard">
  <div class="card">
    <div class="card-content">
      
      <p class="card-testimonial">My career started as a designer. Out of necessity I needed to learn how to handle the entire stack. Codecourse took me from basically no knowledge of development to being able to handle every aspect of it.</p>
    </div>
    <p class="card-name">Josh Stobbs, Ontario, Canada</p>
    <p class="card-website">avidlessign.ca</p>
  </div>
  <div class="card">
    <div class="card-content">
      
      <p class="card-testimonial">My career started as a designer. Out of necessity I needed to learn how to handle the entire stack. Codecourse took me from basically no knowledge of development to being able to handle every aspect of it.</p>
    </div>
    <p class="card-name">Alex Stobbs, Ontario, Canada</p>
    <p class="card-website">avidlessign.ca</p>
  </div></div>
<br> <br><br>
<div class="team-section">
    <h1 class="main_haeding">Our team</h1>
    <p class="meet">Meet Our Dedicated Team; Driving Success for Our Students</p>
    <div class="imgsids">
    <div class="team-member">
        <img class="oneimg" src="images/ligerx.jpg" alt="Dr. John Doe" style="width: 250px",>
        <h2>LigerX</h2>
        <p class="chance">Chancellor</p>
      <p class="text">
      LigerX has been the backbone of STMU since its inception. He's passionate   about empowering students to achieve their dreams.
      </p>  </div>
      
    <div class="team-member1">
        <img class="oneimg" src="images/mn.jpeg" alt="Dr. John Doe" style="width: 250px";>
        <h2>REHO G</h2>
        <p class="campus">Director Campus</p>
        <p class="text">REHO has been the Cafeteria manger  of STMU since its inception Her warm personality, attention to detail and exceptional problem-solving skills make her an invaluable asset. </p>
    </div>

    <div class="team-member">
        <img class="oneimg" src="images/younis.jpg" alt="Sarah Johnson" style="width: 220px",>
        <h2>Choto</h2>
        <p class="chance">Head of Student Affairs</p>
        <p class="text">Dilhoooo is the heart of STMU, s the heart of STMU, ensuring that every student has a positive experience. He loves traveling and reading.</p>
    </div></div>
</div>

<br> <br><br>
  </div>
</body>
<!-- HTML code for the footer -->
<footer>
  <div class="container2">
    <h2>Subscribe to Newsletter</h2>
    <p>Enter your email address to register to our newsletter subscription!</p>
    <form action="" method="post">
      <input type="email" name="email" placeholder="Email Address" required>
      <br><br>
     <input type="submit" value="Submit">
     
    </form>
  </div>
  <div class="container1">
    <p>© 2024 Your Company Name. All rights reserved.</p>
  </div>
</footer>

</html>