<?php

$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["pwd"];
$d=$_POST["dob"];
$e=$_POST["gen"];
$e1=$e2=$e3=$e4=$e5="";
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
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"])) {  
        $e1 = "Name is required";  
        echo "Name is required";
        echo "<br>";
   } else {  
       $name = input_data($_POST["name"]);   
           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
               $e1 = "Only alphabets and white space are allowed";  
               echo "Only alphabets and white space are allowed";  
               echo "<br>";
           }  
   }
   if(empty($_POST["email"]))
   {
    $e2 = "Username is required";  
    echo "username is required";
    echo "<br>";
   }
   if(empty($_POST["pwd"]))
   {
    $e3 = "Password is required";  
    echo "Password is required";
    echo "<br>";
   }
   else
   {
    if(strlen($c<8))
    {
        $e4="Password is too short";
        echo "Password is too short";
        echo "<br>";
    }
   }



          //Empty Field Validation  
          if (empty ($_POST["gen"])) {  
            $e5= "Gender is required";  
            echo "Gender is required";
            echo "<br>";
      } else {  
            $gender = input_data($_POST["gen"]);  
      }
      

}

if($e1==""&&$e2==""&&$e3==""&&$e4==""&&$e5=="")
{


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
  $query="INSERT  INTO `ib`(`name`, `email`, `pwd`, `dob`, `gender`) VALUES ('$a','$b','$c','$d','$e')";
  $res=mysqli_query($conn,$query);
  if($res){
  echo "*****Database Connected successfully*****";
  echo "<br>";
  echo "*****Data stored sucessfully*****";
  echo "<br>";
  echo "<br>";
  echo "Redirecting to SIGN IN page in 2 secs";
  header( "refresh:2;URL=http://localhost/IB/iblogin.php" );}
  else
  {
    echo "dupliacte entry found in email";
  }
}
}
else
{
    echo "Please Verify details";
}




?>

