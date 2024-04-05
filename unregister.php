<?php
require_once 'classes/db1.php';

$event_id = $_POST['event_id'];
$Roll_number = $_POST['Roll_number'];

$sql = "DELETE FROM participent WHERE Roll_number='$Roll_number' and event_id='$event_id'";
$result = mysqli_query($conn, $sql);

$sql2="DELETE FROM registered WHERE Roll_number='$Roll_number'and event_id='$event_id'";
$result2=mysqli_query($conn, $sql2);


 
if ($result && $result2) {
    
    header('Location: RegisteredEvents.php?Roll_number=' . urlencode($Roll_number));
    echo "<script>alert('Unregistered Successfully');</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// mysqli_close($conn);
