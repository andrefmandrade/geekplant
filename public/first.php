<?php 
session_start();

require_once("includes/header.php");

?>

<section id="first_question">
  <div class="card">
    <?php $question = $quiz->getQuestion(1); ?>
    <div class="header">
      <h1><?php echo $question['question'] ?></h1>
    </div>
    <form method="post" action="second.php" class="question">
    <input type="hidden" name="question" value="1">
      <div class="answers">
        <?php foreach ($quiz->shuffle_assoc($question['answers']) as $key => $value) { ?>
        <input type="radio" name="answer" value="<?php echo $key ?>" <?php echo $key==="a" ? "checked" : "" ?>>
        <label for="answer"><?php echo $value ?></label></br>
        <?php } ?>
      </div>
      <div class="footer">
        <button type="submit" class="form-btn">Avançar</button>
      </div>
    </form>
  </div>
</section>

<?php require_once("includes/footer.php"); ?>