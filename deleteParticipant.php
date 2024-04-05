<?php
include_once 'classes/db1.php';

if(isset($_GET['Roll_number']) ) {
    $rollNumber = $_GET['Roll_number'];
   
    
   
    $query = "DELETE FROM participent WHERE Roll_number='$rollNumber' ";
    
    if(mysqli_query($conn, $query)) {
        header("Location: Stu_details.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

?>
