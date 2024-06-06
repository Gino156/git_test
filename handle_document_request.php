<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documentType = $_POST['documentType'];
    header("Location: $documentType");
    exit();
} else {
    header("Location: requestdocuments.php");
    exit();
}
