<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email address where you want to receive emails
    $to = "roberttaliguli@gmail.com";
    
    // Subject of the email
    $subject = "New Contact Form Submission";
    
    // Email content for display
    $email_display = "New message submitted:\n\n";
    $email_display .= "Name: $name\n";
    $email_display .= "Email: $email\n\n";
    $email_display .= "Message:\n$message\n";
    
    // Email content for sending
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Send email
    $mail_sent = mail($to, $subject, $email_content);
    
    // Display result and redirect
    echo '<html><head><meta http-equiv="refresh" content="5;url=contact.html"></head><body>';
    if ($mail_sent) {
        echo "<p>Thank you! Your message has been sent.</p>";
        echo "<p>Here is the information that was sent:</p>";
        echo "<pre>$email_display</pre>";
    } else {
        echo "<p>Oops! Something went wrong and we couldn't send your message.</p>";
    }
    echo "<p>You will be redirected back to the contact page in a few seconds.</p>";
    echo '</body></html>';
}
?>
