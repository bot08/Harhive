<?php 

  /* 
  Куки
  */
  
  $cookie_wall = "wall";
  setcookie($cookie_wall, time() + (2580000), "/"); // на 1 день (86400 * 30)


/* Указываем страницу */
$navpage="wallpaper";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="обои";   /* Текст в название страницы */
$description="Новый сайт Harhive! Более 100000 аниме обоев и не только!";

/* Импортируем конфиг */
include("dist/config.php");

//Тут начинаем контейнер для контента
echo '<body class="d-flex flex-column h-100">
  <main class="container">';


include("pages/wallpaper.php");   /* Тут указываем нужный файл страницы */

// Конец контейнера
echo '  </main>';


 //футер
 if ($darkmode=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){echo "";} else{include("elements/fone.php");}}
 if ($footer=="true"){ echo $footercontent; }


 //Закрываем страницу
echo' 
</body>
</html>'
?>