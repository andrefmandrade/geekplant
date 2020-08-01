<?php 
session_start();
session_unset();
session_destroy();

require_once("includes/header.php");

?>

<section id="start">
  <div id="about">
    <h1>Bem-vindo ao Geekplant</h1>
    <p>Quer descobrir qual seriado de TV melhor te define?</p>
    <form method="post" action="first.php">
      <input type="hidden" name="action" value="first_question" />
      <button type="submit">Iniciar</button>
    </form>
  </div>
</section>

<?php require_once("includes/footer.php"); ?>