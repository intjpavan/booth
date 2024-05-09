<!DOCTYPE html>
<html lang="en">
<?php 
include 'db.php';
include 'boothnumber.php';


include 'update.html';


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $votersno = $_POST['votersno'];
        $status = $_POST['status'];

        $sql = "UPDATE booth$boothNumber SET status = ? WHERE votersno = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $status, $votersno);

        if ($stmt->execute()) {
            echo "<script>showSuccessMessage();</script>";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    ?>
</body>
</html>