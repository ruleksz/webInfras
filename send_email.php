<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validasi dan sanitasi data
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Kirim email
        $to = "nurrulex@gmail.com"; // Ganti dengan alamat email Anda
        $headers = "From: $name <$email>";
        $body = "Nama: $name\nEmail: $email\nSubjek: $subject\nPesan:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            echo "Pesan Anda telah dikirim.";
        } else {
            echo "Terjadi kesalahan saat mengirim pesan.";
        }
    } else {
        echo "Semua field harus diisi.";
    }
}
?>
