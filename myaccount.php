<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - SMARTBRGY.ph</title>
    <link rel="stylesheet" href="myaccount.css">
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
                <li><a href="myaccount.php">My account</a></li>
                <li><a href="inbox.php">Inbox</a></li>
                <li><a href="transaction.php">All Transactions</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                <li><a href="index.php">Log out</a></li>
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
        <div class="account-section">
            <div class="account-verification">
                <h2>My Account</h2>
                <p>To verify your account, please go to Brgy. San Francisco Barangay Hall and kindly bring these requirements:</p>
                <ul>
                    <li>Community Tax Certificate or Cedula</li>
                    <li>Valid ID</li>
                    <li>Certificate of Residency</li>
                </ul>
                <h3><b>General Information</b></h3>
                <form>
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName"><br><br>
                    <label for="middleName">Middle Name:</label>
                    <input type="text" id="middleName" name="middleName"><br><br>
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName"><br><br>
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select><br><br>
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob"><br><br>
                    <label for="birthPlace">Birth Place:</label>
                    <input type="text" id="birthPlace" name="birthPlace"><br><br>
                    <label for="bloodType">Blood Type:</label>
                    <select id="bloodType" name="bloodType">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select><br><br>
                </form>
                <h3><b>Other Details</b></h3>
                <form>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address"><br><br>
                    <label for="contactNumber">Contact Number:</label>
                    <input type="int" id="contactNumber" name="contactNumber"><br><br>
                    <label for="civilStatus">Civil Status:</label>
                    <select id="civilStatus" name="civilStatus">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select><br><br>
                    <label for="nationality">Nationality:</label>
                    <input type="text" id="nationality" name="nationality"><br><br>
                    <label for="religion">Religion:</label>
                    <input type="text" id="religion" name="religion"><br><br>
                    <label for="occupation">Occupation:</label>
                    <input type="text" id="occupation" name="occupation"><br><br>
                    <label for="sector">Sector:</label>
                    <select id="sector" name="sector">
                        <option value="pwd">PWD</option>
                        <option value="senior">Senior</option>
                        <option value="soloParent">Solo Parent</option>
                    </select><br><br>
                    <label for="voters">Voter's Precint No. & Polling Place:</label>
                    <input type="text" id="voters" name="voters"><br><br>
                    <label for="philHealthNo">Philhealth Number:</label>
                    <input type="int" id="philHealthNo" name="philHealthNo"><br><br>
                </form>
                <h3><b>References</b></h3>
                <form>
                    <label for="contactPerson">Contact Person in Case of Emergency:</label>
                    <input type="text" id="contactPerson" name="contactPerson"><br><br>
                    <label for="contactRelation">Contact Person Relationship:</label>
                    <input type="text" id="contactRelation" name="contactRelation"><br><br>
                    <label for="contactPersonNo">Contact Person Contact No.:</label>
                    <input type="int" id="contactPersonNo" name="contactPersonNo"><br><br>
                </form>
            </div>
        </div>
    </div>
    <script src="home.js"></script>
</body>

</html>