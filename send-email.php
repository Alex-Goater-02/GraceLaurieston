<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = "agoater@hotmail.com";
    $email_subject = "New Contact Form Message: " . $subject;
    $email_body =
        "You have received a new message from your website contact form.\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Message:\n$message";

    $headers = "From: no-reply@gracelauriestonmusic.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: sent.html");
        exit();
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
