<?php
// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'C:/xampp/htdocs/College-Event-Management-System-master/EventManagementSystems/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/College-Event-Management-System-master/EventManagementSystems/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/College-Event-Management-System-master/EventManagementSystems/PHPMailer-master/src/SMTP.php';

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CEH";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve all email addresses and participant names from the "participent" table
$sql = "SELECT name, email FROM participent";

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
   // SMTP configuration
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'pisepiyush39@gmail.com';
   $mail->Password = 'elmmedjekmbpuwgy';
   $mail->SMTPSecure = 'tls';
   $mail->Port = 587;


    // Set the email message
    $mail->setFrom('pisepiyush631@gmail.com', 'Piyush Pise');
    $mail->Subject = 'Certificate of Participation';
    $mail->Body = 'Dear participant,<br><br>Please find attached your certificate of participation in the event.<br><br>Best regards,<br>Your Name';
    $mail->AltBody = 'Dear participant,\n\nPlease find attached your certificate of participation in the event.\n\nBest regards,\nYour Name';
    
    // Set the path to the certificate file
    $certificate = './images/Certificate of participation-3.docx';


    // Loop through each row and add the email address and participant name to the recipients list
    while($row = $result->fetch_assoc()) {
        $email = $row["email"];
        $name = $row["name"];
        
        // Add the participant's name to the email message
        $body = str_replace('{name}', $name, $mail->Body);
        $altBody = str_replace('{name}', $name, $mail->AltBody);

        // Add the email address to the recipients list
        $mail->addAddress($email, $name);
        
        // Add the certificate file as an attachment
        $mail->addAttachment($certificate, 'Certificate of participation-3.docx');

        // Send the email
        if(!$mail->send()) {
            echo 'Email could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Certificate sent successfully to ' . $name . ' at ' . $email . '.';
        }

        // Clear the recipients list and attachments for the next iteration
        $mail->clearAddresses();
        $mail->clearAttachments();
    }
} else {
    echo "No participants found in the database.";
}

// Close the database connection
