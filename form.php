<?php
$name = $email = $message = $errName = $errMessage = $errEmail = $errHuman = $result = "";

if (isset($_POST["submit"])) {
  if (!$_POST["name"]) {
    $errName = "Please enter your name.";
  } else {
    $name = $_POST["name"];
  }

  if (!$_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errEmail = "Please enter a valid email address.";
  } else {
    $email = $_POST["email"];
  }

  if (!$_POST["message"]) {
    $errMessage = "Please enter a message.";
  } else {
    $message = str_replace("\n.", "\n..", $_POST["message"]);
    $message = wordwrap($message,70);
  }

  if ($_POST["human"] != 5) {
    $errHuman = "Your answer is incorrect, or you are a robot!";
  } else {
    $human = $_POST["human"];
  }

  $to = "cindyngandc@gmail.com";
  $subject = "message from site contact form";
  $from = "From: {$email}";

  if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail($to, $subject, $message, $from)) {
      $result = '<div class="alert alert-success">Thank you for contacting me! I will be in touch within 48h.</div>';
    } else {
      $result = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
    }
  }
}
?>
