<?php 

?>
<!doctype html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
  <script src="https://unpkg.com/scrollreveal@4"></script>
<title>AirUp-Home</title>
<style>
        
        .head{
            padding:5px;
            display:flex;
            flex-direction: row;
            flex-wrap:wrap;
        }
        .box{
            margin:0.2%;
            padding:5px;
            background-color: white;
        }
        .box1{
            flex:1;
            padding:12px;
            border-radius:35px 0px 35px 0px;
        }
        .box2{
            flex:6;
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
            background-color: #b3f1c0;
            margin-left: 45%;
            height:50px;
            width:100px;
            margin-top:1.3%;
        }
        #ft{
            font-family: 'EB Garamond';
            margin:0.5%;
            margin-left:1%;
            font-size: 50px;
            color:#6D2FD1;
        }
        #ft1{
            font-family: 'EB Garamond';
            margin:0.5%;
            font-size: 50px;
            color:black;
        }
        
        .navi{
            margin-top:-3.5%;
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .na{
            flex:1;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
        }
        .na:hover{
            background-color:#F2F7A1;
            color:black;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(255, 255, 255, 0.582);
        }
        #naa{
            text-decoration:none;
            color:black;
            font-size:18px;
            font-family: 'Space Grotesk', sans-serif;
        }
        .na:hover #naa{
            color:black;
        }
        .na1{
          background-color:#F2F7A1;
            color:black;
            margin:3%;
            padding:5px;
            text-align: center;
            cursor:pointer;
            width:400px;
            height:30px;
            padding-top:20px;
            border-radius:35px 0px 35px 0px;
            box-shadow:1px 3px 18px rgba(0,0,0,0.3);
        }
        .na1 #naa{
            color:black;
        }
        .fomain {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  background-color:#c2dcff;
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
}

.fo1{
  border-bottom-left-radius: 40px;
  flex: 33.33%;

  background-color: whitesmoke;
 
}
.fo2{
  border-top-right-radius: 40px;
    
  flex: 33.33%;
  background-color: whitesmoke;

}
.fo3{
  border-bottom-left-radius: 40px;
    border-top-right-radius: 40px;
  flex: 33.33%;

}
.bo{
  margin-left: 8%;
  margin-top: 5%;

   }
.bo1{
    flex:1;
    width:40%;

    border-radius:35px 0px 35px 0px;
    }
    table {
  border-spacing: 10px;
}
.in
{
width: 50%;
height: 13%;
border: none;
background-color: #e3edf9;
border-top-right-radius: 15px;
border-bottom-left-radius: 15px;
}
</style>
</head>


<body>
<div class="head">
    <div class="box box1">&nbsp;&nbsp;<span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
    <div class="box box2">
      <div class="temp">
        <div class="navi">
            <div class="na na1"><a id="naa" href="">Home</a></div>
            <div class="na na5"><a id="naa" href="">Hacakthons</a></div>
            <div class="na na3"><a id="naa" href="">Contact</a></div>
            <div class="na na4"><a id="naa" href="#con">About</a></div>
          </div>
        </div>
    </div>
</div>

<div>
    <?php
    $conn = mysqli_connect("localhost","airup","12345678","airup");
    $query="SELECT * from profile where eid='E10001'";
    $res=mysqli_query($conn,$query);
       while($row=mysqli_fetch_assoc($res))
			  {?>

        <div class="ids">
        <table>
            <tr>
                <td><?php echo "eid: ".$eid;?> </td>
                <td><?php echo "sid: ".$sid;?></td>
                <td><?php echo "Original Ask: ",$oaa;?></td>
                <td><?php echo "Equity @".$oae."%"?></td>
            </tr>
        </table>
        <table>
            <tr>
                <th>I-ID</th>
                <th>Equity Amount</th>
                <th>Equity</th>
                <th>Debt Amount</th>
                <th>Interest</th>
                <th>Acceptance</th>
            </tr>
            <tr>
                <td><?php echo $iid;?></td>
                <td><?php echo $eamt;?></td>
                <td><?php echo $equity;?></td>
                <td><?php echo $damt;?></td>
                <td><?php echo $debt;?></td>
                <td><button>Accept</button></td>
            </tr> 
        </table>
        </div>
        <?php
        }
        ?>

    ?>
</div>

</body>
<footer>
  <div class="fomain" id="con">
    <div class="fo1">
      <div class="bo bo1"><span id="ft">АЇЯ</span><span id="ft1">UP</span></div>
      <b><pre>
     An Startup based investment comapany,
     which acts as an medium between Investor
     and Entreprenuer
      </pre></b>

      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us:</h3>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="https://cdn-icons-png.flaticon.com/128/3536/3536505.png" height="40px" width="40px"> &nbsp;&nbsp;&nbsp;<img src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" height="40px" width="40px">&nbsp;&nbsp;&nbsp; <img height="40px" width="40px" src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png">
    </div>
    <div class="fo2">
      <br>
    <h3>&nbsp;&nbsp;Useful Links</h3>
    <table>
      <tr>
        <td>Features</td>
        <td>About</td>
      <tr>
        <tr>
          <td>Development Support</td>
          <td>Innovation support</td>
        <tr>
          <tr>
            <td>Apply Provitional patent</td>
            <td>Apply AirUp patent</td>
          <tr>
            <tr>
              <td>Report Issue</td>
              <td>Feedback</td>
            <tr>
    </table>
    </div>
    <div class="fo3">
      <br>
      
    <h3 style="text-align:center;"><u>Subscribe Us</u></h3>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="in" placeholder="  Email Address"type="text" height="40px" width="40px">
      <img src="https://cdn-icons-png.flaticon.com/512/9716/9716941.png" height="40px" width="40px">
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src ="infi.png" height="90px" width="90px" >
     <p style="text-align: center ; font-size: small;">Copyright &copy; 2023, All Right Reserved <a href="#">Team INFINITI</a></p>
  </div>
  </div>
</footer>
</html>
