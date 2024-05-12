<?php
// Include the database configuration file
require_once "../inc/db.php";
require_once "../inc/mim.php";
checkBoothNumber($_POST['boothNum']);


// Create a new MySQL connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === FALSE) {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Get the booth name, booth number, and number of voters from the form submission
$boothName = $_POST['boothName'];
$boothNum = $_POST['boothNum'];
$numVoters = $_POST['numVoters'];

duplicateBooth($conn, $boothNum);

// Create the table named with the booth number if it doesn't exist
$tableName = "booth" . $boothNum;
$sql = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    votersno INT(6) NOT NULL,
    boothname VARCHAR(255) NOT NULL,
    boothno INT(6) NOT NULL,
    status INT(1) NOT NULL DEFAULT 0
)";

if ($conn->query($sql) === FALSE) {
    die("Error creating table: " . $conn->error);
}

// Insert the voter records into the table
for ($i = 1; $i <= $numVoters; $i++) {
    $sql = "INSERT INTO $tableName (votersno, boothname, boothno, status) VALUES ($i, '$boothName', $boothNum, 0)";
    if ($conn->query($sql) === FALSE) {
        die("Error inserting record: " . $conn->error);
    }
}

echo "'$boothName' and table '$tableName' with '$numVoters' Voters created successfully!";

// Close the database connection
$conn->close();
?>