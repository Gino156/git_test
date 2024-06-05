<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTBRGY.ph Admin</title>
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
                <li><a href="#">Dashboard</a></li>
                <li><a href="manage-events.html">Manage Events</a></li>
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
        <div class="add-event">
            <h2>Add New Event</h2>
            <form id="addEventForm" method="POST" action="add_event.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="eventName">Event Name:</label>
                    <input type="text" id="eventName" name="eventName" required>
                </div>
                <div class="form-group">
                    <label for="eventDate">Event Date:</label>
                    <input type="date" id="eventDate" name="eventDate" required>
                </div>
                <div class="form-group">
                    <label for="eventDescription">Event Description:</label>
                    <textarea id="eventDescription" name="eventDescription" required></textarea>
                </div>
                <div class="form-group">
                    <label for="eventImage">Event Image:</label>
                    <input type="file" id="eventImage" name="eventImage" accept="image/*" required>
                </div>
                <button type="submit">Add Event</button>
            </form>
        </div>
        <div class="events">
            <!-- Events will be dynamically loaded here -->
        </div>
    </div>
    <script src="adminhomes.js"></script>
</body>

</html>