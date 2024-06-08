<?php
if (isset($_GET['id']) && isset($_GET['type'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brgyuser";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Determine the table based on request type
    $table = "";
    switch ($type) {
        case 'indigency':
            $table = "indigency_request";
            break;
        case 'clearance':
            $table = "clearance_request";
            break;
        case 'residency':
            $table = "residency_request";
            break;
        case 'soloparent':
            $table = "soloparent_request";
            break;
        default:
            echo "<p>Invalid request type.</p>";
            echo "<a href='admininbox.php'>Back to Inbox</a>";
            exit;
    }

    // Fetch the request details
    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $request = $result->fetch_assoc();

    if ($request) {
        // Check if the form was submitted to accept or decline
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'];
            $status = ($action === 'accept') ? 'Accepted' : 'Declined';

            // Update the request status in the database
            $update_sql = "UPDATE $table SET status = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("si", $status, $id);
            if ($update_stmt->execute()) {
                // Redirect to admininbox.php with status parameter
                $redirectUrl = "admininbox.php?status=" . strtolower($status);
                header("Location: $redirectUrl");
                exit;
            } else {
                echo "<p>Error updating request status: " . $conn->error . "</p>";
            }
        }
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Request</title>
            <link rel="stylesheet" href="adminhome.css">
            <style>
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                }

                .form-group {
                    margin-bottom: 15px;
                }

                .form-group label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                .form-group p {
                    margin: 0;
                    padding: 8px;
                    background-color: #f4f4f4;
                    border-radius: 5px;
                }

                .actions {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 20px;
                }

                .btn {
                    padding: 10px 15px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                .accept-btn {
                    background-color: #28a745;
                    color: #fff;
                }

                .decline-btn {
                    background-color: #dc3545;
                    color: #fff;
                }

                .back-btn {
                    background-color: #007bff;
                    color: #fff;
                    text-decoration: none;
                    padding: 10px 15px;
                    border-radius: 5px;
                    display: inline-block;
                }
            </style>
            <script>
                function confirmAction(action) {
                    if (confirm("Are you sure you want to perform this action?")) {
                        const form = document.getElementById('action-form');
                        const actionInput = document.getElementById('action-input');
                        actionInput.value = action;
                        form.submit();
                    }
                }
            </script>
        </head>

        <body>
            <div class="container">
                <h1>View Request</h1>
                <div class="form-group">
                    <label>Last Name:</label>
                    <p><?php echo htmlspecialchars($request['lastName']); ?></p>
                </div>
                <div class="form-group">
                    <label>First Name:</label>
                    <p><?php echo htmlspecialchars($request['firstName']); ?></p>
                </div>
                <div class="form-group">
                    <label>Middle Name:</label>
                    <p><?php echo htmlspecialchars($request['middleName']); ?></p>
                </div>
                <div class="form-group">
                    <label>Address Home#:</label>
                    <p><?php echo htmlspecialchars($request['address']); ?></p>
                </div>
                <div class="form-group">
                    <label>Street:</label>
                    <p><?php echo htmlspecialchars($request['street']); ?></p>
                </div>
                <div class="form-group">
                    <label>Birthday:</label>
                    <p><?php echo htmlspecialchars($request['birthday']); ?></p>
                </div>
                <div class="form-group">
                    <label>Age:</label>
                    <p><?php echo htmlspecialchars($request['age']); ?></p>
                </div>
                <div class="form-group">
                    <label>Cellphone Number:</label>
                    <p><?php echo htmlspecialchars($request['phone']); ?></p>
                </div>
                <div class="form-group">
                    <label>Citizenship:</label>
                    <p><?php echo htmlspecialchars($request['citizenship']); ?></p>
                </div>
                <div class="actions">
                    <form id="action-form" action="" method="post">
                        <input type="hidden" id="action-input" name="action">
                        <button type="button" class="btn accept-btn" onclick="confirmAction('accept')">Accept</button>
                        <button type="button" class="btn decline-btn" onclick="confirmAction('decline')">Decline</button>
                    </form>
                    <a href="admininbox.php" class="back-btn">Back to Inbox</a>
                </div>
            </div>
        </body>

        </html>
<?php
    } else {
        echo "<p>Request not found.</p>";
        echo "<a href='admininbox.php'>Back to Inbox</a>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<p>No request ID or type provided.</p>";
    echo "<a href='admininbox.php'>Back to Inbox</a>";
}
?>