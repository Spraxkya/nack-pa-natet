<?php
require_once 'db.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $type = $_POST['type'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO prisform (type, name, email, phone, message) VALUES ('$type', '$name', '$email', '$phone', '$message')";
    if ($conn->query($sql) === TRUE) {
        header('Location: ../tpl/erbjudande.php?tack');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>