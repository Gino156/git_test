<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events</title>
    <link rel="stylesheet" href="adminhome.css">
</head>

<body>
    <div class="sidebar">
        <div class="profile">
            <div class="profile-picture">
                <img src="admin-profile-placeholder.png" alt="Admin Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Admin Name</h2>
                <p>admin@smartbrgy.ph</p>
                <img src="qr-code-placeholder.png" alt="QR Code" class="qr-code">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="adminhome.php">Dashboard</a></li>
                <li><a href="manage-events.php">Manage Events</a></li>
                <li><a href="inbox.html">Inbox</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <div class="header">
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="brand">SMARTBRGY.ph Admin</div>
            <div class="profile-icon">
                <img src="profile-icon.png" alt="Profile Icon">
            </div>
        </div>
        <div class="events">
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

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='event-card'>";
                    echo "<img src='" . $row['event_image'] . "' alt='Event Image'>";
                    echo "<div class='event-info'>";
                    echo "<h3>" . $row['event_name'] . "</h3>";
                    echo "<p>" . $row['event_date'] . "</p>";
                    echo "<p>" . $row['event_description'] . "</p>";
                    echo "<a href='edit_event.php?id=" . $row['id'] . "'>Edit</a>";
                    echo " | ";
                    echo "<a href='delete_event.php?id=" . $row['id'] . "'>Delete</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No events found.";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <script src="adminhome.js"></script>
</body>

</html>