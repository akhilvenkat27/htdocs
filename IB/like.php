
<?php
session_start();
$a=$_SESSION['user_name'];

$conn = mysqli_connect("localhost","anits","anits123","anits");
      if(isset($_POST['id']))
       {
        echo $_POST['id'];
        $b =$_POST['id'];
        $top=0;
        $query="select id from `checklike` where id='$b' and name='$a'";
        $data=mysqli_query($conn,$query);
        $total= mysqli_num_rows($data);
        if($total)
        {
          echo "DISLIKE";
          $query="DELETE FROM `checklike` WHERE id='$b' and name='$a' ";
          mysqli_query($conn,$query);
          $query="SELECT * from image";
          $res=mysqli_query($conn,$query);
          $temp=0;
          while($row=mysqli_fetch_assoc($res))
			     {
            if($row['id']=='$b')
               $temp=$row['likes'];
           }
           if($temp>0)
           $temp-=1;
           $query="update image set likes='$temp' where id='$b'";
           mysqli_query($conn,$query);
        }
        else
        {
          echo "LIKE";
          $query="INSERT  INTO `checklike`(`name`, `id`) VALUES ('$a','$b')";
          mysqli_query($conn,$query);
          $query="SELECT * from image";
          $res=mysqli_query($conn,$query);
          $temp=0;
          while($row=mysqli_fetch_assoc($res))
			     {
            if($row['id']=='$b')
               $temp=$row['likes'];
           }
           $temp=$temp+1;
           $query="update image set likes='$temp' where id='$b'";
           mysqli_query($conn,$query);
        }
    
        
       }
  ?>