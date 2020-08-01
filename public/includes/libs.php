<?php
require_once("../src/Quiz.php");
$quiz = new Quiz();
$select_random=array_rand($quiz->getQuestion(rand(1,5))['answers'], 1);
?>

<link rel="stylesheet" href="styles/styles.css">