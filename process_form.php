<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set up email
    $to = "adam.mcintyre22@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error: Email could not be sent.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: contact.html");
    exit;
}
?>
