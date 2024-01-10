<?php
session_start();
ob_start(); 
?>
<!DOCTYPE html>
<html>
<head>  
<title>♾️ Book</title>
<link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
<style>
  body {
    font-family: 'EB Garamond';
}
#video
{
 position: fixed;
  right: 0;
  bottom: 0;  
}
.flex-parent-element {
  display: flex;
  width: 50%;
}

.flex-child-element1 {
  flex: 1;
  margin: 10px;
}
.flex-child-element2 {
  flex: 1;
  border-radius: 20px;
  background: rgb(182,186,204);
background: linear-gradient(90deg, rgba(182,186,204,0.7343312324929971) 0%, rgba(238,226,226,0.6755077030812324) 100%);
margin:5px;


}
.center
{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}

.content {
  box-shadow: white 0px 54px 55px, white 0px -12px 30px, black 0px 4px 6px, white 0px 12px 13px, black 0px -3px 5px;
  display: flex;
  justify-content: center;
  width: 70%;
  left: 15%;
  height:350px;
border-radius: 30px;
  padding: 5px;
 margin: auto;
  position:absolute;
  background: rgb(152,184,210);
background: linear-gradient(90deg, rgba(152,184,210,0.6727065826330532) 0%, rgba(200,218,227,0.8519782913165266) 100%);
}
.log
{
  background: -webkit-linear-gradient(rgb(47, 71, 206), rgba(10, 10, 10, 0.76));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
}
input[type=text],[type=password]
{
  background: rgb(182,186,204);
background: linear-gradient(90deg, rgba(182,186,204,0.7343312324929971) 0%, rgba(210,212,255,0.6755077030812324) 100%);
width:400px;
height:50px;
border-radius: 10px;
border: 1px solid #ccc;
}
input[type=submit]
{
  border-radius: 10px;
  width:93%;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  background: rgb(21,56,212);
background: linear-gradient(90deg, rgba(21,56,212,0.7343312324929971) 0%, rgba(60,70,232,0.7455357142857143) 100%);
}
.img
{
border-radius: 45px;
}
.cont{
display:flex;
flex-direction: column;
flex-wrap: wrap;
width:85%;
}
.bxx{
  background-color: #F0F2F5;
  margin:2%;
  padding: 1%;
  width:80%;
 padding-top: 2%;
  width:360px;
 

  box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
  border-radius: 30px;
}
.error {color:red;}
</style>
</head>
<body>
<video autoplay muted loop id="video">
  <source src="video.mp4" type="video/mp4">
</video>
  <br><br><br><br><br><br><br><br>

<div class="content">
  
  <div class="flex-child-element1 magenta">
  
  <marquee direction= up height=320px>
    <?php
    $conn = mysqli_connect("localhost","anits","anits123","anits");
    $query="select * from image order by likes desc";
    $res=mysqli_query($conn,$query);
 
    while($row=mysqli_fetch_assoc($res))
    {
    if($row['likes']>0){
    ?>
   
     <div class="bxx">
      <table>
        <tr>
        
        <td><img class="img" src="./IBupload/<?php echo $row['imageurl'];?>" height="300px" width="350px"></td>
        
        </tr>
        <tr>
          <td><img src="homelike.png" width="38px" height="38px"><?php echo $row['likes'];?></td>
        </tr>
        </table> 
    
          </div>
          
    
    <?php
    }
    }
    ?>
  
  </marquee>          

  </div>
  <div class="flex-child-element2 green">
    <h2 style="text-align:center;" class="log">Login Here</h2>
    <form action="#" method="post">
      <table>
        <tr>
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="uname" placeholder="   Username" required></td>
          </tr>

        <tr>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd" placeholder="   Password" required></input></td>
         </tr>
         <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
         <tr>
            <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  <input name="sub" type="submit" value="submit"></td>
          </tr>
          <tr></tr><tr></tr>
          <tr>
            
            <td>&nbsp; &nbsp; Not an Infiniti member ? <a href="http://localhost/IB/signup.php">Sign up</a></td>
          </tr>

      </table>
    </form>
  </div>
</body>

</html>
<?php
  $conn = mysqli_connect("localhost","anits","anits123","anits");
// Create connection`
if (!$conn) {
  echo "Connection failed: ";
}
else
{
  if(isset($_POST['sub']))
  {
    $u=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $query="select * from ib where email= '$u' && pwd='$pwd'";
    $data=mysqli_query($conn,$query);
    $total= mysqli_num_rows($data);
    if($total)
    {
    $_SESSION['user_name']=$u;
    header("location:http://localhost/IB/main.php");
    }
    else
    {
      echo "<p style='color:red;'>*Invalid Credentials</p>";
    }
  }
}
ob_end_flush()
?>