<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<style>
body {
background-color: #F8F8F8;
font-family: Arial, sans-serif;
}
form {
background-color:whitesmoke;
border-radius: 5px;
padding: 20px;
width: 300px;
margin: auto;
margin-top: 50px;
box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
}
label {
display: block;
font-weight: bold;
margin-bottom: 5px;
}
input[type="text"],
input[type="password"] {
border-radius: 20px;

font-size: 16px;
padding: 10px;
width: 100%;
margin-bottom: 20px;
box-sizing: border-box;
}
input[type="submit"] {
background-color: blueviolet;
border: none;
color: #FFFFFF;
cursor: pointer;
font-size: 16px;
padding: 10px;
width: 100%;
border-radius: 3px;
}
input[type="submit"]:hover {
background-color: #3e8e41;
}
</style>
</head>
<body>
<form method="post" action="wtassg.php">
<label for="email">Email:</label>
<input type="text" id="email" name="email">
<label for="password">Password:</label>
<input type="password" id="password" name="password">
<input type="submit" value="Submit">
</form>
</body>
</html>
Cookies.php
<?php
setcookie("user", $_POST['email']);
setcookie("pass", $_POST['password']);
?>
<html>
<head>
<title>Cookie Demo</title>
<style>
body {
background-color: #F8F8F8;
font-family: Arial, sans-serif;
text-align: center;
}
h1 {
margin-top: 50px;
font-size: 24px;
color: #333333;
}
p {
font-size: 18px;
color: #666666;
margin-bottom: 20px;
}
.cookie-container {
display: flex;
flex-wrap: wrap;
justify-content: center;
margin-top: 50px;
}
.cookie-box {
background-color: aquamarine;
border-radius: 55px;
padding: 20px;
width: 300px;
margin: 20px;
box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
}
label {
display: block;
font-weight: bold;
margin-bottom: 5px;
color: #666666;
}
.cookie-value {
font-size: 16px;
color: #333333;
margin-top: 10px;
}
.cookie-not-set {
font-style: italic;
color: #999999;
margin-top: 10px;
}
</style>
</head>
<body>
<h1>Cookie Demo</h1>
<p>Submitted username and password:</p>
<div class="cookie-container">
<div class="cookie-box">
<label>Username:</label>
<div class="cookie-value">
<?php
if (!isset($_COOKIE["user"])) {
echo "<span class='cookie-not-set'>Not set</span>";
} else {
echo $_COOKIE["user"];
}
?>
</div>
</div>
<div class="cookie-box">
<label>Password:</label>
<div class="cookie-value">
<?php
if (!isset($_COOKIE["pass"])) {
echo "<span class='cookie-not-set'>Not set</span>";
} else {
echo $_COOKIE["pass"];
}
?>
</div>
</div>
</div>
</body>
</html