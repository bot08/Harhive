<?php 

  /* 
  Куки
  */

  setcookie("wall", "f", time() + (2580000), "/wallpaper"); // на 1 день (86400 * 30)


/* Указываем страницу */
$navpage="wallpaper";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="случайные картинки";   /* Текст в название страницы */
$description="Новый сайт Harhive! Более 100000 аниме картинок и не только!";

/* Импортируем конфиг */
include("dist/config.php");


include("pages/wallpaper.php");   /* Тут указываем нужный файл страницы */

 //футер
 if ($darkmode=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){echo "";} else{include("elements/fone.php");}}
 if ($footer=="true"){ echo $footercontent; }


?>