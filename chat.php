<!doctype html>
<html lang="ru">
  <head>
    <!-- SEO и мета теги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Новый сайт Harhive - невероятно большой архив аниме артов!">
    <meta name="author" content="Harhive">
    <title>Harhive - чат</title>
    <?php $thisPage="chat"; ?>
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- Bootstrap  CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">
    <link href="template.css" rel="stylesheet">
  </head>

  <!-- Навигация -->
  <body>
    <?php include("php/nav.php"); ?>
  </body>

<!-- Контент -->
<body class="d-flex flex-column h-100">
<main class="container">
 <h1 class="display-4"><b>Онлайн чат</b></h1>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
 <script type="text/javascript" src="https://comet-server.ru/CometServerApi.js" ></script>
 <script type="text/javascript" src="https://comet-server.ru/doc/html_chat.js" ></script>
 <link rel="stylesheet" type="text/css" href="https://comet-server.ru/doc/html_chat.css"></link>
  
 <div id="html-chat"></div>
 <style>
 .holder-html-chat{ border: 0px solid #ccc;padding:10px;background-color: #fff;width: 320px;}
 .html-chat-history{ max-width: 320px; overflow: auto;max-height: auto; border: 1px solid #ccc;padding: 1px;}
 .html-chat-js-name{ margin-top:8px; }
 .html-chat-js-input{ max-width: 320px;max-height: 210px;width: 1540px;margin-top:12px; }
 .html-chat-js-button-holder{  margin-bottom: 0px;margin-top: 8px; }
 .html-chat-js-button-holder input{ width: 240px; }
 .html-chat-js-answer{ float:right; }
 .html-chat-js-answer a{ color: rgb(255, 255, 255);font-size: 12px; font-family: cursive;}
 .html-chat-js-answer a:hover{ color: #338;font-size: 12px; font-family: cursive;}
 .html-chat-msg{ margin: 0px; }
 </style>
 <script>
     $(document).ready(function()
     {
        CometServer().start({dev_id:3053 })
        htmljs_Chat_Init( $("#html-chat") )
     });
 </script>
 </main>
 <main class="container">
   <p>  <a class="btn btn-light shadow" data-toggle="collapse" href="#spoiler" role="button" aria-expanded="false" aria-controls="spoiler">
    Правила
  </a>
  </p>
  <div class="collapse w-50" id="spoiler">
    <div class="card card-body">
      1.1 Любой спам запрещён<br>
      1.2 Запрещено отправлять пустые сообщения (ник не считается)<br>
      1.3 Запрещено отправлять оскорбительные сообщения<br>
      1.4 Запрещена реклама или агитация<br>
    </div>
  </div>
   </p>
  <p> </p>
 </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')</script><script src="dist/js/bootstrap.bundle.min.js"></script>
 <!---->
 <?php include("php/footer.php"); ?>
</body>
</html>

