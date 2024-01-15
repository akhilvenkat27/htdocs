<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

            //creating a queue request for user

            $conn = new mysqli("localhost","swift" ,"P4oRnJLJl0TXlV7c" ,"swift");
            $FN = "FN".$_POST['FN'];
            $AY = $_POST['academic_year'];
            $Y = $_POST['year'];
            $sem = $_POST['semester'];
            $code = $_POST['code'];
            $course = $_POST['course'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $exam = $_POST['exam'];
            $mar = $_POST['max_marks'];
            $query = "INSERT INTO `queue`( `FN`, `Academic_Year`, `Year`, `Semester`, `Code`, `Course`, `Date`, `Time`, `Exam`, `Max_Marks`)  
            VALUES ('$FN','$AY','$Y','$sem','$code','$course','$date','$time','$exam','$mar')";
            $res=mysqli_query($conn,$query);

            // Creating table for selected questions under fn

            $query = "CREATE TABLE $FN (
                session VARCHAR(255) DEFAULT CURRENT_TIMESTAMP,
                FN VARCHAR(255),
                subject VARCHAR(255),
                U_ID INT DEFAULT 0,
                Q_ID INT DEFAULT 0,
                Question VARCHAR(2555),
                Marks VARCHAR(255),
                CO VARCHAR(255),
                BL VARCHAR(255),
                PI VARCHAR(255),
                Tags VARCHAR(255),
                upper INT DEFAULT 0
            );
            ";
            $res=mysqli_query($conn,$query);
            header("Location:generate.php");  
  }
        
?>