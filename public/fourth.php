<?php 
session_start();

require_once("includes/header.php");

if(!isset($_POST['question']) || !isset($_POST['answer'])) {
  header('Location: index.php');
}

if(isset($_POST)) {
  $_SESSION['answers'][$_POST['question']]=$_POST['answer'];
}

?>
<section id="fourth_question">
  <div class="card">
    <?php $question = $quiz->getQuestion(4); ?>
    <div class="header">
      <h1><?php echo $question['question'] ?></h1>
    </div>
    <form method="post" action="fifth.php" class="question">
    <input type="hidden" name="question" value="4">
      <div class="answers">
        <?php foreach ($quiz->shuffle_assoc($question['answers']) as $key => $value) { ?>
        <input type="radio" name="answer" id="answer<?php echo $key?>" value="<?php echo $key ?>" <?php echo $key===$select_random ? "checked" : "" ?>>
        <label for="answer<?php echo $key?>"><?php echo $value ?></label></br>
        <?php } ?>
      </div>
      <div class="footer">
        <button type="submit">Avançar</button>
      </div>
    </form>
  </div>
</section>

<?php require_once("includes/footer.php"); ?>