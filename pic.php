<?php 
/* Указываем страницу */
$navpage="pic";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="пост #".$_SERVER['QUERY_STRING'];   /* Текст в название страницы */
$description="Детально о посте";

/* Импортируем конфиг */
include("dist/config.php");


include("pages/pic.php");   /* Тут указываем нужный файл страницы */


 //футер
 if ($darkmode=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){echo "";} else{include("elements/fone.php");}}
 if ($footer=="true"){ echo $footercontent; }

?>