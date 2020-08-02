<?php 
session_start();

require_once("includes/header.php");

if(empty($_POST) && !isset($_SESSION['answers'][4])) {
  header('Location: index.php');
}

if(!empty($_POST)) {
  $_SESSION['answers'][$_POST['question']]=$_POST['answer'];
}

?>
<section id="fifth_question">
  <div class="card">
    <?php $question = $quiz->getQuestion(5); ?>
    <div class="header">
      <h1><?php echo $question['question'] ?></h1>
    </div>
    <div class="question">
    <input type="hidden" name="question" value="5">
      <div class="answers">
        <?php foreach ($quiz->shuffle_assoc($question['answers']) as $key => $value) { ?>
        <input type="radio" name="answer" id="answer<?php echo $key?>" value="<?php echo $key ?>">
        <label for="answer<?php echo $key?>"><?php echo $value ?></label></br>
        <?php } ?>
      </div>
      <div class="footer">
        <button type="button" onclick="submit('result.php')">Finalizar</button>
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/footer.php"); ?>