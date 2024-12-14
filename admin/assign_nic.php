<?php
// Include the database connection file
include("../connection.php");

if ($_POST) {
    $email = $_POST['email'];
    $nic = $_POST['nic'];

    // Check if the user exists
    $result = $database->query("SELECT * FROM patient WHERE pemail='$email'");
    if ($result->num_rows > 0) {
        // Update the NIC for the user
        $database->query("UPDATE patient SET pnic='$nic' WHERE pemail='$email'");
        echo "NIC assigned successfully!";
    } else {
        echo "User not found!";
    }
}
?>
