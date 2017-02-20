<?php
session_start();
session_destroy();
header("Location: http://localhost/quizmaster/index.php");
?>