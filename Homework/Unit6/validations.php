<?php
  class validations {

    // Empty constructor with no functionality
    public function __construct() {
    }

    // Methods
    public function cannotBeEmpty($inFieldValue) {
      return empty($inFieldValue);
    }

    public function validateEmail($inEmail) {
      $inEmail = filter_var($inEmail, FILTER_SANITIZE_EMAIL); //clean interface

      return filter_var($inEmail, FILTER_VALIDATE_EMAIL); //validate form
    }
  }
?>
