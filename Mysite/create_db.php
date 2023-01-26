<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php  
	    $link = mysqli_connect ("localhost", "root", ""); 
	    if ($link) {
	    	echo "Соединение с сервером установлено", "<br>";
	    } 
	    else {  
	        echo "Нет соединения с сервером";
	    } 
 
	    $db = "EcoParkDB"; 
	    $query = "CREATE DATABASE $db";   
	    $create_db = mysqli_query($link, $query); 
	    if ($create_db) {
	    	echo "База данных $db успешно создана"; 
	    } 
	    else {
	    	echo "База не создана"; 
	    }
	?><br>
	<?php    
	    $query = "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION";
	    $create_admin = mysqli_query($link, $query); 
	    if ($create_admin) {
	    	echo "Администратор доступен"; 
	    } 
	    else {
	    	echo "Администратор не доступен"; 
	    } 
	?> 
</body>
</html>