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

$sql = "SELECT * FROM events ORDER BY event_date ASC"; // Assuming 'event_date' is the column name for the event date
$result = $conn->query($sql);

$events = array();
if ($result) {
    // Fetch events from the database
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

echo json_encode($events);
