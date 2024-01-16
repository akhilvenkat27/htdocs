<?php 
session_start();
if(isset($_POST['sub']))
{
  $_SESSION['user_name'] = $_POST['user_name'];
}
if(!isset($_SESSION['user_name']))
header( "location:index.php" );
?>
<!doctype html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
        <style>
            *
            {
                font-family: 'Google Sans Display', Arial, Helvetica, sans-serif;
            }
            a
            {
                
            }
            .header{
                background-color: whitesmoke;
                height: 20%;
            }
            .color
            {
                color: black;
            }
            @media (max-width: 992px) {
            .d-lg-flex {
                display: none !important;
            }
            .d-lg-none {
                order: 3;
            }
            .text-end {
                order: 2;
            }
            /* .hamburger-icon {
                color: white;
            } */

        }
        @media (min-width: 993px) {
            .d-lg-none {
                display: none !important;
            }
        }
            @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
            .circle-btn {
      width: 10px;
      height: 20px;
      border-radius: 50%;
      margin-left: 40%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }
        </style>
    </head>
    <body>
  <!------------------ Top Navigation Bar Starts-------------------------------------->

        <!-- Off-canvas menu -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="swift-home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="library.php">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="generate.php">Generate Paper</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Random Question Paper</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Top Navigation Bar -->
        <div class="d-flex flex-row header sticky-top justify-content-between align-items-center">
                <div class="p-2">
                    <img src="anits-logo.png" height="70px" width="120px">
                </div>

                <!-- Navigation Links - Shown for Larger Screens -->
                <div class="d-none d-lg-flex flex-grow-1 justify-content-center">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="swift-home.php"><span class="color">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color active" href="library.php"><span class="color">Library</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="generate.php"><span class="color">Generate Paper</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="color">Random Question Paper</span></a>
                        </li>
                    </ul>
                </div>

        <!-- Hamburger Icon for Small Screens -->
        <div class="p-2 d-lg-none" style="color:white;">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample" >
                <i class="bi bi-list" style="font-size: 1rem;"></i>
            </button>
        </div>

                <!-- User Info and Logout - Shown on the Right -->
                <div class="p-2 text-end">
                <?php
                                  $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"swift");
                                  $user = $_SESSION['user_name'];
                                  $query = "select * from profiles where faculty_name='$user'";
                                  $res=mysqli_query($conn,$query);
                                  $fn = 0;
                                  while($row=mysqli_fetch_assoc($res))
                                  {
                                      $fn =$row['faculty_no'];
                                  }
                      ?>     
                    <button type="button" class="btn btn-light circle-btn" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-html="true" title="Profile" data-bs-content="
                    <?php 
                    echo "<strong>Faculty Name:</strong> ".$_SESSION['user_name']."<br>"; 
                    echo "<strong>Faculty No: </strong>".$fn."<br>";
                    echo "Designed By: ";
                    echo "<a href='https://createwithpi.netlify.app/' style='text-decoration: none; color:black '><span style='font-size:36px'><strong>Pi</strong><span style='color:#CE1212'>.</span ></span></a>";
                    ?>">
                   <i class="bi bi-person-circle"></i></button> 
                   <strong> Author:</strong>
                        <?php
                        if (isset($_SESSION['user_name'])) {
                            echo $_SESSION['user_name'];
                        } else {
                            echo "<span style='color:red'>Login Failed</span>";
                        }
                        ?>
                        <a href="logout.php">
                            <button type="button" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Logout">
                                <i class="bi bi-box-arrow-right" style="font-size:15px"></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
            <!-- End of Top Navigation Bar -->

            <!-- Offcanvas for Small Screens -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Navigation Links for Small Screens -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="swift-home.php"><span class="color">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color active" href="library.php"><span class="color">Library</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="generate.php"><span class="color">Generate Paper</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="color">Random Question Paper</span></a>
                        </li>
                    </ul>
                    <!-- End of Navigation Links for Small Screens -->
                </div>
            </div>
            <!-- End of Offcanvas for Small Screens -->

        <!-------------------Top Navigation Bar Ends------------------------------------->


        <!----------------------------------------Subject Library section starts----------------------------------------------------------------->

        <!-------------- Data Analytics  ----------------------------------------------------------->
        <div class="d-flex flex-row mb-3 align-content-around flex-wrap" style="margin:30px">

               
        <div class="p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/da.jpg" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <h5 class="card-title">Data Analytics</h5>
                            <p class="card-text">Introduction to Data, Inferential Statistics, Data Visualization using 2D & 3D plots, Distribution and Analysis, Analytics Models, Estimation and Hypothesis testing  </p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subject1">
                            Explore DA Library
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="subject1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Analytics</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">

                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-unit1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Introduction to Data & Inferential Statistics</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-unit2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Data Visualization using 2D and 3D plots</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Distributions and Analysis</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit4" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Analytical Models</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit5" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Estimation and Hypothesis Testing</button>
                                            </div>
                                            
                                        </nav>

                                        <?php
                                            $gen_count = 0;
                                            $ai_count = 0;
                                            $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"library");
                                            $query = "select * FROM dataanalytics ";
                                            $res=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                if($row['AI']==0){
                                                $gen_count++;}
                                                else{
                                                    $ai_count++;
                                                }
                            
                                            }
                                            echo '<span class="badge text-bg-success" style="margin:10px">'."Institutional: ".$gen_count.'</span>';
                                            echo '<span class="badge  text-bg-danger" style="margin:10px">'."AI Gen: ".$ai_count.'</span>';                                          
                                            echo '<span class="badge text-bg-primary" style="margin:10px"> ↑ - Question will be added to upper part of Unit</span>';
                                            echo '<span class="badge text-bg-primary" style="margin:10px"> ↓ - Question will be added to lower part of Unit</span>';
                                            $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"swift");
                                            $query = "select * FROM queue";
                                            $res=mysqli_query($conn,$query);
                                            $queue_req_cnt=0;
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                $queue_req_cnt++;
                                            }
                                            
                                            if($queue_req_cnt==0)
                                            {
                                                echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-triangle-fill"></i>&nbsp;Create a <a href="http://localhost/CQPL/generate.php" style="color:#856404;"><strong>Paper Generation Request</a></strong> to pick questions here for the paper creation.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>';
                                            }
                                            else
                                            {
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="bi bi-check-circle-fill"></i>&nbsp;After choosing question visit <a href="http://localhost/CQPL/generate.php" style="color:#155724;"> <strong>Paper Layout</a></strong> to review paper.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>';
                                            }
                                        ?>


                                        <div class="tab-content" id="nav-tabContent">

                                            <!------------------ UNIT - 1 -------------------------------------->
                                            <div class="tab-pane fade show active" id="nav-unit1" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                            
                                            <?php
                                            $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"library");
                                            $query = "select * FROM dataanalytics WHERE U_ID='1' ";
                                            $res=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                echo '
                                                <div class="card" style="margin:5px">
                                                    <div class="card-body">
                                                    ';
                                                        
                                                    echo  $row['Q_ID'].". ".$row['Question']."<br>"."<hr>";
                                                    echo '<div class="d-flex justify-content-between">
                                                    <div class="p-2">';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['Marks']." Marks ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['CO']." ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['BL']." ". '</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['PI']." ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['Tags']." ".'</span>'.'&nbsp;';
                                                    if($row['AI']==1){
                                                    echo '<span class="badge rounded-pill text-bg-primary">AI Powered</span>';
                                                    }

                                                    $Q_ID = $row['Q_ID'];
                                                    $question = $row['Question'];
                                                    $marks = $row['Marks'];
                                                    $CO = $row['CO'];
                                                    $BL = $row['BL'];
                                                    $PI = $row['PI'];
                                                    $tags = $row['Tags'];


                                                echo '
                                                    </div>
                                                    <div class="p-2"></div>
                                                    <div class="p-2">

                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">';
                                                    if($queue_req_cnt)
                                                    {
                                                    echo'
                                                    <form action="Question_heap.php" method="POST">
                                                    <input type="hidden" name="subject" value="dataanalytics">
                                                    <input type="hidden" name="U_ID" value="1">
                                                    <input type="hidden" name="Q_ID" value="'; echo $Q_ID; echo '">
                                                    <input type="hidden" name="question" value="'; echo $question; echo '">
                                                    <input type="hidden" name="marks" value="'; echo $marks; echo '">
                                                    <input type="hidden" name="CO" value="'; echo $CO; echo '">
                                                    <input type="hidden" name="BL" value="';echo $BL; echo'">
                                                    <input type="hidden" name="PI" value="'; echo $PI; echo'">
                                                    <input type="hidden" name="tags" value="'; echo $tags; echo'">
                                                    <input type="submit" class="btn btn-primary" name="upper" value="↑">
                                                    <input type="submit" class="btn btn-success" name="lower" value="↓">
                                                    </form>';
                                                    }
                                                    echo '
                                                    </div>

                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>';
                                                
                                            }
                                            ?>

                                            </div>

                                            <!--------------- UNIT - 2 -------------------------->
                                            <div class="tab-pane fade" id="nav-unit2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                            
           
                                            <?php
                                            $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"library");
                                            $query = "select * FROM dataanalytics WHERE U_ID='2' ";
                                            $res=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                echo '
                                                <div class="card" style="margin:5px">
                                                    <div class="card-body">
                                                    ';
                                                        
                                                    echo  $row['Q_ID'].". ".$row['Question']."<br>"."<hr>";
                                                    echo '<div class="d-flex justify-content-between">
                                                    <div class="p-2">';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['Marks']." Marks ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['CO']." ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['BL']." ". '</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['PI']." ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['Tags']." ".'</span>'.'&nbsp;';
                                                    if($row['AI']==1){
                                                    echo '<span class="badge rounded-pill text-bg-primary">AI Powered</span>';
                                                    }

                                                    $Q_ID = $row['Q_ID'];
                                                    $question = $row['Question'];
                                                    $marks = $row['Marks'];
                                                    $CO = $row['CO'];
                                                    $BL = $row['BL'];
                                                    $PI = $row['PI'];
                                                    $tags = $row['Tags'];


                                                echo '
                                                    </div>
                                                    <div class="p-2"></div>
                                                    <div class="p-2">

                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">';
                                                    if($queue_req_cnt)
                                                    {
                                                    echo'
                                                    <form action="Question_heap.php" method="POST">
                                                    <input type="hidden" name="subject" value="dataanalytics">
                                                    <input type="hidden" name="U_ID" value="2">
                                                    <input type="hidden" name="Q_ID" value="'; echo $Q_ID; echo '">
                                                    <input type="hidden" name="question" value="'; echo $question; echo '">
                                                    <input type="hidden" name="marks" value="'; echo $marks; echo '">
                                                    <input type="hidden" name="CO" value="'; echo $CO; echo '">
                                                    <input type="hidden" name="BL" value="';echo $BL; echo'">
                                                    <input type="hidden" name="PI" value="'; echo $PI; echo'">
                                                    <input type="hidden" name="tags" value="'; echo $tags; echo'">
                                                    <input type="submit" class="btn btn-primary" name="upper" value="↑">
                                                    <input type="submit" class="btn btn-success" name="lower" value="↓">
                                                    </form>';
                                                    }
                                                    echo '
                                                    </div>

                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>';
                                                
                                            }
                                            ?>

                                            </div>
                                            <!----------------Unit -3------>
                                            <div class="tab-pane fade" id="nav-unit3" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            
                                            <?php
                                            $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"library");
                                            $query = "select * FROM dataanalytics WHERE U_ID='3' ";
                                            $res=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                echo '
                                                <div class="card" style="margin:5px">
                                                    <div class="card-body">
                                                    ';
                                                        
                                                    echo  $row['Q_ID'].". ".$row['Question']."<br>"."<hr>";
                                                    echo '<div class="d-flex justify-content-between">
                                                    <div class="p-2">';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['Marks']." Marks ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['CO']." ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['BL']." ". '</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['PI']." ".'</span>'.'&nbsp;';
                                                    echo '<span class="badge rounded-pill text-bg-light fw-light">'.$row['Tags']." ".'</span>'.'&nbsp;';
                                                    if($row['AI']==1){
                                                    echo '<span class="badge rounded-pill text-bg-primary">AI Powered</span>';
                                                    }

                                                    $Q_ID = $row['Q_ID'];
                                                    $question = $row['Question'];
                                                    $marks = $row['Marks'];
                                                    $CO = $row['CO'];
                                                    $BL = $row['BL'];
                                                    $PI = $row['PI'];
                                                    $tags = $row['Tags'];


                                                echo '
                                                    </div>
                                                    <div class="p-2"></div>
                                                    <div class="p-2">

                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">';
                                                    if($queue_req_cnt)
                                                    {
                                                    echo'
                                                    <form action="Question_heap.php" method="POST">
                                                    <input type="hidden" name="subject" value="dataanalytics">
                                                    <input type="hidden" name="U_ID" value="3">
                                                    <input type="hidden" name="Q_ID" value="'; echo $Q_ID; echo '">
                                                    <input type="hidden" name="question" value="'; echo $question; echo '">
                                                    <input type="hidden" name="marks" value="'; echo $marks; echo '">
                                                    <input type="hidden" name="CO" value="'; echo $CO; echo '">
                                                    <input type="hidden" name="BL" value="';echo $BL; echo'">
                                                    <input type="hidden" name="PI" value="'; echo $PI; echo'">
                                                    <input type="hidden" name="tags" value="'; echo $tags; echo'">
                                                    <input type="submit" class="btn btn-primary" name="upper" value="↑">
                                                    <input type="submit" class="btn btn-success" name="lower" value="↓">
                                                    </form>';
                                                    }
                                                    echo '
                                                    </div>

                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>';
                                                
                                            }
                                            ?>
 
                                            </div>

                                            <!------------UNIT-4---------------->
                                            <div class="tab-pane fade" id="nav-unit4" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 4 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                            <!-------------UNTIT - 5------------------------->
                                            <div class="tab-pane fade" id="nav-unit5" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 5 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>










                
        <!-------------- Computer Vision  ----------------------------------------------------------->

                <div class="p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="https://static.vecteezy.com/system/resources/previews/000/457/264/original/computer-vision-illustration-concept-modern-flat-design-concept-of-web-page-design-for-website-and-mobile-website-vector-illustration.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subject2">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="subject2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Subject -2 </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">

                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="ml-nav-unit1-tab" data-bs-toggle="tab" data-bs-target="#ml-nav-unit1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unit-1</button>
                                                <button class="nav-link" id="ml-nav-unit2-tab" data-bs-toggle="tab" data-bs-target="#ml-nav-unit2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Unit-2</button>
                                                <button class="nav-link" id="ml-nav-unit3-tab" data-bs-toggle="tab" data-bs-target="#ml-nav-unit3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-3</button>
                                                <button class="nav-link" id="ml-nav-unit4-tab" data-bs-toggle="tab" data-bs-target="#ml-nav-unit4" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-4</button>
                                                <button class="nav-link" id="ml-nav-unit5-tab" data-bs-toggle="tab" data-bs-target="#ml-nav-unit5" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-5</button>
                                            </div>
                                        </nav>

                                        <div class="tab-content" id="nav-tabContent">

                                            <!------------------ UNIT - 1 -------------------------------------->
                                            <div class="tab-pane fade show active" id="ml-nav-unit1" role="tabpanel" aria-labelledby="ml-nav-unit1-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 1 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>

                                            </div>

                                            <!--------------- UNIT - 2 -------------------------->
                                            <div class="tab-pane fade" id="ml-nav-unit2" role="tabpanel" aria-labelledby="ml-nav-unit2-tab" tabindex="0">

           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 2 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>

                                            </div>
                                            <!----------------Unit -3------>
                                            <div class="tab-pane fade" id="ml-nav-unit3" role="tabpanel" aria-labelledby="ml-nav-unit3-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 3 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
 
                                            </div>

                                            <!------------UNIT-4---------------->
                                            <div class="tab-pane fade" id="ml-nav-unit4" role="tabpanel" aria-labelledby="ml-nav-unit4-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 4 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                            <!-------------UNTIT - 5------------------------->
                                            <div class="tab-pane fade" id="ml-nav-unit5" role="tabpanel" aria-labelledby="ml-nav-unit5-tab" tabindex="0">
                                           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 5 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



        <!-------------- SUBJECT - 3 Library  ----------------------------------------------------------->


                <div class="p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subject3">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="subject3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">Subject - 3</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">

                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-unit1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unit-1</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-unit2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Unit-2</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-3</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit4" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-4</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit5" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-5</button>
                                            </div>
                                        </nav>

                                        <div class="tab-content" id="nav-tabContent">

                                            <!------------------ UNIT - 1 -------------------------------------->
                                            <div class="tab-pane fade show active" id="nav-unit1" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // next

                                                    </div>
                                                </div>';
                                            }
                                            ?>

                                            </div>

                                            <!--------------- UNIT - 2 -------------------------->
                                            <div class="tab-pane fade" id="nav-unit2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 2 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>

                                            </div>
                                            <!----------------Unit -3------>
                                            <div class="tab-pane fade" id="nav-unit3" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 3 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
 
                                            </div>

                                            <!------------UNIT-4---------------->
                                            <div class="tab-pane fade" id="nav-unit4" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 4 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                            <!-------------UNTIT - 5------------------------->
                                            <div class="tab-pane fade" id="nav-unit5" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 5 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        <!-------------- SUBJECT - 4 Library  ----------------------------------------------------------->


                <div class="p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subject4">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="subject4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">Subject - 4</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">

                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-unit1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unit-1</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-unit2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Unit-2</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-3</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit4" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-4</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-unit5" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Unit-5</button>
                                            </div>
                                        </nav>

                                        <div class="tab-content" id="nav-tabContent">

                                            <!------------------ UNIT - 1 -------------------------------------->
                                            <div class="tab-pane fade show active" id="nav-unit1" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // next

                                                    </div>
                                                </div>';
                                            }
                                            ?>

                                            </div>

                                            <!--------------- UNIT - 2 -------------------------->
                                            <div class="tab-pane fade" id="nav-unit2" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 2 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>

                                            </div>
                                            <!----------------Unit -3------>
                                            <div class="tab-pane fade" id="nav-unit3" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 3 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
 
                                            </div>

                                            <!------------UNIT-4---------------->
                                            <div class="tab-pane fade" id="nav-unit4" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                            
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 4 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                            <!-------------UNTIT - 5------------------------->
                                            <div class="tab-pane fade" id="nav-unit5" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                           
                                            <?php
                                            for ($j = 0; $j < 5; $j++) {
                                                echo '
                                                <div class="card" style="margin:10px">
                                                    <div class="card-body">
                                                        
                                                    // Extract Unit - 5 questions from database

                                                    </div>
                                                </div>';
                                            }
                                            ?>
                                            
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



        </div>











       
                <!--------------------------Subject Library section ENDS--------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    // Initialize popover
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl);
    });
  </script>

</body>
    <footer>
    </footer>
</html>
