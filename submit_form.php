<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];  // Get the name from the form
    $email = $_POST['email'];  // Get the email from the form
    $message = $_POST['message'];  // Get the message from the form

    // Email settings
    $to = "uzunkaana@gmail.com";  // The email address where you want to receive the message
    $subject = "New Message from Contact Form";  // Subject of the email
    $headers = "From: " . $email;  // Sender's email (the email provided by the user)

    // Create the email body
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again.";
    }
}
?>
