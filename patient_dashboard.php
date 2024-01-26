<?php
include("./db/config.php");
session_start();
$patientname = $_SESSION['SESSION_USERNAME'];

// Fetch all unique specialities from the doctors table
$sql_specialities = "SELECT DISTINCT speciality FROM doctors";
$result_specialities = $con->query($sql_specialities);

$specialities = array();
while ($row_speciality = $result_specialities->fetch_assoc()) {
    $specialities[] = $row_speciality['speciality'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <div class="alert alert-success">
        <strong>Hello!</strong> <?php echo $patientname; ?>
    </div>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Mediplus | Patient Portal</h1>
        <p>Mediplus provides the world's best online healthcare services for patients</p>
        <a class="btn btn-dark" href="patient_dashboard.php">Home</a>
        <a href="logout.php" class="btn btn-danger">Log out</a>
        <a class="btn btn-warning" href="view_lab.php">View Lab Reports</a>
        <a class="btn btn-secondary" href="view_history.php">View Previous Appointments</a>
    </div>
    <br>
    <div class="container mt-3">
        <h2>Book an Appointment</h2>
        <form action="./appointment_booking.php" method="post">
            <div class="mb-3 mt-3">
                <label for="doctor_speciality">Select Doctor Speciality</label>
                <select class="form-select" id="doctor_speciality" name="doctor_speciality">
                    <?php
                    foreach ($specialities as $speciality) {
                        echo "<option value='$speciality'>$speciality</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="doctor">Select Doctor</label>
                <select id="doctor" class="form-select" name="doctor">
                    <option value="">Select a doctor</option>
                </select>
            </div>
            <div class="form-check mb-3">
                <label for="birthday">Select Date:</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <div class="mb-3">
                <label for="time_slot">Select Time Slot</label>
                <select class="form-select" id="time_slot" name="time_slot">
                    <option></option>
                    <option>2:00 PM - 3:00 PM</option>
                    <option>3:00 PM - 4:00 PM</option>
                    <option>4:00 PM - 5:00 PM</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>
            <button type="submit" name="booknow" class="btn btn-primary">Book Now</button>
        </form>
    </div>
    <br>
</div>

<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add JavaScript to handle dynamic update of the second dropdown -->
<script>
    $(document).ready(function () {
        // When Doctor Speciality is changed
        $('#doctor_speciality').change(function () {
            var selectedSpeciality = $(this).val();

            // Fetch doctors based on the selected speciality
            $.ajax({
                url: 'get_doctors.php', // Create a separate PHP file to handle the AJAX request
                type: 'POST',
                data: { speciality: selectedSpeciality },
                success: function (response) {
                    // Update the second dropdown with fetched doctors
                    $('#doctor').html(response);
                }
            });
        });
    });
</script>

</body>
</html>
