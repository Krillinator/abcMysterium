<?php

include_once("./library/MysteryGame.php");

/**
 * Game
 */
class Game extends MysteryGame
{
  public function generateMystery()
  {
    $letters = range("A", "Z");
    $answer = [];
    $mystery = [];

    shuffle($letters);

    // answer = 9 first letters 
    for ($i = 0; $i < 10; $i++) {
      $answer[] = $letters[$i];
    }

    $mystery = $answer; // 9 first letters

    shuffle($mystery); // shuffle mystery - 9 letters
    sort($answer);

    $mystery_implode = implode("", $mystery);
    $answer_implode = implode("", $answer);

    $this->mystery = [
      "mystery" => $mystery_implode,
      "answer" => $answer_implode
    ];
  }
}
