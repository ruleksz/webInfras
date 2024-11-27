<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "nurrulex@gmail.com"; // Ganti dengan alamat email Anda
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Mengirim email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>