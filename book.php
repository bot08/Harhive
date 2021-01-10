<?php 

/* Указываем страницу */
$navpage="book";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="гостевая книга";   /* Текст в название страницы */
$description="Новый сайт Harhive! Более 100000 аниме артов и не только! Гостевая книга хархива.";

/* Импортируем конфиг */
include("dist/config.php");


include("pages/book.php");   /* Тут указываем нужный файл страницы */


 //футер
 if ($darkmode=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){echo "";} else{include("elements/fone.php");}}
 if ($footer=="true"){ echo $footercontent; }


 
?>