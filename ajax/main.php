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
ob_start();
 

foreach (getallheaders() as $name => $value) {
	echo "$name: $value\n";
}
 
$log = date('Y-m-d H:i:s') . PHP_EOL . ob_get_clean() . PHP_EOL;
file_put_contents(__DIR__ . '/log.txt', $log, FILE_APPEND);










?>