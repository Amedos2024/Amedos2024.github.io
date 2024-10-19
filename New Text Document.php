<form class="contact-form" method="POST" action="New Text Document.php">

    <?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // The email where you'll receive the contact form submissions
    $to = "ahmedesidiabderrahmane@gmail.com";
    $subject = "Contact Form Submission from $name";
    $body = "You have received a new message from your website contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message:\n$message";
    $headers = "From: $email";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
