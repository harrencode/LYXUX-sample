
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $organization = $_POST["organization"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Compose email content
    $to = "harendra98w@gmail.com"; 
    $subject = "Contact Form Submission: $subject";
    $body = "Name: $name\nOrganization: $organization\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
