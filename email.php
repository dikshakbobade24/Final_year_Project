<!DOCTYPE html>
<html>
<head>
    <title>Email Reminder</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        h1 {
        font-size: 24px;
        color: #333;
        text-align: center;
        margin-top: 20px;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
        color: #666;
    }

    form {
        background-color: #fff;
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"], textarea {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    /* Added CSS styling */
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .message {
        margin-top: 20px;
        text-align: center;
    }

    .message p {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .success {
        color: green;
    }

    .error {
        color: red;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Email Reminder</h1>
        <form method="post" action="">
            <fieldset>
                <legend>Select an Event:</legend>
                <?php
                 // Include PHPMailer library
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'C:/xampp/htdocs/CEHP/PHPMailer-master/src/PHPMailer.php';
    require 'C:/xampp/htdocs/CEHP/PHPMailer-master/src/Exception.php';
    require 'C:/xampp/htdocs/CEHP/PHPMailer-master/src/SMTP.php';
                // Database configuration
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ceh";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL query to retrieve all event names from the "events" table
                $sql = "SELECT event_title FROM events";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Loop through all event names and create radio buttons
                    while($row = $result->fetch_assoc()) {
                        $event_title = $row["event_title"];
                        echo '<label><input type="radio" name="event_title" value="' . $event_title . '">' . $event_title . '</label>';
                    }
                } else {
                    echo "No events found in the database.";
                }

                

                if ($result->num_rows > 0) {
                    // Create radio buttons for all events
                    echo '<form method="post" action="">';
                    while($row = $result->fetch_assoc()) {
                    $event_title= $row["event_title"];
                    echo ' =<input type="radio" id="'.$event_title.'" name="event_title" value="'.$event_title.'">';
                    echo '<label for="'.$event_title.'">'.$event_title.'</label><br>';
                    }
                    echo '<br><br>';
                    // Add email input fields and submit button
                    echo '<label for="subject">Subject:</label>';
                    echo '<input type="text" id="subject" name="subject"><br>';
                    
                    echo '<label for="body">Body:</label>';
                    echo '<textarea id="body" name="body"></textarea><br>';
                    
                    echo '<label for="alt-body">Alternate Body:</label>';
                    echo '<textarea id="alt-body" name="alt-body"></textarea><br>';
                    
                    echo '<input type="submit" value="Send Email">';
                    echo '</form>';
                    } else {
                        echo "No events found in the database.";
                        }
                        
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $subject = $_POST['subject'];
                        $body = $_POST['body'];
                        $altBody = $_POST['alt-body'];
                        $event_title = $_POST['event_title'];
                        // Database configuration
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname ="ceh";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    // SQL query to retrieve all email addresses for the selected event
                    $sql = "SELECT email FROM participent WHERE event_id = (SELECT event_id FROM events WHERE event_title = '$event_title');
                    ";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Loop through all email addresses and send email
                        while($row = $result->fetch_assoc()) {
                            $email = $row["email"];
                    
                            // PHPMailer configuration
                            $mail = new PHPMailer(true);
                            $mail->SMTPDebug = 0;
                            $mail->isSMTP();
                    
                            // SMTP configuration
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'pisepiyush39@gmail.com';
                            $mail->Password = 'elmmedjekmbpuwgy';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port = 587;
                    
                            // Email content
                            $mail->setFrom('pisepiyush39@gmail.com', 'PIYUSH PISE');
                            $mail->addAddress($email);
                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            $mail->AltBody = $altBody;
                    
                            // Send email
                            try {
                                $mail->send();
                echo '<div class="message success">Email reminder sent to ' . $email . '.</div>';
                            } catch (Exception $e) {
                                echo "Email could not be sent to " . $email . ". Error: " . $mail->ErrorInfo . "<br>";
                            }
                        }
                    } else {
                        echo "No participants found for the selected event.";
                    }
                    }
                    