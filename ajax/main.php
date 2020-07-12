<?php
$email_form = $_POST['email'];
$name_form = $_POST['name'];
$surname_form = $_POST['surname'];
$password_form = $_POST['password'];

    $name = array("Дмитрий","Анна","Ваня");     
	$email= array("van@yandex.ru","assa22@yandex.ru","aww21@mail.ru");
    $surname = array("123","123","123");
    $password = array("123","123","123");

$success = null;

foreach ($email as $z) {
	if (in_array($email_form, $email)) {
		$success = false;
		echo $success;
	}else {
		$success = true; 
		echo $success;
		
	}
}
if ($success === false) {
    $log = date('Y-m-d H:i:s') . ' '. 'Пользователь с данным email уже существует =>'. ' ' . $email_form;
    file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
}else {
    $log = date('Y-m-d H:i:s'). ' ' . 'Пользователь успешно зарегистрирован =>'. ' ' . $email_form;
	file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
}











?>
