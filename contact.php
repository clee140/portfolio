<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $emailAddress = htmlspecialchars($_POST['emailAddress']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $emailSubject = htmlspecialchars($_POST['emailSubject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "christopherhlee6@gmail.com";
    $subject = "New Contact Form Submission: $emailSubject";
    $body = "Full Name: $fullName\nEmail Address: $emailAddress\nPhone Number: $phoneNumber\n\nMessage:\n$message";
    $headers = "From: $emailAddress";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>