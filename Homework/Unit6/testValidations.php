<?php
  include("validations.php"); // Makes your class available to the program

  $formValidations = new validations(); // create new validations object
?>
<!DOCTYPE HTML>
  <head>
    <meta charset="UTF-8">
    <title>Testing the Validations class</title>
  </head>
  <body>
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
  </body>
</html>
