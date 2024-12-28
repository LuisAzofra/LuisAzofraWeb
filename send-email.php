<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "luis.azofra.begara@gmail.com";
    $subject = "New Contact Form Submission";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $company = htmlspecialchars($_POST['company']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $body = "
        Name: $name\n
        Email: $email\n
        Company: $company\n
        Service: $service\n
        Message:\n$message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
