<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
    <meta charset="utf-8">
    <meta charset="ISO-8859-1">
    <link href="reg.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/png">
</head>
<body>
    <h1><a href="./html_main.php" style="text-decoration: none; color: #000000">ЭкоПарк ПКиО</a></h1>
    <div class="inn">
        <h3 style="font-size: 30px; margin-left: 20%;">Регистрация</h3>
        <form method="post">
            <p>Имя: <input type="text" name="name" size="30" required placeholder="Имя"></p>
            <p>Адрес электронной почты: <input type="text" name="e_mail" size="30" required placeholder="example@mail.com"></p>
		    <p>Логин: <input type="text" name="login" size="30"></p>
		    <p>Пароль: <input type="password" name="password" size="30"></p>
		    <p>Пол: <select name = "gendel" size="1">
                <option value="male">Мужчина</option>
    		    <option value="female">Женщина</option>
    	    </select></p>
		    <input class="button" type="submit" name="submit" value="Добавть" />
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

    $name = $_POST['name'];
    $email = $_POST['e_mail'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $gendel = $_POST['gendel'];
    
    if (($_POST['submit'])&&($name != "")&&($email != "")&&($login != "")&&($password != ""))
    {
        $query = "INSERT INTO users (id, login, password, name, e_mail, gendel) VALUES (NULL, '$login', '$password', '$name', '$email', '$gendel');";
        $result = mysqli_query ($link, $query);
    }

    ?>
        <div id="footer">
            <pre><p> &copy;Тимошкина Анна                                                                                                       Наш контактный тел. +7(953)547-84-72                                                                           тег для поиска #ecopark_ptz</p></pre>
        </div>    
</body>
</html>