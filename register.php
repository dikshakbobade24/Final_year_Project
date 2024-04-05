<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CEH</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery Cookie Plugin from a CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<body>
    <?php require 'utils/header.php'; ?>
    <script>
        function scrollToContent() {
            var element = document.getElementById("content");
            var rect = element.getBoundingClientRect();
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var finalScroll = rect.top + scrollTop - 100; // adjust the offset value as per your requirement
            window.scroll({
                top: finalScroll,
                behavior: 'smooth' // add smooth scrolling behavior
            });
        }
    </script>
    </head>


    <body onload="scrollToContent()">

        <div id="content" class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <form method="POST">


                    <label for="Roll_number">Student Roll number:</label><br>
<input type="text" id="Roll_number" name="Roll_number" class="form-control" placeholder="Enter your roll number" required><br><br>

<label for="name">Student Name:</label><br>
<input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required><br><br>


                        <label>Branch:</label><br>
<select name="branch" class="form-control" required>
  <option value="">Select a branch</option>
  <option value="Computer Engineering">Computer Engineering</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Mechanical Engineering">Mechanical Engineering</option>
  <option value="Electrical Engineering">Electrical Engineering</option>
  <option value="Electronics & Telecommunication">Electronics & Telecommunication</option>
  <option value="Civil Engineering">Civil Engineering</option>
  <option value="Automobile Engineering">Automobile Engineering</option>
</select><br><br>

                            <label>Semester:</label><br>
                        <select name="sem" class="form-control" required>
                        <option value="">Select a sem</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        </select><br><br>

                        <label>Email:</label><br>
                        <input type="text" name="email" class="form-control" placeholder="Enter your Email" required><br><br>

                        <label for="event_title">Select Event:</label>
                        <select name="event_title" class="form-control" required>
  <?php
  require_once 'classes/db1.php';
  $sql = "SELECT event_id, event_title FROM events";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['event_id'] . "'>" . $row['event_title'] . "</option>";
  }
  ?>
</select>

<br><br>
                        
                        <label>Phone:</label><br>
                        <input type="text" name="phone" class="form-control" placeholder="Enter your Phone no" required><br><br>

                        <label>College:</label><br>
                        <input type="text" name="college" class="form-control"placeholder="Enter your College Name" required><br><br>
                        
                        <label>Have you registered for any event before?</label><br>
                        <input type="checkbox" name="registered_before" value="yes"><br><br>

                        <button type="submit" name="update" required>Submit</button><br><br>
                        <a href="Roll_number.php"><u>Already registered ?</u></a>

                    </form>
                </div>
            </div>
        </div>

        <?php require 'utils/footer.php'; ?>
    </body>

</html>

<?php

if (isset($_POST["update"])) {
    $Roll_number = $_POST["Roll_number"];
    $name = $_POST["name"];
    $branch = $_POST["branch"];
    $sem = $_POST["sem"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];
    // $event_id = $_COOKIE['my_cookie'];
   

    $event_id = $_POST['event_title'];
    $registered_before = isset($_POST["registered_before"]) ? true : false;

    if (!empty($Roll_number) && !empty($name) && !empty($branch) && !empty($sem) && !empty($email) && !empty($phone) && !empty($college)) {
        include 'classes/db1.php';

        // Check if the participant has already registered for this event
        $result1 = $conn->query("SELECT * FROM participent WHERE Roll_number = '$Roll_number'");
        $result2 = $conn->query("SELECT * FROM registered WHERE Roll_number = '$Roll_number' AND event_id = '$event_id'");

        if ($result1->num_rows > 0 && $result2->num_rows > 0) {
            // The participant has already registered for this event
            echo "<script>
            alert('You have already registered for this event.');
            window.location.href='Roll_number.php';
            </script>";
        } else {
           
            // The participant has not registered for this event yet
            $INSERT1 = "INSERT INTO participent (Roll_number, name, branch, sem, email, phone, college, event_id) VALUES ('$Roll_number', '$name', '$branch', $sem, '$email', '$phone', '$college', '$event_id')";

           
            $INSERT2 = "INSERT INTO registered (Roll_number, event_id) VALUES ('$Roll_number', '$event_id')";

            if ($conn->query($INSERT1) === TRUE && $conn->query($INSERT2) === TRUE) {
                echo "<script>
                alert('Registered Successfully!');
                window.location.href='Roll_number.php';
                </script>";
            } else {
                echo "<script>
                alert('Error registering user. Please try again.');
                window.location.href='register.php';
                </script>";
            }
        }
    }
}    
?> 