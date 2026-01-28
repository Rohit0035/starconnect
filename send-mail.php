<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rohitazsm12@gmail.com';   // your email
        $mail->Password   = 'cpfpuatpvlggsywm';    // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // EMAIL SETTINGS
        $mail->setFrom($email, $name);
        $mail->addAddress('testinfo@gmail.com'); // receive mail here

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Enquiry";
        $mail->Body = "
            <h3>New Enquiry</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();

        // Redirect after success
        header("Location: thankyou.php");
        exit();

    } catch (Exception $e) {
        echo "Mail not sent. Error: {$mail->ErrorInfo}";
    }
}
?>
