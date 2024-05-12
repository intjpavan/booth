<!DOCTYPE html>
<html>
<head>
    <title>Create Voters Database</title>
</head>
<body>
    <h2>Create Voters Database</h2>
    <form action="create_voters_db.php" method="post">
        <label for="boothName">Booth Name:</label>
        <input type="text" name="boothName" id="boothName" required>
        <br><br>
        <label for="boothNum">Booth Number:</label>
        <input type="number" name="boothNum" id="boothNum" required>
        <br><br>
        <label for="numVoters">Number of Voters:</label>
        <input type="number" name="numVoters" id="numVoters" required>
        <br><br>
        <input type="submit" value="Create Database">
    </form>
</body>
</html>

