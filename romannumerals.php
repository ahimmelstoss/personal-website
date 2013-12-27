<?php 
  class Roman {

    public $number;
    public $numerals;

    public function __construct($number) {
      $this->number = $number;
      $this->numerals = array(
        1 => "I",
        4 => "IV",
        5 => "V",
        9 => "IX",
        10 => "X",
        40 => "XL",
        50 => "L",
        90 => "XC",
        100 => "C",
        400 => "CD",
        500 => "D",
        900 => "CM",
        1000 => "M"
      );
    }

    public function lowerKey($number) {
      $numbersArray = array();
      foreach ($this->numerals as $decimal => $roman) {
        array_push($numbersArray, $decimal);
      };
      sort($numbersArray);
      foreach ($numbersArray as $index => $decimal) {
        if ($decimal > $number) {
          return $numbersArray[$index - 1];
        }
      }
      return end($numbersArray);
    }

    public function toRoman() {
      $romanNumeral = array();
      while ($this->number > 0) {
        if (array_key_exists($this->number, $this->numerals)) {
          array_push($romanNumeral, $this->numerals[$this->number]);
          return implode("", $romanNumeral);
        } else {
          array_push($romanNumeral, $this->numerals[$this->lowerKey($this->number)]);
          $this->number = $this->number - $this->lowerKey($this->number);
        }
      }
    }
  }
 ?>