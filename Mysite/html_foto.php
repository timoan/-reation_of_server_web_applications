<?php error_reporting( E_ERROR ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="ISO-8859-1">
	<link href="foto.css" rel="stylesheet">
	<link rel="stylesheet" href="all.css">
	<link rel="shortcut icon" href="images/icon.png" type="image/png">

<style type="text/css">
div#rotator {position:relative;
             height:150px;
             margin-left: 20%;}
div#rotator ul li {float:left; 
	              position:absolute; 
	              list-style: none;}
div#rotator ul li.show {z-index:500;}
</style>
 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="foto.js">
 
function theRotator() {
	// Устанавливаем прозрачность всех картинок в 0
	$('div#rotator ul li').css({opacity: 0.0});
 
	// Берем первую картинку и показываем ее (по пути включаем полную видимость)
	$('div#rotator ul li:first').css({opacity: 1.0});
 
	// Вызываем функцию rotate для запуска слайдшоу, 5000 = смена картинок происходит раз в 5 секунд
	setInterval('rotate()',2000);
}
 
function rotate() {	
	// Берем первую картинку
	var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));
 
	// Берем следующую картинку, когда дойдем до последней начинаем с начала
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));	
 
	// Расскомментируйте, чтобы показвать картинки в случайном порядке
	// var sibs = current.siblings();
	// var rndNum = Math.floor(Math.random() * sibs.length );
	// var next = $( sibs[ rndNum ] );
 
	// Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);
 
	// Прячем текущую картинку
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
};
 
$(document).ready(function() {		
	// Запускаем слайдшоу
	theRotator();
});
 
</script>
 
</head>

</head>
<body link="#000000" vlink="#000000" alink="#D3D3D3" bgcolor="black">

<h1><a href="./html_main.php" style="text-decoration: none;">ЭкоПарк ПКиО</a></h1>

<div id="footer">
   <pre><p> &copy;Тимошкина Анна                                                                                                       Наш контактный тел. +7(953)547-84-72                                                                           тег для поиска #ecopark_ptz</p></pre>
  </div> 

<div id="rotator">
  <ul>
    <li class="show"><a><img src="images/1.jpg" width="750" height="450"  alt="pic1" /></a></li>
    <li><a><img src="images/2.jpg" width="750" height="450"  alt="pic2" /></a></li>
    <li><a><img src="images/3.jpg" width="750" height="450"  alt="pic3" /></a></li>
  </ul>
</div>

<?php 
session_start(); 
if ($_SESSION['login'] !="") 
	{ ?> 
<div class="add">
	<p>Если вы побывали у нас в ЭкаПарке и сделали фотографии, Вы можете отправить их нам, мы отредактируем их и обязательно опубликуем в Галерее!</p>
	<form style="background: rgba(0,0,0,.6); backdrop-filter:grayscale(1) contrast(3) blur(1px); width: 350px; padding: 0.5%;" name = "file_upload" action="html_foto.php" enctype="multipart/form-data" method="post">
		<input type="file" name="file_upload" />
		<input type="hidden" name="MAX_FILE_SIZE" value="65536" />
		<input type="submit" name="submit" value="Добавить" /> 
	</form>

	<?php 
	//Сценарий отправки файла на сервер 
	//Проверяем, была ли выполнена отправка файла. Далее реализуем сценарий.  
	if ((isset($_POST["MAX_FILE_SIZE"]))&&($_POST['submit']))  {
		$tmp_file_name = $_FILES["file_upload"]["tmp_name"];
		$dest_file_name = $_SERVER['DOCUMENT_ROOT']."/Mysite/photo/".$_FILES["file_upload"]["name"];
		move_uploaded_file($tmp_file_name, $dest_file_name);  
	} ?> 


	<?php 
	    //Получаем полный путь к папке, где хранятся графические файлы
	    $image_dir_path = $_SERVER['DOCUMENT_ROOT'] . "/Mysite/photo"; 
        //Запускаем просмотр папки. Функция opendir() возвращает идентификатор папки
        $image_dir_id = opendir($image_dir_path);
        //$array_files - массив, в который будут помещаться все найденные файлы 
        $array_files = null;
        //Служебная переменная, используемая для вычисления индекса следующего элемента массива $array_files 
        $i = 0; 
        //Запускаем цикл просмотра 
        while(($path_to_file = readdir($image_dir_id)) !== false) {
        //Функция readdir() возвращает полный путь к очередному файлу, хранящемуся в папке, идентификатор которой был возвращен функцией opendir() и передан в качестве параметра.  
        //$path_to_file получает полный путь к файлу для дальнейшей обработки. Если в папке нет непросмотренных файлов - возвращается логическое значение false 
        	if(($path_to_file !=".") && ($path_to_file !="..")) {
        	//Точки обозначают вложенные файлы: одна точка - текущая папка, две точки - папка, в которую вложена текущая папка
        		$array_files[$i] = basename($path_to_file);
        		$i++;
        		//Помещаем имя найденного файла в массив $array_files. Функция basename() позволяет получить имя файла из полного пути к нему.    
        	}  
        } 
        closedir($image_dir_id); 
    }
    ?>
</div>
</body>
</html>