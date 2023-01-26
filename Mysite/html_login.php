<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<meta charset="utf-8">
	<meta charset="ISO-8859-1">
	<link href="login.css" rel="stylesheet">
	<link rel="stylesheet" href="all.css">
	<link rel="shortcut icon" href="images/icon.png" type="image/png">
</head>
<body>
	<h1><a href="./html_main.php" style="text-decoration: none; color: #000000">ЭкоПарк ПКиО</a></h1>
	<div class="in">
	<form method="post"> 
		<p>Логин: <input type="text" name="login" size="32"></p>
		<p>Пароль: <input type="password" name="password" size="30"></p>
		<div class="button"><input type="submit" name="submit" value="Вход" /></div>
	</form>
	</div>

	<?php
    $localhost = "localhost";
    $db = "EcoParkDB";
    $user = "admin";
    $password = "admin"; 
    $link = mysqli_connect($localhost, $user, $password);
                
    mysqli_query($link, "SET NAMES uft8;");
    mysqli_query($link, "SET CHARACTER SET utf8;");
    mysqli_select_db($link, $db);

    $login = $_POST['login'];
    $password = $_POST['password']; 
    ?>

    <?php
    if(($login != "")&&($password != ""))  {
	    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
	    $send_query = mysqli_query($link, $query);
	    $user_array = mysqli_fetch_array($send_query);
	    $login = $user_array['login'];
	    $name = $user_array['name'];
	    $e_mail = $user_array['e_mail'];
	    $gendel = $user_array['gendel'];
	    $count = mysqli_num_rows($send_query);
	    if ($count >0)    {
		    session_start();
		    $_SESSION['login'] = $login;
		    $_SESSION['name'] = $name;
		    $_SESSION['e_mail'] = $e_mail;
		    $_SESSION['gendel'] = $gendel;
		        echo 'Добро пожаловать!';
	        }
	        else {
		        echo "Извините, Вы не зарегистрированы.";
	        }
        }  
    ?>
    <div id="footer">
   <pre><p> &copy;Тимошкина Анна                                                                                                       Наш контактный тел. +7(953)547-84-72                                                                           тег для поиска #ecopark_ptz</p></pre>
  </div>  
</body>
</html>

