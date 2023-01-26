<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Наши услуги</title>
	<meta charset="utf-8">
	<meta charset="ISO-8859-1">
	<link href="services.css" rel="stylesheet">
	<link rel="stylesheet" href="all.css">
	<link rel="shortcut icon" href="images/icon.png" type="image/png">
</head>
<body link="#000000" vlink="#000000" alink="#D3D3D3" bgcolor="black">
<h1><a href="./html_main.php" style="text-decoration: none;">ЭкоПарк ПКиО</a></h1>


<div class="time">
<h3>Мини-зоопарк в центре города</h3> 
<li type="circle"> Входной билетик- 100 рублей </li>
<h3>Фотосессия на территории ЭкоПарка:</h3> 
<li type="circle">Фотограф ЭкоПарка - 2000 рублей (включена аренда любого животного, кроме лошадей) </li>
<li type="circle">Со своим фотографом - 1000 рублей (включена аренда любого животного, кроме лошадей) </li>
<p style="font-weight: bolder; font-family: Arial; line-height: 5px; padding-left: 30px;">Зимнее предложение!!!</p> 
<li type="circle">Прокат снегохода - 200 рублей/ 10 минут</li>
<div class="time_oc">
<h4>Режим работы</h4>
<p>пн-пт - 11:00 - 14:00
<br>сб-вс - 11:00 - 17:00</p>
</div>
<p style="font-weight: bolder; font-style: italic;" >В связи с погодными условиями, а также в силу иных обстоятельств график работы может быть изменен.</p>
</div>

<div id="feedback" class="feedback-bg">
			<div class="feedback">
			<h2><a>Если Вы уже посетили наш ЭкоПарк, то можете оставить свой отзыв</a></h2>
			<div class="form-wrapper">
			<form method="post" class="feedback-form">
				<div class="feedback-form-col">
				<p>Ваше имя:</p>
				<input type="text" name="username" class="feedback-form-text" required placeholder="Имя">
				<p>Адрес Вашей электронной почты:</p>
				<input type="text" name="email" class="feedback-form-text" required placeholder="example@mail.com">
				<p>Пол:</p>
				<p><input type="radio" name="sex" value="male"> Мужской</p>
				<p><input type="radio" name="sex" value="female" checked> Женский</p>
				<p>Возраст:</p>
				<select name="age">
					<option disabled>Выбрать..</option>
					<option value="child"> до 12</option>
					<option value="teenager">12-25</option>
					<option value="young">26-40</option>
					<option value="adult">40+</option>
				</select>
				</div>
				<div class="feedback-form-col">
				<p>Что больше всего понравилось?</p>
					<p><input type="checkbox" name="pet" value="Общение с животными">Общение с животными</p>
					<p><input type="checkbox" name="pet" value="Уютная атмосфера"> Уютная атмосфера</p>
					<p><input type="checkbox" name="pet" value="Дружелюбный персонал">Дружелюбный персонал</p>
					<p><input type="checkbox" name="pet" value="Развлечения">Развлечения</p>
					<p><input type="checkbox" name="pet" value="Маленький Рю"> Маленький Рю</p>
					<p><input type="checkbox" name="pet" value="Другое"> Другое</p>
					</div>
				<div class="feedback-form-col">
				<p>Оставьте свой комментарий::</p>	
				<textarea name="comment" class="feedback-form-textarea" rows="8" wrap="soft" maxlength="300" required placeholder="Будем рады узнать Ваше мнение!"></textarea><br>
				<input type="submit"  name="submit" class="feedback-form-button" value="Отправить!">
				</div>
			</form>
			<?php 
			
			    $localhost = "localhost";
                $db = "EcoParkDB";
                $user = "admin";
                $password = "admin"; 
                $link = mysqli_connect($localhost, $user, $password);
                
                mysqli_query($link, "SET NAMES uft8;");
                mysqli_query($link, "SET CHARACTER SET utf8;");
                mysqli_select_db($link, $db);

                $name_u = $_POST['username'];
                $e_mail_u = $_POST['email'];
                $gendel_u = $_POST['sex'];
                $age = $_POST['age'];
                $likes = $_POST['pet'];
                $comment = $_POST['comment'];
                if ($_POST['submit'])
                {
                	$query = "INSERT INTO survey (id_u, name_u, e_mail_u, gendel_u, age, likes, comments) VALUES (NULL, '$name_u', '$e_mail_u', '$gendel_u', '$age', '$likes', '$comment');";
                	$result = mysqli_query ($link, $query);
                }
                
                
 
                 	
            ?> 
			</div>
			</div>
		</div>
		

<div id="footer">
   <pre><p> &copy;Тимошкина Анна                                                                                                       Наш контактный тел. +7(953)547-84-72                                                                           тег для поиска #ecopark_ptz</p></pre>
  </div>   
</body>
</html>