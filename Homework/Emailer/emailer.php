<?php
  class emailer {
    // Properties
    private $messageBody;
    private $senderAddress;
    private $sendToAddress;
    private $subjectLine;

    // Empty constructor with no functionality
    public function __construct() {
    }

    // Getters and setters
    public function getMessageBody() {
      return $this->messageBody;
    }
    public function setMessageBody($inMessage) {
      $this->messageBody = $inMessage;
    }
    public function getSenderAddress() {
      return $this->senderAddress;
    }
    public function setSenderAddress($inSenderAddress) {
      $this->senderAddress = $inSenderAddress;
    }
    public function getSendToAddress() {
      return $this->sendToAddress;
    }
    public function setSendToAddress($inSendToAddress) {
      $this->sendToAddress = $inSendToAddress;
    }
    public function getSubjectLine() {
      return $this->subjectLine;
    }
    public function setSubjectLine($inSubjectLine) {
      $this->subjectLine = $inSubjectLine;
    }

    public function sendNewMessage() {
      $to = $this->getSendToAddress();
      $subject = $this->getSubjectLine();
      $message = $this->getMessageBody();
      $headers = "From: " . $this->getSenderAddress() . "\r\n";
      $retval =  mail($to, $subject, $message, $headers);
      if($retval == true)
      {
        echo "Message sent successfully";
      } else {
        echo "Message could not be sent";
      }
    }
  }
?>
