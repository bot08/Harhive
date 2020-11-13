<!doctype html>
<HTML lang="ru">
  <head>
  <!-- SEO и мета теги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Новый сайт Harhive - невероятно большой архив аниме артов! Более 50000000 картинок!">
    <meta name="author" content="Harhive">
    <title>Harhive</title>
    <?php $thisPage="index"; ?>
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- Bootstrap  CSS. CSS + JS -->
    <link href="template.css?2" rel="stylesheet">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
 </head>

  <!--Навигация-->
  <body>
    <?php include("php/nav.php"); ?>
  </body>

<!-- Main для картинок -->
<body class="d-flex flex-column h-100">
<main class="container"> 
  <script src = 'js_json/urls2.json' type="text/javascript"></script> 

  <!--Запись базы -->
  <script type="text/javascript">
   var my_data = JSON.parse(data);
  </script>
    
    <!--Кастом настройка вылеза лигтбокс-->
    <script>
      lightbox.option({
        'resizeDuration': 320,
        'fadeDuration':320,
      })
  </script>
  <script src="js_json/img2.js?2"></script>

  <!--Сюда картинки-->
  <center><div id="out"> </div></center>
</main>

<!--Для кнопок и уведомлений-->
<main class="container">
  <div id="war"><p><br> </p><div class="alert alert-warning shadow p-3 mb-5" role="alert">Материал может иметь эротичные и непредсказуемые сцены! Проблемы описаны в пункте "ответы на вопросы"</div></div>
 <center id="download"><button onclick="out()" type="button" class="btn btn-light shadow p-3 mb-5">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
</svg>⠀Прогрузить </button></center>
</main>

 <!--Футер-->
 <?php include("php/footer.php"); ?>
</body>
</HTML>