<?php 
session_start();
if(isset($_POST['sub']))
{
  $_SESSION['user_name'] = $_POST['user_name'];
}
if(!isset($_SESSION['user_name']))
header( "location:login.php" );
?>
<!doctype html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">       
      <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
            *
            {
                font-family: Google Sans Display,Arial,Helvetica,sans-serif;
            }
            a
            {
                color:black;
            }
            .header{
                background-color: whitesmoke;
            }
            .color
            {
                color: black;
            }
            
        </style>
    </head>
    <body>
                <!-- Auto-open translucent toast container -->
                <div class="toast-container position-fixed bottom-0 end-0 p-3 ">
                <!-- Auto-open translucent toast element -->
                <div class="toast translucent-toast text-bg-primary " role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">
                        <?php       
                         date_default_timezone_set('Asia/Kolkata');              
                         $currentTimestamp = time();
                         $currentDateTime = date("Y-m-d H:i:s", $currentTimestamp);
                         echo "Session Details: " . $currentDateTime."\n";?>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">

                <?php
                    echo "Welcome, ".$_SESSION['user_name'];
                 ?>
                </div>
                </div>
                </div>



        <!------------------ Top Navigation Bar Starts-------------------------------------->
        <div class="d-flex flex-row header  sticky-top justify-content-between align-items-center">
            <div class="p-2">
            <img src="anits-logo.png" height=70px width=120px>
            </div>
            <div class="p-2">
            <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link color active" href="swift-home.php"><span class="color">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="library.php"><span class="color">Library</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="generate.php"><span class="color">Generated Paper</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><span class="color">Random Question Paper</span></a>
                    </li>
                </ul>
            </div>
            <div class="p-2">
            <span>&nbsp;<strong>Author:</strong>
            <?php 
            if(isset($_SESSION['user_name']))
            echo $_SESSION['user_name'];
            else{
            echo "<span style='color:red'>Login Failed</span>";
            }
            ?>
            <a href="logout.php"><button type="button"  class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Logout"><i class="bi bi-box-arrow-right " style="font-size:15px"></i></button></a>
        </span>
            </div>
        </div>
        <!-------------------Top Navigation Bar Ends------------------------------------->

        <!-------------------Previous crearted Papers starts------------------------------->
        <p style="margin:30px"> <strong> Previously Done Papers </strong></p>
        <?php 
        for($i=0 ;$i<3;$i++)
    
        echo '
        <!-- Single Paper  -->
        <div class="card border-primary mb-3 shadow bg-body-tertiary rounded" style="margin:30px">
        <div class="card-header">
        <div class="d-flex flex-row justify-content-between align-items-center">
        <div class="p-2">Year & Branch : XXXXX </div>
        <div class="p-2">Subject : XXXXX</div>
        <div class="p-2">Date : XX/XX/XXXX</div>
        </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
        </div>
        </div>
        </div>'

        ?>
        <!--Previously Created Papers Ends -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      var toastElement = new bootstrap.Toast(document.querySelector('.translucent-toast'));
      setTimeout(function () {
        toastElement.show();
      }, 1000); 
    });
  </script>
  <script>
  // Initialize tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });
</script>

</body>
    <footer>
    </footer>
</html>