<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn, "SELECT * FROM events, participent p WHERE events.event_id=p.event_id  ORDER BY event_title");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Techtonix2k23 2k20</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
    <?php include 'utils/adminHeader.php' ?>
    <div class="content">
        <div class="container">
            <h1>Participant Details</h1>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Roll_number</th>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Sem</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>College</th>
                            <th>Events</th>
                            <th>Action</th> <!-- Added Action column for Delete button -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["Roll_number"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["branch"]; ?></td>
                                <td><?php echo $row["sem"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["college"]; ?></td>
                                <td><?php echo $row["event_title"]; ?></td>
                                 <td><?php echo $row["event_title"]; ?></td>
                                <td><button onclick="deleteParticipant(<?php echo $row['Roll_number']; ?>)">Delete</button></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo "No results found";
            }
            ?>
        </div>
    </div>
    <?php include 'utils/footer.php' ?>;
    <script>
        function deleteParticipant(Roll_number) {
            var r = confirm("Are you sure you want to delete this participant?");
            if (r == true) {
                window.location.href = "deleteParticipant.php?Roll_number=" + Roll_number; // Redirect to deleteParticipant.php with Roll_number as parameter
            }
        }
    </script>
</body>
</html>
