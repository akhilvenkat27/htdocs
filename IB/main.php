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
  padding: 1%;
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
  width:6%;
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
<form action="" method="POST">
  <input type="submit" value="Logout" name="submit" height="35px" width="15px">
</form>
</div>
<?php

if(isset($_POST['submit']))
{
  header( "location:http://localhost/IB/iblogin.php" );
  session_destroy();
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
    

      <?php
        $conn = mysqli_connect("localhost","anits","anits123","anits");
        $query="SELECT * from image order by created DESC";
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
          
          
          <form action=""method="post">
          <td><input type="hidden" value="<?php echo $row['id'];?>" name="id"></td>
         
        </tr>
        <tr>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="likeimage.png" width="38px" height="38px" id="likeimage"+<?php echo $row['id'];?>> 
      <input  value="Like" type="submit" name="Like"></input>
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
            <form action="" method="POST">
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
    <h3 style="text-align:center;">Online Users</h3>
  <?php
        $query="SELECT * from ib";
        $res=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($res))
			  {
          if($row['email']!=$a){
        ?>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<img src='dot.png' height='12px' width='10px'> ".$row['email'];?></p>
        <?php 
          }
        }
        ?>

  </div>
  <div class="online">
    <h3 style="text-align:center;">Chats - Inbox</h3>
    <form action="" method="POST">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="show messages" name="messages"></input>
    </form>

    <?php if(isset($_POST['messages'])){
      $query="select * from chat where dest='$a'";
      $res=mysqli_query($conn,$query);
      while($row=mysqli_fetch_assoc($res))
          { 
            echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row['src']." : ".$row['message'];
      ?>
            
    <?php
          }
    }
      ?>
  </div>
  <div class="online">
    <h3 style="text-align:center;">Chats</h3>
    <table>
        <?php
        $sender=$a;
        $query="select * from ib";
        $res=mysqli_query($conn,$query);
        
        while($row=mysqli_fetch_assoc($res))
            { 
              if($row['email']!=$a){
        ?>
        <form action="" method="POST">
      <input type="hidden" value="<?php echo $row['email'];?>" name="eid">
          <tr>
            <td><input type="text" name="msg" placeholder="Send message.." required></td>
            </tr>
            <tr>
            <td><?php echo "To: ".$row['email']."  ";?><input type="submit" name="tomsg" value="🚀"></td>
          </tr>
            </form>
        <?php
              }
        }
        ?>
      </table>
      <?php
      if(isset($_POST['tomsg']))
      {
        $desti=$_POST['eid'];
        $message=$_POST['msg'];
        $query="INSERT  INTO `chat`(`src`, `dest`, `message`) VALUES ('$a','$desti','$message')";
        mysqli_query($conn,$query);
    
      }
      
      ?>
  </div>
  </div>
</div>

<?php
$conn = mysqli_connect("localhost","anits","anits123","anits");
      if(isset($_POST['Like']))
       {
        $c=1;
        $b=$_POST['id'];
      $query="select * from checklike where name='$a' and id='$b'";
      $data=mysqli_query($conn,$query);
      $total= mysqli_num_rows($data);
      if(!$total)
      {
        $query="insert into `checklike`(`name`, `id`,`onoff`) VALUES ('$a','$b','0')";
        mysqli_query($conn,$query);
      }
      $query="select * from image";
      $res=mysqli_query($conn,$query);
      $temp1=0;
      while($row=mysqli_fetch_assoc($res))
          { 
            if($row['id']==$b)
            $temp1=$row['likes'];
          }
      $query="select * from checklike where name='$a' and id='$b' and onoff='$c'";
      $data=mysqli_query($conn,$query);
      $total= mysqli_num_rows($data);
      echo $temp1;
      if($total)
      {
        echo $b."is clicked disliked";
        $query="update checklike set onoff='0' where id='$b'";
        mysqli_query($conn,$query);
        $temp1-=1;
        $query="update image set likes='$temp1' where id='$b'";
        mysqli_query($conn,$query);
      }
      else
      {
        echo $b."is clicked liked";
        $query="update checklike set onoff='1' where id='$b'";
        mysqli_query($conn,$query);
        $temp1+=1;
        $query="update image set likes='$temp1' where id='$b'";
        mysqli_query($conn,$query);
      }
    
  $_POST['id']=78999999999999;
       }
      ?>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","anits","anits123","anits");
if(isset($_POST['cmt']))
{
  $b=$_POST['id'];
  $txt=$_POST['cmt'];
  $query="INSERT INTO `comment`(`id`,`name`, `comment`) VALUES ('$b','$a','$txt')";
  mysqli_query($conn,$query);
}

?>






