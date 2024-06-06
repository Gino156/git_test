<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "brgyuser");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$user_name = $_POST['lastName'] . ' ' . $_POST['firstName'] . ' ' . $_POST['middleName'];
$requested_document = "Barangay Indigency Form";

// Insert data into the requests table
$sql = "INSERT INTO requests (user_name, requested_document, status) VALUES ('$user_name', '$requested_document', 'confirm')";

if (mysqli_query($conn, $sql)) {
    echo "Request submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
