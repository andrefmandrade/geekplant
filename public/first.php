<?php 
session_start();

require_once("../src/Util.php");
$util = new Util();

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
<section id="first_question">
  <?php $question = $util->getQuestion(1); ?>
  <h1>
    <?php echo $question['question'] ?>
  </h1>
  <form method="post" action="second.php" class="question">
  <input type="hidden" name="question" value="1">
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