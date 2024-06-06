<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "brgyuser");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch requests from the database
$sql = "SELECT * FROM requests";
$result = mysqli_query($conn, $sql);

// Display requests in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>User Name</th><th>Requested Document</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['user_name'] . "</td><td>" . $row['requested_document'] . "</td><td>" . $row['status'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No requests found.";
}

mysqli_close($conn);
