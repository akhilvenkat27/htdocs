<!doctype html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
    <style>
        .center
{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
input[type=text],[type=password]
{
  background: rgb(182,186,204);
background: #E8F1F1;
width:400px;
height:50px;
border-radius: 10px;

border: 1px solid #ccc;
}
.top
{
    border-radius:10px;
    width:20%;
    height:80%;
    background: rgb(60,80,190);
background: linear-gradient(90deg, rgba(60,80,190,1) 0%, rgba(0,90,194,1) 100%);
}
input[type=submit]
{
  border-radius: 10px;
  width:100%;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  background: rgb(21,56,212);
background: linear-gradient(90deg, rgba(21,56,212,0.7343312324929971) 0%, rgba(60,70,232,0.7455357142857143) 100%);
}
.content {

    box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
 display: flex;
  justify-content: center;
  width: 35%;
  left: 30%;
  height:400px;
border-radius: 30px;
  padding: 5px;
 margin: auto;
  position:absolute;
  background: rgb(152,184,210);
background: linear-gradient(90deg, rgba(152,184,210,0.6727065826330532) 0%, rgba(200,218,227,0.8519782913165266) 100%);
}
body {
    background: rgb(219,221,231);
background: linear-gradient(90deg, rgba(219,221,231,1) 0%, rgba(225,232,240,1) 100%);
    font-family: 'EB Garamond';
}
.center{
    width: 80%;
}
    </style>
</head>
<body>
<br><br><br><br><br><br>
<div class="content">
<form action="insertlogin.php" method="post">
<table>
<tr>
    <td><b><p style="text-align:center;">SIGN </p></b></td>
</tr>
<tr>
    <td><input type="text" name="name" placeholder=" Name" required></td>
</tr>
<tr>
    <td><input type="text" name="email" placeholder=" Phone Number or Email" required></td>
</tr>
<tr>
    <td><input type="text" name="pwd" placeholder=" Confirm Password" required></td>
</tr>
<tr>
    <td><label for="dob">Date of Birth</label></td>
</tr>
<tr>
    <td><input type="date" name="dob" required> </td>
</tr>
<tr>
	<td class="col"><label for="gen">Gender</label></td>
</tr>
<tr>
	<td class="col">
        <input required name="gen" type="radio" value="male"><label for="male">Male </label><input type="radio" required value="female" name="gen"><label for="female">Female</label></td>
</tr>
<tr>
<td><input name="sub" type="submit" value="submit" ></td>
</tr>
</table>
</form>
</div>
</body>
</html>