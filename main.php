<?php
//Вывод ошибок
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$order_name = $_POST['ordername'];
	$email = $_POST['email'];
	//преобразование символов и удаление пробелов
	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$name = urldecode($name);
	$email = urldecode($email);
	$name = trim($name);
	$email = trim($email);





	mail(''.$email.'', "Здравствуйте ".$name, "Имя:".$name.". E-mail: ".$email." Заказ ".$order_name."  Телефон ".$phone );
    //отправка емэйл, отправитель указан в конфигурации сервера и в sendmail.ini



?>