<?php 
session_start();

require_once("../src/Util.php");
$util = new Util();

if(!isset($_POST['question']) || !isset($_POST['answer'])) {
  header('Location: index.php');
}

if(isset($_POST)) {
  $_SESSION['answers'][$_POST['question']]=$_POST['answer'];
}

$gather_answers = [
  "a" => [
    "occurrences" => 0,
    "last_ocurrence" => 0
  ],
  "b" => [
    "occurrences" => 0,
    "last_ocurrence" => 0
  ],
  "c" => [
    "occurrences" => 0,
    "last_ocurrence" => 0
  ],
  "d" => [
    "occurrences" => 0,
    "last_ocurrence" => 0
  ],
  "e" => [
    "occurrences" => 0,
    "last_ocurrence" => 0
  ],
];

foreach ($_SESSION['answers'] as $key => $value) {
  $gather_answers[$value]["occurrences"]+=1;
  $gather_answers[$value]["last_ocurrence"]=$key;
}

var_dump($gather_answers);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geekplant</title>

  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
<section id="result">
  
</section>
</body>

</html>