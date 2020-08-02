<?php
if($_SERVER['HTTP_HOST'] === "localhost") {
  header('Location: /geekplant/public/index.php');
} else {
  header('Location: /public/index.php');
}
?>