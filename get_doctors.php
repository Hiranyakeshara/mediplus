<?php
include("./db/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["speciality"])) {
    $selectedSpeciality = $_POST["speciality"];
    $sql = "SELECT doc_id, name FROM doctors WHERE speciality = '$selectedSpeciality'";
    $result = $con->query($sql);

    $doctors = array();
    while ($row = $result->fetch_assoc()) {
        $doctors[] = "<option value='{$row['doc_id']}'>{$row['name']}</option>";
    }

    echo implode('', $doctors);
} else {
    echo "<option value=''>Select a doctor</option>";
}
?>
