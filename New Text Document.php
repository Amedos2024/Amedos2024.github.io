<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($message)) {
        
        // Set the recipient email address
        $to = "ahmedesidiabderrahmane@gmail.com";  // Replace with your email address

        // Set the email subject
        $subject = "Contact Form Submission from $name";

        // Build the email content
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Set the email headers
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $email_content, $headers)) {
            // Success
            echo "Thank you! Your message has been sent.";
        } else {
            // Error
            echo "Oops! Something went wrong, and we couldn't send your message.";
        }

    } else {
        echo "Please fill in all fields.";
    }
}
?>
