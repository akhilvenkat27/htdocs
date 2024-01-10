
<!-- Data Validation  && Inserting -->
<!-- Author : G.Akhil Venkat-->

<?php
$a=$_POST["name"];
$b=$_POST["contact"];
$c=$_POST["email"];
$d=$_POST["dob"];
$e=$_POST["gen"];
$f=$_POST["rel"];
$g=$_POST["lang"];

/**
 * Summary of input_data
 * @param mixed $data
 * @return string
 */
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
$e1=$e2=$e3=$e4=$e5="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      if (empty($_POST["name"])) {  
           $e1 = "Name is required";  
      } else {  
          $name = input_data($_POST["name"]);   
              if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                  $e1 = "Only alphabets and white space are allowed";  
              }  
      }  
        
      //Email Validation   
      if (empty($_POST["email"])) {  
              $e3 = "Email is required";  
      } else {  
              $email = input_data($_POST["email"]);   
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                  $e3 = "Invalid email format";  
              }  
       }  
      
      //Number Validation  
      if (empty($_POST["contact"])) {  
              $e2 = "Mobile no is required";  
      } else {  
              $mobileno = input_data($_POST["contact"]);  
              if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
              $e2 = "Only numeric value is allowed.";  
              }  
          //check mobile no length should not be less and greator than 10  
          if (strlen ($mobileno) != 10) {  
              $e2= "Mobile no must contain 10 digits.";  
              } 
             
      }
          //Empty Field Validation  
    if (empty ($_POST["gen"])) {  
      $e4= "Gender is required";  
} else {  
      $gender = input_data($_POST["gen"]);  
}  

//Checkbox Validation  
if (!isset($_POST['lang'])){  
      $e5 = "Select the language";  
} else {  
      $agree = input_data($_POST["lang"]);  
}    

}

?>
<head>
  <style>
    table, th, td {
  border: 1px solid purple;
  border-collapse: collapse;
}
    </style>
</head>
<h1> <b><u>Registration Details </u></b></h1>
<table>
  <tr>
    <td> Name:</td>
    <td><?php 
    if($e1=="")
    echo $a;
    else
    echo "Please Enter the correct Name";
    
    ?>
    
  </td>
  </tr>
  <tr>
    <td> Contact: </td>
    <td><?php
    if($e2=="")
     echo $b;
     else
     echo "Please Enter the correct Contact ";
     ?>
     </td>
  </tr>
  <tr>
    <td> email:</td>
    <td><?php 
    if($e3=="")
    echo $c;
    else
    echo "email error";
    ?></td>
  </tr>
  <tr>
    <td> dob: </td>
    <td><?php echo $d;?></td>
  </tr>
  <tr>
    <td> Gender:</td>
    <td><?php
    if($e4=="")
    echo $e;
    else
    echo "Please select Gender";
    
    ?></td>
  </tr>
  <tr>
    <td> Graduation:</td>
    <td><?php echo $f;?></td>
  </tr>
  <tr>
    <td> Language: </td>
    <td><?php 
    if($e5=="")
    echo $g;
    else
    echo "Please Select language";
    
    ?></td>
  </tr>
</table>
<?php
echo "<br>";
echo "<br>"; 
if($e1==""&&$e2==""&&$e3==""&&$e4==""&&$e5=="")
{

//File Uploading 
$target_path = "imageupload/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully! <br>";  
} else{  
    echo "Sorry, file not uploaded, please try again! <br>";  
}  



  $servername = "localhost";
  $username = "anits";
  $password = "anits123";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,"anits");
  
  // Check connection
  if (!$conn) {
    echo "Connection failed: ";
  }
  else
  {

    $query="INSERT  INTO `registration`(`Name`, `contact`, `Email`, `DOB`, `Gender`, `Graduation`, `skillset`) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
    mysqli_query($conn,$query);
    echo "*****Database Connected successfully*****";
    echo "<br>";
    echo "*****Data stored sucessfully*****";
  }
}
else
echo "*****Data storing failed*****";
?>
 