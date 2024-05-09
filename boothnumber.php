
<?php 
if (isset($_GET['boothno'])) {
    $boothNumber = $_GET['boothno'];
} else {
    $boothNumber = ''; // Set a default value or handle the case when 'boothno' is not provided
}
?>