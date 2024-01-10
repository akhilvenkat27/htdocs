<!doctype html>
<html>
<style>
 video.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
<video autoplay muted loop id="video" height="700px" width="700px" class="center">
  <source src="load.mp4" type="video/mp4" >
</video>
</body>
</html>
<?php
header( "refresh:5;URL=http://localhost/IB/iblogin.php" );
?>