<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "faheemahmedsoomro6@gmail.com";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject ?: 'Contact Form Message', $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
