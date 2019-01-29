<?php
  include("emailer.php"); // Makes your class available to the program

  $testEmail = new emailer();

  $testEmail->setSenderAddress("contact@artisticpawpring.info");
  $testEmail->setSendToAddress("cbuchwald229@hotmail.com");
  $testEmail->setSubjectLine("Emailer Class Homework");
  $testEmail->setMessageBody("Looking to help get the emailer class working.");

  $clientEmail = new emailer();

  $clientEmail->setSenderAddress("contact@artisticpawpring.info");
  $clientEmail->setSendToAddress("cbuchwald229@hotmail.com");
  $clientEmail->setSubjectLine("Client Emailer Class Homework");
  $clientEmail->setMessageBody("This is to show that you can send to a client.");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Email Tester</title>
    <style>
    body {
        background-color: purple;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1>Howdy!</h1>
    <p><?php //echo $testEmail->getSenderAddress(); ?></p>
    <p><?php //echo $testEmail->getSendToAddress(); ?></p>
    <p><?php //echo $testEmail->getSubjectLine(); ?></p>
    <p><?php //echo $testEmail->getMessageBody(); ?></p>
    <p><?php echo $testEmail->sendNewMessage(); // Test the mail() to send email ?></p>
  </br>
    <p><?php //echo $clientEmail->getSenderAddress(); ?></p>
    <p><?php //echo $clientEmail->getSendToAddress(); ?></p>
    <p><?php //echo $clientEmail->getSubjectLine(); ?></p>
    <p><?php //echo $clientEmail->getMessageBody(); ?></p>
    <p><?php echo $clientEmail->sendNewMessage(); // Test the mail() to send email ?></p>
  </body>
</html>
