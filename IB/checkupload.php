<?php  
session_start();
$a=$_SESSION['user_name'];
echo $a;
echo "<br>";
$conn = mysqli_connect("localhost","anits","anits123","anits");
$target_path = "IBupload/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
$imageFileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
if (file_exists($target_path)) {
    echo "Sorry, file already exists.";
  }
  else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  }
else if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)&&$conn)
 {  
    echo "File uploaded successfully!";  
    echo "<br>";
    $image= $target_path;
    $filename=$_FILES['fileToUpload']['name'];
    $imgcontent=addslashes(file_get_contents($image));
    //insertion of image into data base
     
    $query= "INSERT  INTO `image`(`name`, `imageurl`, `likes`,`created`) VALUES ('$a','$filename','0',NOW())";

    mysqli_query($conn,$query);
    echo "<br>";
    echo "Data base connected sucessfully";   
} 

else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
echo "<br>";
echo "Redirecting to UPLOAD page in 2 secs";
header( "refresh:2;URL=http://localhost/IB/upload.php" );
?> 