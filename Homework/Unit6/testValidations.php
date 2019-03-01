<?php
  include("validations.php"); // Makes your class available to the program

  $formValidations = new validations(); // create new validations object
?>
<!DOCTYPE HTML>
  <head>
    <meta charset="UTF-8">
    <title>Testing the Validations class</title>
    <style>
    body {
      background-color: purple;
      color: lavender;
    }
    </style>
  </head>
  <body>
    <h1>THIS CLASS IS TESTING VALIDATIONS</h1>
    <p>Cannot Be Empty</p>
    <p>0 <?php if($formValidations->cannotBeEmpty(0)) {
        echo "True";
      } else {
        echo "False";
      }?></p>
    <p>"" <?php if($formValidations->cannotBeEmpty("")) {
        echo "True";
      } else {
        echo "False";
      }?></p>
    <p>0.0 <?php if($formValidations->cannotBeEmpty(0.0)) {
        echo "True";
      } else {
        echo "False";
      }?></p>
    <p>"    " <?php if($formValidations->cannotBeEmpty("    ")) {
        echo "True";
      } else {
        echo "False";
      }?></p>
    <p>Email Validation</p>
    <p>cmlicht@dmacc.edu <?php if($formValidations->validateEmail("cmlicht@dmacc.edu")) {
        echo "Valid";
      } else {
        echo "Invalid";
      }?></p>
    <p>cmlicht@dmacc <?php if($formValidations->validateEmail("cmlicht@dmacc")) {
        echo "Valid";
      } else {
        echo "Invalid";
      }?></p>
      <p>US Phone Validation</p>
      <p>(521)555-988 <?php if($formValidations->validateUsPhone("(521)555-988")) {
          echo "Valid";
        } else {
          echo "Invalid";
        }?></p>
      <p>521-555-9888 <?php if($formValidations->validateUsPhone("521-555-9888")) {
          echo "Valid";
        } else {
          echo "Invalid";
        }?></p>
      <p>521.544.9888 <?php if($formValidations->validateUsPhone("521.544.9888")) {
          echo "Valid";
        } else {
          echo "Invalid";
        }?></p>
      <p>Clean Function</p>
      <p>Hello *(\*\()) <?php $output = ($formValidations->clean("Hello *(\*\())"));
        echo "Cleaned: ".$output ?></p>
      <p>Name</p>
      <p>Christina $ Me <?php $nameOutput =($formValidations->validateName("Christina $ Me"));
        echo $nameOutput ?></p>
      <p>"" <?php $nameOutput =($formValidations->validateName(""));
        echo $nameOutput ?></p>
  </body>
</html>
