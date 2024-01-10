<?php
session_start();
$a=$_SESSION['user_name'];
if(!isset($_SESSION['user_name']))
header( "location:http://localhost/IB/iblogin.php" );
?>
<!doctype html>
<html>

<head>
  
<link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
<style>
body
{
    background: #EDEFF1;
    font-family: 'EB Garamond';
}
.columns {
    justify-content: space-between; 
  display: flex;
  flex-direction: row;

  width: 100%;

}
.c{
 
    margin : 0.2%;
}

.c1 {

  flex: 30%;
  border-radius: 25px;
  background-color: #e4e9ee;
}
.c2{
  flex: 41%;
  background-color:#e4eee9;
  border-radius: 25px;
}
.c3{

    flex: 30%;
    border-radius: 25px;
    background-color: #e4e4ee;
}
#one
{
text-align:center;
color:white;
}

.up
{
  box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
    border-radius: 25px;
background-color:#e4eeee;
height: 75px;
}
.comment
{
  background-color: #F0F2F5;
  width:511px;
  height:50px;
  box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
  border-radius: 25px;
}
input[type=text]
{

width:250px;
height:25px;
border-radius: 15px;
border: 1px solid #ccc;
}
.img
{
border-radius: 45px;
}
.online
{
  margin: 10%;
  background-color: #f4f8f4;
  background-image: url('https://cdn.pixabay.com/photo/2018/11/13/22/02/instagram-3814094_960_720.png');
  background-position: 100%;
  background-repeat: no-repeat;
  background-size: 100%;
  height: 250px;
  width:300px;
  border-radius:20px;
  box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
}
.cont{
display:flex;
flex-direction: column;
flex-wrap: wrap;
}
.bxx{
  background-color: #F0F2F5;
  margin:2%;
  padding: 1%;
 padding-top: 2%;
  width:505px;
 

  box-shadow: 1px 3px 18px rgba(0,0,0,0.3);
  border-radius: 25px;
}
input[type=submit]
{
  border-radius: 10px;

  border: none;
  padding: 4px 15px;
  text-decoration: none;
  display: inline-block;
  background-color: #D3E6E8;
}
.share
{
  border-radius: 10px;
  width:20%;
  border: none;
  padding: 4px 15px;
  text-decoration: none;
  display: inline-block;
  background-color: #ECDCEB;
}
.like
{
  border-radius: 10px;
  width:12%;
  border: none;
  padding: 4px 15px;
  text-decoration: none;
  display: inline-block;
  background-color: #FDE5E5;
}
.logout
{
  width:30%;
 margin-left: 10%;
  text-align: left;
}

</style>
</head>




<body>
<div class="up">
<table>
<tr>
<td><img src="banner.png" height="70px" width="90px"> </img></td>
<td><input type="text" placeholder="🌍 Search Infinitely...." ></input></td>
<div class="logout">
<td >
<form action="#" method="POST">
  <input type="submit" value="Home" name="submit" height="35px" width="15px">
</form>
</div>
<?php

if(isset($_POST['submit']))
{
  header( "location:http://localhost/IB/main.php" );
}
?>
</td>
</tr>
</table>
</div>
<br>
<div class="columns">
  <div class="c c1 ">
   <table>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
        <td></td><td></td>
        <td><a href="http://localhost/IB/upload.php"><img src="username.png" height="35px" width="35px"> </a></td>
        <td><?php echo $a;?></td>
    </tr>
   </table>
  </div>
  <div class="c c2"> 
  
    <div class="cont">
    <h3 style="text-align:center;">Your Uploads</h3>
    <?php
        $conn = mysqli_connect("localhost","anits","anits123","anits");
        $query="SELECT * from image where name='$a'";
        $res=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($res))
			  {
        ?>
      <div class="bxx">
      <table>
      <tr>
          <td><img src="https://cutewallpaper.org/24/username-icon-png/username-svg-png-icon-free-download-401900-onlinewebfontscom.png" height="35px" width="35px"><?php echo $row['name'];?></td>
        </tr>
        <tr>
        <td><img class="img" src="./IBupload/<?php echo $row['imageurl'];?>" height="400px" width="500px"></td>
        </tr>
        <tr>
          
          
          <form action="#"method="post">
          <td><input type="hidden" value="<?php echo $row['id'];?>" name="id"></td>
         
        </tr>
        <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;<input required type="image" src="https://www.nicepng.com/png/detail/778-7786050_download-instagram-like-icon-png.png"alt="Submit" width="38px" height="38px" > 
      <button class="like" onclick="click()">Like</button>
      <?php echo $row['likes']."";?>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://icons.veryicon.com/png/o/hardware/jackdizhu_pc/comment-25.png" width="38px" height="38px" ><input type="submit" name="sub" value="Comment"></input>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="https://www.vhv.rs/dpng/d/244-2447270_instagram-share-icon-png-png-download-instagram-share.png"alt="Submit" width="38" height="38" > 
      <button class="share">Share</button>
    </td>
    <td><input type="hidden" value="<?php echo $row['id'];?>" name="id"></td>  
        </tr>
         <?php
          if(isset($_POST['sub'])&&$row['id']==$_POST['id'])
          {
          ?>
           <tr></tr> <tr></tr>
            <form action="#" method="POST">
            <tr>
            <td> <input type='text' placeholder='  Write a comment..' name="cmt" required> </input>
            <input type="image" id="image" alt="post" src="https://freeiconshop.com/wp-content/uploads/edd/paper-rocket-flat.png" width="30px" height="30px"></td>
            </tr>  
            </form>
          
          <?php
          $query2="select * from comment";
          $res2=mysqli_query($conn,$query2);
        while($row2=mysqli_fetch_assoc($res2))
			      { 
              if($_POST['id']==$row2['id']){?>
            
              <tr> 
             
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['name']."  :  ".$row2['comment'];?></td>
              
            </tr>
            
          <?php
              }
            }  
          }
          ?>
        </form>
        </table> 
    
          </div>
          
      <?php
      }
      ?>
          
    
         
</div>

  </div>
  <div class="c c3">
  <div class="online">
  <table>
<tr></tr><tr></tr>
<tr>
    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
  <td><h3 style="text-align:center;">Post Here</h3></td>
    </tr>
  <form action="checkupload.php" method="POST" enctype="multipart/form-data">
<table>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
    <td>	
	<label type="file" name="fileToUpload" id="fileToUpload"> Add to story </label>
    </td>
	<td>
    <input  type="file" name="fileToUpload"/>
    </td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
  
	<td><input name="sub" type="submit" value="submit"></td>
</tr>
</table>
</form>
       
  </div>

  </div>
</div>
</body>

</html>
