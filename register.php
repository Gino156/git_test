<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, fullname, username, password) VALUES ('$email', '$fullname', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Redirect to login.php
        header("Location: login.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
