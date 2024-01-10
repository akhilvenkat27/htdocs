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
      <style>
            *
            {
                font-family: Google Sans Display,Arial,Helvetica,sans-serif;
                /* font-size:10px; */
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


        <!------------------ Top Navigation Bar Starts-------------------------------------->

        <div class="d-flex flex-row header  sticky-top justify-content-between align-items-center">
            <div class="p-2">
            <img src="anits-logo.png" height=70px width=120px>
            </div>
            <div class="p-2">
            <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link color" href="swift-home.php"><span class="color">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="library.php"><span class="color">Library</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color active" href="generate.php"><span class="color">Generated Paper</span></a>
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


         <!-----------------Paper Generation Form ---------------------------------------->
        <div class="d-flex flex-row mb-3 justify-content-between text-center flex-wrap" style="margin-top:5%">
        <div class="p-2">
            <div class="card border-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Guidelines</div>
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
            </div>
            </div>
        </div>
        <div class="p-2">

        <div class="card " style="width: 35rem;">
        <div class="card-header">
            <strong> New Paper Generation Request </strong>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">

            <form >
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Faculty Number</label>
                <div class="input-group">
                <div class="input-group-text">FN - </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Faculty Number">
                </div>
            </div>
            <br>

            <div class="d-flex justify-content-between">
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="academic_year" placeholder="Academic Year">
                </div>
            </div>
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="year" placeholder="Year">
                </div>
            </div>
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control " aria-label="Disabled input example" disabled id="exampleFormControlInput1" placeholder="Program : B.Tech">
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-between">
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="academic_year" placeholder="Semester">
                </div>
            </div>
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="year" placeholder="Code">
                </div>
            </div>
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control "  id="exampleFormControlInput1" placeholder="Course">
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-between">
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="academic_year" placeholder="Date">
                </div>
            </div>
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="year" placeholder="Time">
                </div>
            </div>
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control "  id="exampleFormControlInput1" placeholder="Exam">
                </div>
            </div>
            </div>

            <div class="d-flex justify-content-between">
            <div class="p-2">
                <div class="mb-3">
                <input type="email" class="form-control" id="academic_year" placeholder="Max Marks">
                </div>
            </div>

            <div class="p-2">
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create Paper</button>
            </div>
            </div>
            </div>
            </form>
    </div>
            </li>
        </ul>

        </div>
        <div class="p-2">
            <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Instructions</div>
            <div class="card-body text-success">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
            </div>
            </div>
        </div>
        </div>

         <!-----------------Paper Generation Form Ends ---------------------------------------->
       

        <div id="printableContent">
        <!----------------------------------- Paper Layout starts ----------------------------->

        <!------- Exam Header starts -------->
        <div class="d-flex text-center " style="">
        <div class="p-2 flex-shrink-1 border border-secondary"><img src="anits-logo.png" height=80px width=125px style="margin-top:32%"></div>
        <div class="p-2 w-100 border border-secondary" style="">
        <h4><strong>Anil Neerukonda Institute Of Technology & Sciences (Autonomous) </strong></h4>
        <p>(Permant Affiliation by Andhra University & Approved by AICTE <br> Accredited by NBA (ECE,EEE,CSE,IT,Mech,Civil & Chemical) & NAAC) <br> 
        <span style="font-size:12px">Sangivalasa-531 162, Bheemunipatnam Mandal, Visakhapatnam District <br>
        Phone: 08933-225-83/84/87 &nbsp;&nbsp;&nbsp; Fax:226395 <br>
        Website : www.anits.edu.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: Principal@anits.edu.in</span>
        </p>
        </div>
        </div>
        <!---- Exam header ends ----------->

        <!-----------------Exam Details starts------------------------->
        <div class="d-flex mb-3">
        <div class="p-2">
            <p>
                Academic Year : 2023-2024 <br>
                Year : 4/4 CSE <br>
                Course : <strong> Data Analytics </strong> <br>
                Date : 25/11/2023 <br>
                <strong> MID : II </strong>
            </p>
        </div>
        <div class="ms-auto p-2 text-end">
            <p>
                Program : B.Tech <br>
                Semester : 1 <br>
                Code : CSE415 <br>
                Time : <strong> 09:30 AM - 11:30 AM </strong> <br>
                Max Marks : <strong> 40m </strong>
            </p>
        </div>
        </div>


        <div class="card text-center">
        <div class="card-body">
        <strong>NOTE : </strong> Answer ONE Question from each Unit    <br>
                                All Questions Carry Equal Marks   <br>
                            All parts of the questions must be answered at one place only.
        </div>
        </div>
        <!-----------Exam Details Section  Ends--------------->


<br>
        <div class="d-flex  text-center  ">
        <div class="p-2  border border-secondary text-center"><b>S.No</b></div>
        <div class="p-2 flex-grow-1  border border-secondary "><b>Questions</b></div>
        <div class="p-2  border border-secondary"><b>Marks</b></div>
        <div class="p-2  border border-secondary ">

            <div class="d-flex flex-column font-weight-bold" style="margin:-2%">
            <div class="p-2 border border-secondary text-center" style="margin:-4%">For Faculty Use</div>
                <div class="p-2 ">
                <div class="d-flex flex-row ">
                <div class="p-2 ">CO</div>
                <div class="p-2 ">BL</div>
                <div class="p-2">PI</div>
                </div>
            </div>
            </div>
        </div>
        </div>
<br>

        <!------------------------------------Each Unit-------------------------------------------------->


        <!----------------------unit no starts--------------------------->
        <div class="d-flex justify-content-center font-weight-bold">
        <div class="p-2">UNIT - X</div>
        </div>
        <!-----------------------ends-------------------------------------->

        <!----------------------Upper Part starts------------------------>

        <div class="d-flex  text-center ">
        <div class="p-2  border border-secondary text-center">S.No</div>
        <div class="p-2 flex-grow-1  border border-secondary">Questions</div>
        <div class="p-2  border border-secondary font-weight-bold">&nbsp; 10M &nbsp;</div>
        <div class="p-2  border border-secondary font-weight-bold ">&nbsp;CO3</div>
        <div class="p-2  border border-secondary font-weight-bold">L2</div>
        <div class="p-2  border border-secondary font-weight-bold">1.4.1</div>
        </div>

        <!-------------------Upper Part Ends--------------------------->

        <!--check if lower existed or not -->

        <div class="d-flex justify-content-center border border-secondary">
        <div class="p-2 font-weight-bold">OR</div>
        </div>

        <!-------------------Lower Part starts------------------------>

        <div class="d-flex  text-center ">
        <div class="p-2  border border-secondary text-center">S.No</div>
        <div class="p-2 flex-grow-1  border border-secondary">Questions</div>
        <div class="p-2  border border-secondary font-weight-bold">&nbsp; 10M &nbsp;</div>
        <div class="p-2  border border-secondary font-weight-bold">&nbsp;CO3</div>
        <div class="p-2  border border-secondary font-weight-bold">L2</div>
        <div class="p-2  border border-secondary font-weight-bold">1.4.1</div>
        </div>

        <!-------------------Lower Part Ends------------------------->

        <!-----------------------------------------------------Each unit ends--------------------------------->
    </div>
<br>
        <div class="d-flex flex-row mb-3 justify-content-between">
        <div class="p-2">
                <div class="card text-bg-light mb-3 border-danger " style="max-width: 18rem;">
                <div class="card-header">Queue</div>
                    <div class="card-body">
                        <h5 class="card-title">Delete Queue</h5>
                        <p class="card-text">Deletes the present queue request ,deletes the present paper above and allows user to create new paper. Before deleting queue request save the paper in DataBase for further purposes. </p>
                    </div>
                    <!-- Button to trigger the modal -->
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#delete" style="margin:15px">
                    Delete Queue
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Instructions</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure want to delete the queue?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Delete</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                </div>

        </div>
        <div class="p-2">
                <div class="card text-bg-light mb-3 border-info" style="max-width: 18rem;">
                <div class="card-header">Save</div>
                <div class="card-body">
                    <h5 class="card-title">Save to DataBase</h5>
                    <p class="card-text">Save the paper for accessing the same paper in later purposes even after deleting the queue. Saved papers are listed on the home page. </p>
                </div>
                                    <!-- Button to trigger the modal -->
                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#save" style="margin:15px">
                                    Save
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="save" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Instructions</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure want to save the paper to the database?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                </div>
        </div>
        <div class="p-2">
                <div class="card text-bg-light mb-3 border-success" style="max-width: 18rem;">
                <div class="card-header">Production</div>
                <div class="card-body">
                    <h5 class="card-title">Print Paper</h5>
                    <p class="card-text">Print the paper here for saving the file locally & also used for production. Also please verify the questions for the smooth experience without hassale.</p>                  
                </div>
                <button type="button" class="btn btn-primary " onclick="printDiv('printableContent')" style="margin:15px">Print</button>
                </div>
        </div>
        </div>


        

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  function printDiv(divId) {
    var contentToPrint = document.getElementById(divId);
    var newWin = window.open('', '_blank');
    newWin.document.write('<html><head><title>Powered By Pi</title></head><body>');
    newWin.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">');
    newWin.document.write(contentToPrint.innerHTML);

    newWin.document.write('</head><body>');
    newWin.document.write('</body></html>');
    newWin.document.close();
    newWin.print();
  }
</script>
</body>
    <footer>
    </footer>
</html>