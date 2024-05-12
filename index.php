<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="20">


<title>
<?php 

// Database configuration
include './inc/db.php';
include './inc/boothnumber.php';
include './inc/mim.php';


checkBoothNumber($boothNumber);
// a New conn is created
$conn = new mysqli($servername, $username, $password, $dbname);
checkBoothTable($conn, $boothNumber);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `booth$boothNumber` LIMIT 1";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $boothName = $row['boothname'];
    $boothNo = $row['boothno'];
    echo "Status of";
    echo "  Booth No: " . $boothNo;
    echo " (" . $boothName.")" ;

} else {
    echo "Invalid Booth Number.";
}
?>
</title>

<style>
    @media (max-width: 768px) {
  .grid-container {
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); /* Adjust number of columns for tablets */
  }
}

/* For mobile phones */
@media (max-width: 480px) {
  .grid-container {
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); /* Adjust number of columns for mobile phones */
  }
}
.grid-container {
    display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); /* Adjusts number of columns based on available width */
  background-color: #e5e9ec;
  grid-auto-flow: row;
  padding: 2px;
}

.grid-item-red {
    background-color: #FE9A34;
    border: 1px solid rgba(0, 0, 0, 0.8);
    padding: 2px;
    font-size: 18px;
    text-align: center;
    
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 2px solid rgba(0, 0, 0, 0.8);
  padding: 2px;
  font-size: 32px;
  text-align: center;
}

</style>
</head>
<body>

<h1 align="center">Voters Status at <?php  echo "Booth No: " . $boothNo. "<br>";
    echo " Booth Name: " . $boothName ; ?></h1>

<!DOCTYPE html>


<body>

<?php 
// Database configuration
//$servername = "localhost"; // or your database server
//$username = "root";    // your database username
//$password = "";    // your database password
//$dbname = "darsi_booths";    // your database name
//$boothNumber = 4;

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo'<div class="grid-container">';

// SQL to fetch data
$sql = "SELECT votersno, boothno, status FROM booth$boothNumber";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc())
      

    {
       // $className = ($row['status'] == 1) ? "grid-item-red" : "grid-item";
      //echo '<div class="' . $className . '">' . $row["votersno"] . '</div>';

      if ( $row['status'] == 0 )
      { 
        echo '<div class="grid-item">' . $row["votersno"] . '</div>';
      }
        
    }
} 

else {
    echo "0 results";
}

// Close connection
$conn->close();



?>



</div>


</body>


</html>
