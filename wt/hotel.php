<?php
session_start();
$a=$_SESSION['user_name'];
?>
<!Doctype html>
<html>
<head>
<style>
   table, th, td {
  
  border: 1px solid Black;
  border-collapse: collapse;
}
h1
{text-align:center;
color:white;}
body
{
background-image:url('https://img5.goodfon.com/wallpaper/nbig/2/3f/makarony-bliudo-lapsha-temnyi-fon-eda-pomidory-skovoroda.jpg');
 height: 100%;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}
#one
{
text-align:center;
color:white;
}
.log
{
        position: relative;
        left:950px;
        background: rgb(143,37,37);
background: linear-gradient(82deg, rgba(143,37,37,0.7511379551820728) 0%, rgba(142,100,0,0.6306897759103641) 73%);
        border-radius: 30px;
        height: 40px;
        width: 28%;
        border:1px solid black;
        background-color: white;      
}
.up
{
background-color: #AED6F1;
border:1px solid white;
background: rgb(16,207,209);
background: rgb(12,123,142);
background: radial-gradient(circle, rgba(12,123,142,1) 0%, rgba(0,0,0,0.9220063025210083) 48%);
}
</style>
<title>Anits Hotel-AV</title>
</head>
<body>
<div class="up">
<h1>Welcome to 𝕴𝖓𝖋𝖎𝖓𝖎𝖙𝖎 𝖐𝖎𝖙𝖈𝖍𝖊𝖓 </h1>
<p id="one">👨‍🍳 An Av Initiative</p>
</div>
<div class="log"><p style="color:white; font:lucida;">&nbsp;&nbsp;&nbsp;Welcome,<?php echo $a;?> <a href="http://localhost/wt/login.php">Logout</a></p></div>
<table bgcolor="white">
<tr>
<th>Item :</th>
<th>Price:</th>
<th>Item Name: </th>
<th> Selection</th>
</tr>
<tr>
<td class="main"><img src="https://ranveerbrar.com/wp-content/uploads/2021/02/Masala-dosa-scaled.jpg" width="150" height="150"></img></td>
<td>80/-</td>
<td>Masala Dosa</td>
<td>
<Button onclick="cal(80,1,1)"> (+) Add </Button>
<Button onclick="cal(-80,-1,1)"> (-) Remove </Button>
</td>
</tr>
<tr>
<td class="main"><img src="https://dosaexpressbd.com/wp-content/uploads/2022/11/Onion-Masala-Dosa.jpg" width="150" height="150"></img></td>
<td>50/-</td>
<td>Onion Dosa</td>
<td>
<Button onclick="cal(50,1,2)"> (+) Add </Button>
<Button onclick="cal(-50,-1,2)"> (-) Remove </Button>
</td>
</tr>
<tr>
<td class="main"><img src="https://media.istockphoto.com/id/638506124/photo/idli-with-coconut-chutney-and-sambhar.jpg?s=612x612&w=0&k=20&c=ze1ngBM0LY4w9aqWx_tGe2vTAr4uf36elveTDZ83fgw=" width="150" height="150"></img></td>
<td>40/-</td>
<td>Idli</td>
<td>
<Button onclick="cal(40,1,3)"> (+) Add </Button>
<Button onclick="cal(-40,-1,3)"> (-) Remove </Button>
</td>
</tr>
<tr>
<td class="main"><img src="https://t4.ftcdn.net/jpg/01/15/65/19/360_F_115651965_lYL3HcRdknpnIDDtKhWzvsRamVDCCKun.jpg" width="150" height="150"></img></td>
<td>60/-</td>
<td>Puri</td>
<td>
<Button onclick="cal(60,1,4)"> (+) Add </Button>
<Button onclick="cal(-60,-1,4)"> (-) Remove </Button>
</td>
</tr>
</table>
<br> <br>
<table bgcolor="white">
<tr>
<th> Status</th>
<th> Total Amount </th>
</tr>
<tr>
<td><p id="demo"> </p></td>
<td><p id="cost"> </tr></td>
</tr>
</table>
<button onclick="bill()">Generate Bill </button>
<br><br><br>
<div id="av">
<table bgcolor="white">
<tr>
<th>Item Name:</th>
<th>Item Quantity</th>
<th>Item Cost:</th>
<th>Total: </th>
</tr>
<tr>
<td><p id="first1"></p></td>
<td><p id="first2"></p></td>
<td><p id="first3"></p></td>
<td><p id="first4"></p></td>
</tr>
<tr>
<td><p id="sec1"></p></td>
<td><p id="sec2"></p></td>
<td><p id="sec3"></p></td>
<td><p id="sec4"></p></td>
</tr>
<tr>
<td><p id="thr1"></p></td>
<td><p id="thr2"></p></td>
<td><p id="thr3"></p></td>
<td><p id="thr4"></p></td>
</tr>
<tr>
<td><p id="fou1"></p></td>
<td><p id="fou2"></p></td>
<td><p id="fou3"></p></td>
<td><p id="fou4"></p></td>
</tr>
<tr>
<td><p>TOTAL</p></td>
<td><p>--</p></td>
<td><p>--</p></td>
<td><p id="final"></p></td>
</tr>
</table>
</div>
<button onclick="printDiv()">Print the Receipt </button>
<script>
var sum=0;
var c1=c2=c3=c4=0;
function cal(amt,cnt,typ)
{
if((sum+amt>=0))
{
if(typ==1)
c1+=cnt;
if(typ==2)
c2+=cnt;
if(typ==3)
c3+=cnt;
if(typ==4)
c4+=cnt;
sum+=amt;
document.getElementById("demo").innerHTML = "Operation Sucessfull";
document.getElementById("cost").innerHTML = sum;
}
else
document.getElementById("demo").innerHTML = "Operation  not Sucessfull";
}
function bill()
{
document.getElementById("first1").innerHTML = "Masala Dosa";
document.getElementById("first2").innerHTML = c1;
document.getElementById("first3").innerHTML = 80;
document.getElementById("first4").innerHTML = c1*80;

document.getElementById("sec1").innerHTML = "Onion Dosa";
document.getElementById("sec2").innerHTML = c2;
document.getElementById("sec3").innerHTML = 50;
document.getElementById("sec4").innerHTML = c2*50;

document.getElementById("thr1").innerHTML = "Idli";
document.getElementById("thr2").innerHTML = c3;
document.getElementById("thr3").innerHTML = 40;
document.getElementById("thr4").innerHTML = c3*40;

document.getElementById("fou1").innerHTML = "Puri";
document.getElementById("fou2").innerHTML = c4;
document.getElementById("fou3").innerHTML = 60;
document.getElementById("fou4").innerHTML = c4*60;

document.getElementById("final").innerHTML = sum;
}

        function printDiv() {
            var divContents = document.getElementById("av").innerHTML;
            var a = window.open('', '', 'height=1000, width=1200');
            a.document.write('<html>');
            a.document.write('<body > <h1>Hotel Receipt:<br>');
            a.document.write(divContents);
            a.document.write('<body > <h1>Pleased to Serve you-Team INTINITI<br>');
            a.document.write('</body></html>');
            a.document.close();
            a.print();
                    }
</script>
</body>
<footer>
<P STYLE="TEXT-ALIGN:CENTER;  color:white;">© TEAM INFINITI,2023. All rights reserved.<P>
</footer>
</html>