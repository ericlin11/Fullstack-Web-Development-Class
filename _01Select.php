/* file name: _01Select.php */
<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "carsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT groupId, groupName
        FROM cargroups ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["groupId"]
        . " - Name: " . $row["groupName"]
        . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>