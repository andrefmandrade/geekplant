<?php 
session_start();

require_once("includes/header.php");

if(empty($_POST) && !isset($_SESSION['answers'][3])) {
  header('Location: index.php');
}

if(!empty($_POST)) {
  $_SESSION['answers'][$_POST['question']]=$_POST['answer'];
}

?>
<script>
function submit() {

  isChecked = $("input[type=radio]:checked").length;

  if(!isChecked) {
    console.log("Selecionar uma resposta");
    return;
  }

  const values = {
    question: $("input[name=question]").val(),
    answer: $("input[name=answer]:checked").val()
  }

  $.ajax({
    url: 'fifth.php',
    type: 'POST',
    data: values,

    success: function(result) {
      window.location='fifth.php';
    }
  });
}
</script>

<section id="fourth_question">
  <div class="card">
    <?php $question = $quiz->getQuestion(4); ?>
    <div class="header">
      <h1><?php echo $question['question'] ?></h1>
    </div>
    <div class="question">
    <input type="hidden" name="question" value="4">
      <div class="answers">
        <?php foreach ($quiz->shuffle_assoc($question['answers']) as $key => $value) { ?>
        <input type="radio" name="answer" id="answer<?php echo $key?>" value="<?php echo $key ?>">
        <label for="answer<?php echo $key?>"><?php echo $value ?></label></br>
        <?php } ?>
      </div>
      <div class="footer">
        <button type="button" onclick="submit()">Avançar</button>
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/footer.php"); ?>