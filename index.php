<?php
if($_SERVER['HTTP_HOST'] === "localhost" || $_SERVER['HTTP_HOST'] === "127.0.0.1") {
  header('Location: /geekplant/public/index.php');
} else {
  header('Location: /public/index.php');
}
?>