<?php 

/* Указываем страницу */
$navpage="about";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="о сайте";   /* Текст в название страницы */
$description="О навом сайте хархив.";

/* Импортируем конфиг */
include("dist/config.php");


include("pages/about.php");   /* Тут указываем нужный файл страницы */


 //футер
 if ($darkmode=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){echo "";} else{include("elements/fone.php");}}
 if ($footer=="true"){ echo $footercontent; }



?>