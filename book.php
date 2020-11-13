<!doctype html>
<html lang="ru">
  <head>
    <!-- SEO и мета теги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Harhive - Гостевая книга">
    <meta name="author" content="Harhive">
    <title>Harhive - Гостевая книга</title>
    <?php $thisPage="book"; ?>
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- Bootstrap  CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">
    <link href="template.css?2" rel="stylesheet">
  </head>

  <!-- Навигация -->
  <body>
    <?php include("php/nav.php"); ?>
  </body>

<!-- Контент -->
<body class="d-flex flex-column h-100">
 <main class="container">
 <h1 class="display-4"><b>Гостевая</b></h1>

<form action="#" method="post">
<fieldset>
<label for="name">Ник:<br></label><input name="name" type="text" class="form-control" /></label>  <br>
<label for="comment">Текст:<br></label><textarea name="comment" class="form-control"> </textarea>  <br>

<label for="submit"><input type="submit" name="button" id="button" value="Опубликовать" class="btn btn-light shadow">
</fieldset>
</form>
<?php
if(isset($_POST['name']) || isset($_POST['comment'])|| isset($_POST['number'])) {


   
$name = $_POST['name'];    
$comment = $_POST['comment'];
  $myfile = fopen("data.html", "a") or die("Что-то пошло не так :(");
	$writeInFile = "<h4><i>  Ник: &nbsp;".$_POST["name"]."</i></h4>";
	$writeInFile2 = "<i>  Коментарий: &nbsp;</i>".$_POST["comment"]."<hr>";
	fwrite($myfile, $writeInFile);
	fwrite($myfile, $writeInFile2);
	fclose($myfile);
}
require "data.html";
?>

 
 </main>
 <main class="container">
 <p> </p>
   <p><a class="btn btn-light shadow" data-toggle="collapse" href="#spoiler" role="button" aria-expanded="false" aria-controls="spoiler">
    Правила
  </a>
  </p>
  <div class="collapse" id="spoiler">
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

