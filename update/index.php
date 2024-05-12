<?php
include '../inc/db.php';
include '../inc/mim.php';
include '../inc/boothnumber.php';
include 'update.html';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $boothno = $_POST['boothno'];
    $votersno = $_POST['votersno'];
    $status = $_POST['status'];

    // Prepare the SQL statement
    $sql = "UPDATE booth$boothno SET status = ? WHERE votersno = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("is", $status, $votersno);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "<script>showSuccessMessage();</script>";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>