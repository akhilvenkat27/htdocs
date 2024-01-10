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
            @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        </style>
    </head>
    <body>
        <!------------------ Top Navigation Bar Starts-------------------------------------->
        <div class="d-flex flex-row header justify-content-between align-items-center">
            <div class="p-2">
                <img src="anits-logo.png" height=70px width=120px>
            </div>
            <div class="p-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="swift-home.php"><span class="color">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color active " href="library.php"><span class="color">Library</span></a>
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
        <!-------------------------------------Top Navigation Bar Ends------------------------------------------------------------------------>


        <!----------------------------------------Subject Library section starts----------------------------------------------------------------->

        <!-------------- SUBJECT -1 Library  ----------------------------------------------------------->
        <div class="d-flex flex-row mb-3 align-content-around flex-wrap" style="margin:30px">

               
        <div class="p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subject1">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="subject1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Subject - 1 </h1>
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
                                                        
                                                    // Extract Unit - 1 questions from database

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










                
        <!-------------- SUBJECT - 2 Library  ----------------------------------------------------------->

                <div class="p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
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


</body>
    <footer>
    </footer>
</html>
