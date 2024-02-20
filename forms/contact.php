<?php
// Set recipient email address
$to = "lavoixunique@gmail.com";

// Set email subject
$subject = "Contact us Form Submission";

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Set email headers
$headers = "From: lavoixunique@gmail.com\r\n";
$headers .= "Reply-To: lavoixunique@gmail.com\r\n";
$headers .= "Content-Type: text/html\r\n";

// Compose email message
$email_message = "<html><body>";
$email_message .= "<h1>New Contact Submission</h1>";
$email_message .= "<p><strong>Name:</strong> " . $name . "</p>";
$email_message .= "<p><strong>Email:</strong> " . $email . "</p>";
$email_message .= "<p><strong>Message:</strong></p><br>";
$email_message .= "<p>" . $message . "</p>";
$email_message .= "</body></html>";

// Send email
if(mail($to, $subject, $email_message, $headers)) {
   echo "<p style='font-size: 60px; font-weight: bold;'> Thank you for contacting us. We'll get back to you soon.</p>";
} else {
   echo "<p style='font-size: 60px; font-weight: bold;'>There was an error submitting the form. Please try again.</p>";
}
// Redirect to homepage
header("Location: https://www.gr8smentalsport.com/index.html");
exit();
?>