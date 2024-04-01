<?php

require_once 'settings.php';

// Attempt to establish database connection
$con = mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Define variables and initialize with empty values
$update_id_number = trim($_POST['update_id_number']);
$update_status = $_POST['update_status'];

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate EOI
  if (empty(trim($_POST["update_id_number"]))) {
    $update_id_number_err = "Please enter EOI.";
  } else {
    $update_id_number = trim($_POST["update_id_number"]);
  }

  // Validate input
  $update_status = $_POST['update_status'];

  // Check if EOI is valid
  if (empty($update_id_number_err)) {
    // Update the status in the database
    $update_query = "UPDATE Applicant SET Status = '$update_status' WHERE EOI = '$update_id_number'";
    if (mysqli_query($con, $update_query)) {
      echo '<a href="manage.php">Back</a>';
      echo "<p>Status updated successfully!</p>";
    } else {
      echo '<a href="manage.php">Back</a>';
      echo "<p>Error updating status: </p>" . mysqli_error($con);
    }
  }
}

?>
