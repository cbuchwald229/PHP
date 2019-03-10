<?php
  class eventValidations {

    // Empty constructor with no functionality
    public function __construct() {
    }

    // Methods

    // Make sure it's not empty
    public function cannotBeEmpty($inFieldValue) {
      return empty($inFieldValue);
    }

    // Remove all special characters fromo a string
    public function clean($string) {
       $string = preg_replace('/[^A-Za-z0-9\- ]/', '', $string);
       return $string;
    }

    // Make sure it's not empty and only a number with 10 char or less
    public function validateId($inId) {
      $isItEmpty = self::cannotBeEmpty($inId);
      if ($isItEmpty) {
        return false;
      } else {
        if (is_numeric($inId) && strlen($inId) <= 10) {
           return true;
        } else {
          return false;
        }
      }
    }

    // Make sure it's not empty and less than or equal to 100 chars
    public function validateName($inName) {
      $isItEmpty = self::cannotBeEmpty($inName);
      if ($isItEmpty) {
        return false;
      } else {
        if ($inName <= 100) {
          return true;
        } else {
          return false;
        }
      }
    }

    // Make sure it's not empty and less than or equal to 200 chars
    public function validateDescription($inDescription) {
      $isItEmpty = self::cannotBeEmpty($inDescription);
      if ($isItEmpty) {
        return false;
      } else {
        if ($inDescription <= 200) {
          return true;
        } else {
          return false;
        }
      }
    }

    // Make sure it's not empty and has no special characters and is 50 or less char
    public function validatePresenter($inPresenter) {
      $isItEmpty = self::cannotBeEmpty($inPresenter);
      if ($isItEmpty) {
        return false;
      } else {
        if (($inPresenter == self::clean($inPresenter)) && strlen($inPresenter) <= 50) {
          return true;
        } else {
          return false;
        }
      }
    }

    public function isValidDate($inDate)
    {
      if (preg_match("/^(((((1[26]|2[048])00)|[12]\d([2468][048]|[13579][26]|0[48]))-((((0[13578]|1[02])-(0[1-9]|[12]\d|3[01]))|((0[469]|11)-(0[1-9]|[12]\d|30)))|(02-(0[1-9]|[12]\d))))|((([12]\d([02468][1235679]|[13579][01345789]))|((1[1345789]|2[1235679])00))-((((0[13578]|1[02])-(0[1-9]|[12]\d|3[01]))|((0[469]|11)-(0[1-9]|[12]\d|30)))|(02-(0[1-9]|1\d|2[0-8])))))$/", $inDate)) {
        return true;
      }
      return false;
    }

    public function isValidTime($inTime)
    {
      if (preg_match("/^(?:1[012]|0[0-9]):[0-5][0-9]$/", $inTime)) {
        return true;
      }
      return false;
    }

    // Make sure the date is not empty and in the right format
    public function validateDateEntry($inDate) {
      $isItEmpty = self::cannotBeEmpty($inDate);
      if ($isItEmpty) {
        return false;
      } else {
        if (self::isValidDate($inDate)) {
          return true;
        } else {
          return false;
        }
      }
    }

    // Make sure time is not empty and in the right format
    public function validateTime($inTime) {
      $isItEmpty = self::cannotBeEmpty($inTime);
      if ($isItEmpty) {
        return false;
      } else {
        if (self::isValidTime($inTime)) {
          return true;
        } else {
          return false;
        }
      }
    }
  }
?>
