<?php
  session_start();
  session_destroy();
  header("location:../muro/index.php");
?>
