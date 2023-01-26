<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Экопарк ПКиО</title>
	<meta charset="utf-8">
	<meta charset="ISO-8859-1">
	<link href="main.css" rel="stylesheet">
	<link rel="stylesheet" href="all.css">
	<link rel="shortcut icon" href="images/icon.png" type="image/png">
</head>
<body>
<h1>ЭкоПарк ПКиО</h1>
<div class="account">	
	<p>
		<a href="./html_login.php" style="text-decoration: none;">Вход</a>
		<a href="./html_registration.php" style="text-decoration: none;">Регистрация</a><br>
		<a href="./html_logout.php" style="text-decoration: none;">Выход</a></p>
</div>

	<p><a href="#" class="advertising" title="Друзья! Как вы поступаете с живыми елочками после новогодних праздников? Относите на помойку? А вот и напрасно! Зелёная елочка порадует питомцев ЭкоПарка своим вкусом и ароматом, кому не жаль - несите зверушкам на витаминки!"> </a></p>	
<div class ="test">	
<p style="font-size: 1.2em ">Хочешь проверить свои знания о конном мире, а заодно и узнать об этих удивительных животных немного нового? Тогда этот мини-тест специально для тебя!</p>
<ol>
	<li>Какое место по интеллекту занимают лошади среди животных?</li>
	    <form action="html_main.php" method="GET" enctype="multipart/form-data">
	      <p><input type="radio" name="MyRadio" value="First1">1</p>
	      <p><input type="radio" name="MyRadio" value="Second1">5</p>
	      <p><input type="radio" name="MyRadio" value="Third1">20</p>
	      <input class="bot"  type="submit" name="submit">
        </form>
        <?php  
            $var = $_GET['MyRadio'];  
            switch($var)
            {
            	case "First1":     
            	echo "Неправльно";    
            	break;        

            	case "Second1":     
            	echo "Правильно";    
            	break;        

            	case "Third1":     
            	echo "Неправильно";    
            	break;   
            } 
        ?>

	<li>Рекордный прыжок лошади в высоту был зарегистрирован 5-го февраля 1949 капитаном конной артиллерии А.Морали. Какой была всота прыжка?</li>
	    <form action="html_main.php" method="GET" enctype="multipart/form-data">
	      <p><input type="radio" name="MyRadio" value="First2">2,5 метра</p>
	      <p><input type="radio" name="MyRadio" value="Second2">3 метра</p>
	      <p><input type="radio" name="MyRadio" value="Third2">3,5 метра</p>
	      <input class="bot" type="submit" name="submit">
        </form>
        <?php  
            $var = $_GET['MyRadio'];  
            switch($var)
            {
            	case "First2":     
            	echo "Правльно";    
            	break;        

            	case "Second2":     
            	echo "Неправильно";    
            	break;        

            	case "Third2":     
            	echo "Неправильно";    
            	break;   
            } 
        ?>
	
	<li>Лошади какой породы имеют водоотталкивающую шерсть?</li>
	    <form action="html_main.php" method="GET" enctype="multipart/form-data">
	      <p><input type="radio" name="MyRadio" value="First3">Новозеландской</p>
	      <p><input type="radio" name="MyRadio" value="Second3">Арабской</p>
	      <p><input type="radio" name="MyRadio" value="Third3">Ахалтекинской</p>
	      <input class="bot" type="submit" name="submit">
        </form>
        <?php  
            $var = $_GET['MyRadio'];  
            switch($var)
            {
            	case "First3":     
            	echo "Правльно";    
            	break;        

            	case "Second3":     
            	echo "Неправильно";    
            	break;        

            	case "Third3":     
            	echo "Неправильно";    
            	break;   
            } 
        ?>
	
	<li>Самая смелая лошадь - Буцефал Александра Македонского. Боевой конь не боялся ничего, кроме ...</li>
	    <form action="html_main.php" method="GET" enctype="multipart/form-data">
	      <p><input type="radio" name="MyRadio" value="First4">грозы</p>
	      <p><input type="radio" name="MyRadio" value="Second4">хозяина</p>
	      <p><input type="radio" name="MyRadio" value="Third4">своей тени</p>
	      <input class="bot" type="submit" name="submit">
        </form>
        <?php  
            $var = $_GET['MyRadio'];  
            switch($var)
            {
            	case "First4":     
            	echo "Неправльно";    
            	break;        

            	case "Second4":     
            	echo "Неправильно";    
            	break;        

            	case "Third4":     
            	echo "Правильно";    
            	break;   
            } 
        ?>
</ol>
</div>

<div id="menu" class="menu-bg">
			<div class="menu-page">
				<div class="menu">
					<a href="./html_foto.php"><div class="menu-item" style="height: auto;">
						<img class="menu-item-pic" src="./images/m1.jpg">
						<p class="menu-item-caption">Фотогалерея</p>
					</div></a>
					<a href="./html_services.php"><div class="menu-item" style="height: auto;">
						<img class="menu-item-pic" src="./images/m2.jpg">
						<p class="menu-item-caption">Услуги</p>
					</div></a>
					<a href="./html_place.php"><div class="menu-item" style="height: auto;">
						<img class="menu-item-pic" src="./images/m3.jpg">
						<p class="menu-item-caption">Как нас найти</p>
					</div></a>
				</div>
			</div>
		</div>

<div id="footer">
   <pre><p> &copy;Тимошкина Анна                                                                                                       Наш контактный тел. +7(953)547-84-72                                                                           тег для поиска #ecopark_ptz</p></pre>
</div>   
</body>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</html>
