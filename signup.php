<?php
$showAlert = false; 
$showError = false; 
$exists=false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';   
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
    $sql = "Select * from adminlogin where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) { 
            $sql = "INSERT INTO `adminlogin` ( `username`, 
                `password`) VALUES ('$username', 
                '$password')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
              echo "<script language='javascript'>";
              echo "alert('You have Succesfully Created an Account')";
              echo "</script>";
              header("location: Loginpage.php");
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
    
}//end if   
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>WAVE</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <style>
   @import url('https://fonts.googleapis.com/css?family=Montserrat:600|Noto+Sans|Open+Sans:400,700&display=swap');
*{
  margin: 0;
  padding: 0;
  border-radius: 5px;
  box-sizing: border-box;
}
body{
  height: 100vh;
  display: flex;
  align-items: center;
  text-align: center;
  font-family: sans-serif;
  justify-content: center;
  background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
  background-size: cover;
  background-position: center;
}
.bubbles
{
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    position: absolute;
}
.bubbles span
{
    position: relative;
    width: 30px;
    height: 30px;
    margin: 0 4px;
    border-radius: 50px;
    animation: animate 15s alternate-reverse infinite;
    animation-duration: calc(40s / var(--i));
}
.bubbles span:nth-child(odd)
{
    background: #f91ed5;
    box-shadow: 0 0 0 10px #f91ed544,
    0 0 50px #f91ed5,
    0 0 100px #f91ed5;
}
.bubbles span:nth-child(even)
{
    background: #ffcc00;
    box-shadow: 0 0 0 10px #ffcc0044,
    0 0 50px #ffcc00,
    0 0 100px #ffcc00;
}
@keyframes animate
{
    0%
    {
        transform: translateY(100vh) scale(0);
    }
    100%
    {
        transform: translateY(-10vh) scale(1);
    }
}
.container{
  position: relative;
  width: 450px;
  height: auto;
  background: white;
  padding: 60px 40px;
  border-radius: 10px;
}
header{
  font-size: 40px;
  margin-bottom: 60px;
  font-family: 'Montserrat', sans-serif;
}
.input-field, form .button{
  margin: 25px 0;
  position: relative;
  height: 50px;
  width: 100%;
}
.input-field input{
  height: 100%;
  width: 100%;
  border: 1px solid silver;
  padding-left: 15px;
  outline: none;
  font-size: 19px;
  transition: .4s;
}
input:focus{
  border: 1px solid #1DA1F2;
}
.input-field label, span.show{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.input-field label{
  left: 15px;
  pointer-events: none;
  color: grey;
  font-size: 18px;
  transition: .4s;
}
span.show{
  right: 20px;
  color: #111;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  user-select: none;
  visibility: hidden;
  font-family: 'Open Sans', sans-serif;
}
input:valid ~ span.show{
  visibility: visible;
}
input:focus ~ label,
input:valid ~ label{
  transform: translateY(-33px);
  background: white;
  font-size: 16px;
  color: #1DA1F2;
}
form .button{
  margin-top: 30px;
  overflow: hidden;
  z-index: 111;
}
.button .inner{
  position: absolute;
  height: 100%;
  width: 300%;
  left: -100%;
  z-index: -1;
  transition: all .5s;
  background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
}
.button:hover .inner{
  left: 0;
}
.button button{
  width: 100%;
  height: 100%;
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 20px;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
}
   </style>
   <body>
    <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:12;"></span>
        <span style="--i:11;"></span>
        <span style="--i:22;"></span>
        <span style="--i:06;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:02;"></span>
        <span style="--i:17;"></span>
        <span style="--i:12;"></span>
        <span style="--i:11;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:12;"></span>
        <span style="--i:11;"></span>
        <span style="--i:22;"></span>
        <span style="--i:06;"></span>
        <span style="--i:18;"></span>
    </div>
    <div class="container">
         <header>Create an Account</header>
         <form action="signup.php" method="post">
            <div class="input-field">
               <input type="text" name="username" value="">
               <label>Username</label>
            </div>
            <div class="input-field">
            <input class="pswrd" type="password" name="password" value="">
               <label>Password</label>
            </div>
            <div class="input-field">
            <input class="pswrd" type="password" name="cpassword" value="">
               <label>Confirm Password</label>
            </div>
            <div class="button">
               <div class="inner"></div>
               <button>Sign-Up!</button>
            </div>
         </form>
      </div>
   </body>
</html>