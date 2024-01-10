<!-- Author : G.Akhil Venkat-->

<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="style.css">
<style>
   .box
   {
	border: 5px outset red;

  background-color: lightblue;    
  text-align: center;
   }
   .center1
   {
	th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid purple;
  border-collapse: collapse;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
   }
</style>
</head>
<body>
<h2 style="text-align:center">Application Form </h2>
<br>

<form action="save.php" method="post" enctype="multipart/form-data">
<table class="center">

<tr>
	<td class="col"><label for="name">Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
	<td><input name="name" placeholder="Enter you Great name"></td>
<tr>
<tr>
	<td class="col"><label for="contact">Contact No:</label></td>
	<td><input name="contact" type="number" placeholder="+91"></input></td>
</tr>
<tr>
	<td class="col"><label for="email">Email Id:</label></td>
	<td><input name="email" type="email" placeholder="Enter your email-id"></input></td>
</tr>
<tr>
	<td class="col"><label for="dob">DOB:</label></td>
	<td><input name="dob" type="date"></input></td>
</tr>
<tr>
	<td class="col"><label for="gen">Gender :</label></td>
	<td class="col">
        <input name="gen" type="radio" value="male"><label for="male">Male </label><input type="radio" value="female" name="gen"><label for="female">Female</label></td>
</tr>
<tr>
	<td class="col"><label for="rel">Graduation: </label></td>
	<td>
	<select name="rel" required>
	<option value="M.Tech">M.Tech</option>
	<option value="B.Tech">B.Tech</option>
	<option value="Diploma">Diploma</opiton>
	</select>
	</td>
</tr>
<tr>
	<td class="col"><label for="lang">Skill Set: </label></td>
	<td class="col">
	<input type="checkbox" name="lang" value="c++"><label for="c++">c++</label>
	<input type="checkbox" name="lang" value="python"><label for="python">python</label>
	<input type="checkbox" name="lang" value="arduino"><label for="arduino">arduino</label>
	</td>
</tr>
<tr>
    <td>	
	<label type="file" name="fileToUpload" id="fileToUpload"> Upload Image: </label>
    </td>
	<td>
    <input  type="file" name="fileToUpload"/>
    </td>
</tr>

<tr>
	<td><input name="sub" type="submit" value="submit"></td>
	<td><a href="file:///C:/Users/ADMIN/OneDrive/Desktop/wt/registration.html"><input type="reset"></input></a></td>
</tr>
</table>
<br><br><br>
<br><br><br>
<br><br><br>


<!-- Data Retreival -->


<div class="box">
	<p> Current DataBase</p>
</div>
<?php 
echo "<br>"; 
 $conn = mysqli_connect("localhost", "anits","anits123","anits");
 if (!$conn) {
   echo "Connection failed: ";
 }
 else
 {
   $query="select * from registration ";
   $res=mysqli_query($conn,$query);
 }

?>
<form action="registration.php" method="post">
	<table bgcolor="white" border="1px" >
		<tr style="border: 1px solid black;">
			<td>Name</td>
			<td>Contact</td>
			<td>Email</td>
			<td>DOB</td>
			<td>Gender</td>
			<td>Graduation</td>
			<td>Skills</td>
		</tr>
		<tr>
 			<?php
			while($row=mysqli_fetch_assoc($res))
			{
			?>
			<td> <?php echo $row['Name'];?></td>
			<td> <?php echo $row['contact'];?></td>
			<td> <?php echo $row['Email'];?></td>
			<td> <?php echo $row['DOB'];?></td>
			<td> <?php echo $row['Gender'];?></td>
			<td> <?php echo $row['Graduation'];?></td>
			<td> <?php echo $row['skillset'];?></td>
		</tr>  
		<?php
	    } 
	    ?>
    </table>
</form>
</body>
<footer>
<p style="text-align:center">@TeamInfiniti-2023</p>
<footer>
</html>
