<?php 

/* Указываем страницу */
$navpage="help";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="благодарности и помощь";   /* Текст в название страницы */
$description="Новый сайт Harhive! Более 100000 аниме артов и не только!";

/* Импортируем конфиг */
include("dist/config.php");

//Тут начинаем контейнер для контента
echo '<body class="d-flex flex-column h-100">
  <main class="container">';


include("pages/help.php");   /* Тут указываем нужный файл страницы */

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