<?php
// Start the session at the very beginning of the script
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in");
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brgyuser";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all requests for the current user
$userId = $_SESSION['user_id']; // Adjust this according to your session management
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Documents</title>
    <link rel="stylesheet" href="adminhome.css">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .document-buttons {
            margin-bottom: 20px;
        }

        .document-buttons button {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container {
            display: none;
            margin-top: 20px;
            text-align: left;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .status {
            margin-top: 20px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Request New Document</h1>
        <div class="document-buttons">
            <button onclick="showForm('indigencyForm')">BARANGAY INDIGENCY FORM</button>
            <button onclick="showForm('clearanceForm')">BARANGAY CLEARANCE FORM</button>
            <button onclick="showForm('residencyForm')">BARANGAY RESIDENCY FORM</button>
            <button onclick="showForm('soloParentForm')">SOLO PARENT FORM</button>
        </div>

        <div class="form-container" id="indigencyForm">
            <h2>Barangay Indigency Form</h2>
            <form action="barangay_indigency.php" method="post">
                <!-- Form fields for Barangay Indigency Form -->
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName" required>
                </div>
                <div class="form-group">
                    <label for="address">Address Home#:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="street">Street:</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="phone">Cellphone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="citizenship">Citizenship:</label>
                    <input type="text" id="citizenship" name="citizenship" required>
                </div>
                <button type="submit">Submit Request</button>
            </form>
            <span class="close-btn" onclick="closeForm()">×</span>
        </div>

        <div class="form-container" id="clearanceForm">
            <h2>Barangay Clearance Form</h2>
            <form action="barangay_clearance.php" method="post">
                <!-- Form fields for Barangay Clearance Form -->
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName" required>
                </div>
                <div class="form-group">
                    <label for="address">Address Home#:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="street">Street:</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="phone">Cellphone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="citizenship">Citizenship:</label>
                    <input type="text" id="citizenship" name="citizenship" required>
                </div>
                <button type="submit">Submit Request</button>
            </form>
            <span class="close-btn" onclick="closeForm()">×</span>
        </div>

        <div class="form-container" id="residencyForm">
            <h2>Barangay Residency Form</h2>
            <form action="barangay_residency.php" method="post">
                <!-- Form fields for Barangay Residency Form -->
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName" required>
                </div>
                <div class="form-group">
                    <label for="address">Address Home#:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="street">Street:</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="phone">Cellphone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="citizenship">Citizenship:</label>
                    <input type="text" id="citizenship" name="citizenship" required>
                </div>
                <button type="submit">Submit Request</button>
            </form>
            <span class="close-btn" onclick="closeForm()">×</span>
        </div>

        <div class="form-container" id="soloParentForm">
            <h2>Solo Parent Form</h2>
            <form action="solo_parent.php" method="post">
                <!-- Form fields for Solo Parent Form -->
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="middleName">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName" required>
                </div>
                <div class="form-group">
                    <label for="address">Address Home#:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="street">Street:</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="phone">Cellphone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="citizenship">Citizenship:</label>
                    <input type="text" id="citizenship" name="citizenship" required>
                </div>
                <button type="submit">Submit Request</button>
            </form>
            <span class="close-btn" onclick="closeForm()">×</span>
        </div>

        <div class="status">
            <h2>Document Request Status</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "brgyuser";
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch all requests for the current user (assuming a session variable holds user ID)
                    session_start();
                    $userId = $_SESSION['user_id']; // Adjust this according to your session management

                    $requests = [
                        'indigency' => 'indigency_request',
                        'clearance' => 'clearance_request',
                        'residency' => 'residency_request',
                        'solo parent' => 'soloparent_request',
                    ];

                    foreach ($requests as $type => $table) {
                        $sql = "SELECT id, status FROM $table WHERE user_id = '$userId'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $status = $row['status'] ? $row['status'] : 'Pending';
                                echo "
                                    <tr>
                                        <td>{$row['id']}</td>
                                        <td>" . ucfirst($type) . "</td>
                                        <td>{$status}</td>
                                        <td><a href='view_request.php?type=$type&id={$row['id']}'>View</a></td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No $type requests found</td></tr>";
                        }
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="back-btn">
        <a href="home.php">Back to Home</a>
    </div>

    <script>
        function showForm(formId) {
            const formContainers = document.querySelectorAll('.form-container');
            formContainers.forEach(container => {
                container.style.display = 'none';
            });
            document.getElementById(formId).style.display = 'block';
        }

        function closeForm() {
            const formContainers = document.querySelectorAll('.form-container');
            formContainers.forEach(container => {
                container.style.display = 'none';
            });
        }

        // Check URL parameters and show alert based on status
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            if (status === 'accepted') {
                alert('Request Accepted');
            } else if (status === 'declined') {
                alert('Request Declined');
            }
        };
    </script>
</body>

</html>