<?php 

/* Указываем страницу */
$navpage="book";  /* Для выделения навигации, также нужно указать в файле config.php */
$pagetitle="гостевая книга";   /* Текст в название страницы */
$description="Новый сайт Harhive! Более 100000 аниме артов и не только! Гостевая книга хархива.";

/* Импортируем конфиг */
include("dist/config.php");

//Тут начинаем контейнер для контента
echo '<body class="d-flex flex-column h-100">
  <main class="container">';


include("pages/book.php");   /* Тут указываем нужный файл страницы */

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