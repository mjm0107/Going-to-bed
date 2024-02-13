<?php

class StringUtilities {

  public static function secondCase($string) {
    if(strlen($string) >= 2) {
      $string[1] = strtoupper($string[1]);
    }
    return $string;
  }
}

class Pajamas {
  private $owner, $fit, $color;

  function __construct($owner="Katrina", $fit="medium", $color="blue") {
    $this->owner = StringUtilities::secondCase($owner);
    $this->fit = strtolower($fit);
    $this->color = strtolower($color);
  }

  public function describe() {
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }
  public function setFit($fit) {
    $this->fit = $fit;
  }
}

class ButtonablePajamas extends Pajamas {
  private $button_state = "unbuttoned";

  public function describe() {
    return parent::describe() . " They are also $this->button_state.";
  }
  public function toggleButtons() {
    $this->button_state = "unbuttoned" ? "buttoned" : "unbuttoned";
  }
}

$chicken_PJs = new Pajamas("CHICKEN", "Medium", "yellow");
echo $chicken_PJs->describe() . "\n";
$chicken_PJs->setFit("Small");
echo $chicken_PJs->describe() . "\n";
$moose_PJs = new ButtonablePajamas("moose", "kinda loose", "summer blues");
echo $moose_PJs->describe() . "\n";
$moose_PJs->toggleButtons();
echo $moose_PJs->describe() . "\n";
