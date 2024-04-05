<?php
require_once 'utils/header.php';
require_once 'utils/styles.php';

if (isset($_POST['Roll_number']) || isset($_GET['Roll_number'])) {
    if (isset($_POST['Roll_number'])) {

        $Roll_number = $_POST['Roll_number'];
    }

    if (isset($_GET['Roll_number'])) {

        $Roll_number = $_GET['Roll_number'];
    }


    include_once 'classes/db1.php';

    $result = mysqli_query($conn, "SELECT *
    FROM event_info
    INNER JOIN events ON event_info.event_id = events.event_id
    INNER JOIN participent ON event_info.event_id = participent.event_id
    INNER JOIN staff_coordinator ON event_info.event_id = staff_coordinator.event_id
    INNER JOIN student_coordinator ON event_info.event_id = student_coordinator.event_id
    WHERE participent.Roll_number = '$Roll_number'
    ");

?>

    <div class="content">
        <div class="container">
            <h1>Registered Events</h1>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Unregister</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['event_title'] . '</td>';
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['time'] . '</td>';
                            echo '<td>' . $row['location'] . '</td>';
                            echo '<td>
        <form method="post" action="unregister.php">
            <input type="hidden" name="event_id" value="' . $row['event_id'] . '">
            <input type="hidden" name="Roll_number" value="' . $Roll_number . '">
            <button type="submit" class="btn btn-danger">Unregister</button>
        </form>
      </td>';
                            echo '</tr>';
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            <?php } else {
                echo 'Not Yet Registered for Any Events';
            }
            ?>
        </div>
    </div>

<?php include 'utils/footer.php';
}

?>