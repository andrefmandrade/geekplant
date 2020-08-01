<?php 
session_start();

require_once("includes/header.php");

if(!empty($_POST)) {
  $_SESSION['answers'][$_POST['question']]=$_POST['answer'];
}

if(count($_SESSION['answers']) !== 5) {
  header('Location: index.php');
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

$winner = $quiz->getWinner($gather_answers);

?>

<section id="result">
  <div id="serie">
    <p id="title"><?php echo explode(":", $winner['description'])[0]; ?></p>
    <p id="description"><?php echo explode(":", $winner['description'])[1]; ?></p>
    <button onclick='window.location.href = "index.php"'>Voltar</button>
  </div>
</section>

<?php require_once("includes/footer.php"); ?>