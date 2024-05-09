<?php

function checkBoothNumber($boothNumber) {
    if (empty($boothNumber)) {
        http_response_code(400);
        echo 'Booth Number is Empty';
        exit;
    }
}

function checkBoothTable($conn, $boothNumber) {
    $sql = "SHOW TABLES LIKE 'booth$boothNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
        // The booth table does not exist, handle the error gracefully
        echo "Invalid Booth number.";
        exit;
    }
}
?>