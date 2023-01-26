<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Вsход</title>
	<meta charset="utf-8">
	<meta charset="ISO-8859-1">
	<link href="login.css" rel="stylesheet">
	<link rel="stylesheet" href="all.css">
	<link rel="shortcut icon" href="images/icon.png" type="image/png">
</head>
<body>
	<h1><a href="./html_main.php" style="text-decoration: none; color: #000000">ЭкоПарк ПКиО</a></h1>

    <div id="footer">
   <pre><p> &copy;Тимошкина Анна                                                                                                       Наш контактный тел. +7(953)547-84-72                                                                           тег для поиска #ecopark_ptz</p></pre>
  </div>

  <?php
  session_start();
  session_destroy();
  echo "Удачного дня! Надеемся на скорую встречу с Вами."; 
  ?>
</body>
</html>