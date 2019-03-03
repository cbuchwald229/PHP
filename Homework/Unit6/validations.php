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

    public function validateUsPhone($filtered_phone_number) {
      // Allow +, - and . in phone number
      $phone_number = filter_var($filtered_phone_number, FILTER_SANITIZE_NUMBER_INT);
      // Remove "-" from number
      $phone_number = str_replace("-", "", $phone_number);
      // Remove "+" from number
      $phone_number = str_replace("+", "", $phone_number);
      // Remove "." from number
      $phone_number = str_replace(".", "", $phone_number);
      // Check the lenght of number for US
      if (strlen($phone_number) == 10  || strlen($phone_number) == 11) {
         return true;
      } else {
        return false;
      }
    }

    public function validateRegistration($inRegistration) {
      if($inRegistration == "neg") {
        return false;
      } else {
         return true;
       }
    }

    public function validateRadio($inRadioValue) {
      if($inRadioValue == "") {
        return false;
      } else {
         return true;
       }
    }

    public function sanitizeSpecialBox($inSpecial) {
      return $inSpecial = self::clean($inSpecial);
    }

    public function clean($string) {
       $string = preg_replace('/[^A-Za-z0-9\- ]/', '', $string); // Removes special chars.

       return $string; // Replaces multiple hyphens with single one.
    }

    public function validateName($inName) {
      $isItEmpty = self::cannotBeEmpty($inName);
      if ($isItEmpty) {
        return false;
      } else {
        return $outName = self::clean($inName);
      }
    }
  }
?>
