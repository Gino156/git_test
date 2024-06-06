<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "brgyuser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM events WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Event deleted successfully";
} else {
    echo "Error deleting event: " . $conn->error;
}

$conn->close();

header("Location: manage-events.php");
exit();
