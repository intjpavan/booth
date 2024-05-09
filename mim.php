<?php

//Check for Empty Booths 

function checkBoothNumber($boothNumber) {
    if (empty($boothNumber)) {
        http_response_code(400);
        echo 'Booth Number is Empty';
        exit;
    }
}
//Check for Invalid Booths

function checkBoothTable($conn, $boothNumber) {
    $sql = "SHOW TABLES LIKE 'booth$boothNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
        // The booth table does not exist, handle the error gracefully
        echo "Invalid Booth number.";
        exit;
    }
}

// Check for Duplicate Booth Creation
function duplicateBooth($conn, $boothNumber) {
    $sql = "SHOW TABLES LIKE 'booth$boothNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows  >  0) {
        // Avoid Duplicate Entries
        echo "Booth Already Exists.";
        exit;
    }
}
?>

