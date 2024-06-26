<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox - SMARTBRGY.ph</title>
    <link rel="stylesheet" href="inbox.css">
</head>

<body>
    <div class="sidebar">
        <div class="profile">
            <div class="profile-picture">
                <img src="profile-placeholder.png" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Princess V. Silva</h2>
                <p>+639123456789</p>
                <p class="status">Unverified</p>
                <img src="qr-code-placeholder.png" alt="QR Code" class="qr-code">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="myaccount.php">My Account</a></li>
                <li><a href="inbox.php">Inbox</a></li>
                <li><a href="#">All Transactions</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Log Out</a></li>
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
            <div class="brand">SMARTBRGY.ph</div>
            <div class="profile-icon">
                <img src="profile-icon.png" alt="Profile Icon">
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search here">
            <button><img src="search-icon.png" alt="Search"></button>
            <button><img src="filter-icon.png" alt="Filter"></button>
        </div>
        <div class="inbox-section">
            <h2>Inbox</h2>
            <div class="messages">
                <div class="message">
                    <h3>Message Title 1</h3>
                    <p>This is a short preview of the message content.</p>
                </div>
                <div class="message">
                    <h3>Message Title 2</h3>
                    <p>This is a short preview of the message content.</p>
                </div>
                <!-- More messages -->
            </div>
        </div>
    </div>
    <script src="home.js"></script>
</body>

</html>