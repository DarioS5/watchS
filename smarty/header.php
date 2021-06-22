<?php
session_start();
define("SMARTY_LIB","libs/");// константа зберігає шлях до смарту бібліотеки
require_once(SMARTY_LIB."Smarty.class.php");// підключаємо основний файл смарту бібліотеки
$smarty_main=new Smarty();// створюємо обєкт смарті на основі класу для роботи з тпл файлом
require_once("admin/param.php");

?>