<!DOCTYPE html>
  <html lang="en">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

      
        $to = "gavin.d.tafoya@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
        if (mail($to, $subject, $body)) {
            echo "Thank you for your message. We will get back to you soon!";
        } else {
          $error = error_get_last();
          if ($error !== null) {
              echo "Email sending failed: " . $error['message'];
          } else {
              echo "Email sending failed: Unknown error occurred";
          }
        }
    }
    ?>
  </html>