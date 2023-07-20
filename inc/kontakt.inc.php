<?php
// Include the database credentials
require_once 'db.inc.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insert the form data into the database
    $sql = "INSERT INTO kontakter (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        header('Location: ../tpl/kontakt.php?tack');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>