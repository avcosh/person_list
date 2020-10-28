<?php
//Подключаем необходимые файлы
require_once 'config/config.php';
require_once 'vendor/PDOAdapter.php';
require_once 'vendor/MyLogger.php';

// Создаем объект класса MyLogger
$myLogger = new MyLogger('logs/logs.txt');
// Создаем объект класса PDOAdapter 
$pdoAdapter = new PDOAdapter($dsn, 'root', '', $myLogger);

// Соединяемся с базой данных
$db = $pdoAdapter->getDbh(); 

//Определяем максимальный возраст
$sql = 'SELECT DISTINCT max(age) FROM person';
$age = $pdoAdapter->execute('selectOne', $sql );

//Находим любую персону, у которой mother_id не задан и возраст меньше максимального
$sql = 'SELECT * FROM person WHERE `mother_id` IS NULL AND `age` < 46 LIMIT 1';
$person = $pdoAdapter->execute('selectOne', $sql );

//Изменяем у нее возраст на максимальный
$sql = 'UPDATE person SET age = 46 where `mother_id` IS NULL AND `age` < 46 LIMIT 1';
$pdoAdapter->execute('execute', $sql );

//Получаем список персон максимального возраста (фамилия, имя). Желательно НЕ ИСПОЛЬЗУЯ полученное на шаге 1 значение.
$sql = 'SELECT lastname, firstname, age FROM person WHERE age = (SELECT max(age) FROM person) ORDER BY lastname ASC, firstname ASC';
$persons_list = $pdoAdapter->execute('selectAll', $sql );

// Подключаем вид
require_once('views/view.php');  
        
		




