<?php
//include('../includes/connection.php');

include('../vendor/autoload.php');
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('diasporana.salamat@gmail.com')
    ->setPassword('@adasho2020');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Email verification</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #e21137;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #ffffff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Thank you for signing up on Diasporana. Please click on the link below to verify your account to begin.</p>
        <a href="http://localhost/diasporana/welcome.php?token=' . $token . '">Verify Email Now!</a>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Verify your email'))
        ->setFrom('diasporana.salamat@gmail.com')
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}
