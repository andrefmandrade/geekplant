<?php 
session_start();
session_unset();
session_destroy();

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
</body>

</html>