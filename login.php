<?php
include "conn.php";
if(isset($_SESSION['uEmail'])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Innocanto</title>
  <link rel="icon" href="images/innologo.png" sizes="96x96" type="image/png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="animation.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <style>
    /*login*/
body {
    background-color: #8bf626;
	background-size: cover;
	background-position: center;
    font-family: "Poppins", sans-serif;
    color: #0c0c0c;
    width: 100%;
	height: 600px;
	display: flex;
    padding: 10px;
	align-items: center;
}
.login-container {
    width: fit-content;
    float: left;
    height: auto;
    margin: 0 auto;
    padding: 40px;
    background-color: #FFFFFF;
}

h3 {
  text-align: center;
  margin-bottom: 10px;
}

h2 {
  text-align: center;
  margin-bottom: 10px;
}

.form-group {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
    background: #FEFEFE;
    border: none;
    margin-bottom: 5px;
    padding: 6px;
    border-radius: 2px;
    width: 350px;
    height: 30px;
    border: 1px solid #000000;
    align-items: center;
    margin: auto;
}

button {
  display: block;
  width: 365px;
  padding: 10px;
  margin-top: 10px;
  background: #036892;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 10px;
  text-transform: uppercase;
}
.login-container .h5 a{
   color: #036892;
}
  
  </style>
</head>
<body>
<div class="login-container">
    <h2>Welcome, Innocanto Admin!</h2>
    <h3>Login</h3>
    <form method="POST" action="log.php">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
      </div>
      <button type="submit" name="send">Sign In</button>
      <br>
      <hr>
    </form>
  </div>
</body>
</html>