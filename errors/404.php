<?php 

/* Указываем страницу */
$navpage="404";  /* Для выделения навигации */
$pagetitle="404";   /* Текст в название страницы */

/* Импортируем конфиг */
include("../dist/config.php");

?>
<head>
    <link href="https://harhive.pp.ua/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://harhive.pp.ua/dist/css/lightbox.min.css">
    <link href="https://harhive.pp.ua/dist/css/template.css" rel="stylesheet">
</head>
<style>
  
body {
    padding-top:148px; /* (отступ сверху) */
    margin:0;
  }
</style>

 <center>
   <h1 class="display-4"><b>Страница не найдена</b></h1>
   <h4>404</h4>
   <a href="/" type="button" class="btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
   </svg> На главную</a>
  </center>

  
 <!--Футер-->
 <?php 
  //футер
  if ($darkmode=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){echo "";} else{include("elements/fone.php");}}
  if ($footer=="true"){ echo $footercontent; }
 
 
 ?>