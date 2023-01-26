<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Выход</title>
</head>
<body>

</body>
</html>
<?php 
	session_start();
	session_destroy();
	echo "Вы вышли"."<br>";
	echo '<a href = "default.php">На главную</a>'; 
?>