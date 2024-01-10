<?php
session_start();
?>
<!doctype html>
<html>
<head>
<style>
body
{
  background-image: url('https://e1.pxfuel.com/desktop-wallpaper/581/154/desktop-wallpaper-backgrounds-for-login-page-login-page.jpg');
  background-repeat: no-repeat;
  background-size: 100%;
}
.box {
  background-color: white;
  border-radius: 30px;;
  margin: auto;
  width: 25%;
  border: 3px solid #73AD21;
  padding: 35px;
  box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
}
</style>
</head>
<body>
  <h1 style="text-align:center; color:white;">ᒪOGIᑎ</h1>
<br>
<br><br>
<br>
<br>
<br>

<br>
<div class="box">
<form action="#" method="post">
<table>
<tr>
<td>
</td>
<td>
  <img height="80px" width="80px" src="https://cdn-icons-png.flaticon.com/512/6681/6681204.png">
</td>
</tr>
<tr>
<td class="col"><label for="email"><img height="40px" width="40px"  src="https://www.iconpacks.net/icons/1/free-mail-icon-142-thumb.png"></label></td>
  <td><input name="email" type="email" placeholder="Enter your email-id"></input></td>
</tr>
<tr>

	<td class="col"><label for="pwd">Enter Password: </label></td>
	<td><input name="pwd" type="password"></input></td>
</tr>
<tr>
</tr><tr>
</tr><tr>
</tr><tr>
</tr><tr>
</tr><tr>
</tr><tr>
</tr><tr>
</tr>
<tr>
  <td></td>
	<td><input name="sub" type="submit" value="submit" class="button-85"></td>
  <td><a href="http://localhost/wt/registration.php"> SignUp</a></td>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php
// Create connection
$conn = mysqli_connect("localhost","anits","anits123","anits");
if (!$conn) {
  echo "Connection failed: ";
}
else
{
  if(isset($_POST['sub']))
  {
    $u=$_POST['email'];
    $pwd=$_POST['pwd'];
    $query="select * from registration where Email= '$u' && contact='$pwd'";
    $data=mysqli_query($conn,$query);
    $total= mysqli_num_rows($data);
    if($total)
    {
    $_SESSION['user_name']=$u;
    header('location:hotel.php');
    }
    else
    echo "Login Failed";
  }
}


?>
