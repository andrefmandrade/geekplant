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
<section id="fourth_question">
  <?php $question = $util->getQuestion(4); ?>
  <h1>
    <?php echo $question['question'] ?>
  </h1>
  <form method="post" action="fifth.php" class="question">
  <input type="hidden" name="question" value="4">
    <div class="answers">
      <?php foreach ($util->shuffle_assoc($question['answers']) as $key => $value) { ?>
      <input type="radio" name="answer" value="<?php echo $key ?>">
      <label for="answer"><?php echo $value ?></label></br>
      <?php } ?>
    </div>
    <button type="submit">Avançar</button>
  </form>
</section>
</body>

</html>