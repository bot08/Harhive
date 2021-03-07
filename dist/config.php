<?php
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache"); 
if(!isset($navpage)){exit;}


  /* 
  Главные настройки 
  */

$sitename="Harhive";  /* Название сайта - нужно для генерации head и названии на панели навигации */

$keywords="harhive, хархив, anime, аниме, арты, эротика, смотреть";   /* Ключевые слова для поисковика (можно несколько) */

$authortag="true";  /* "true" - метатег Автор включён */
$author="harhive";  /* Содержание метатега Автор */

$autoload="true";  /* Авто подгрузка картинок */

$siteoff="false";  /* "true" - сайт в режиме обслуживания (errors/maintenance.php) */

$ddos="true";    /* "true" - ограничивает количество запросов пользователя, максимум 3 обращения за 1.5 секунды (всей нагрузки не снимает) */

$ad="false";   //рекалама
 
  /* 
  Визуальные настройки шаблона
  */

$mininav="true";  /* "true" - устанавливает контейнер для навигации */

$navico="true";  /* "true" - иконки навигации включены */

$brand="true";   /* "true" - включает бренд */

$darkmode="false";  /* "true" - включает тёмную тему */
$autodarkmode="false";   /* "true" - включает тёмную тему автоматически (для работы нужно отключить darkmode) */
$userdarkmode="true";   /* "true" - пользователь сам выбирает тему сайта */

$xmas="false";     // На новый год

$footer="true";   /* "true" - футер присутствует */


  /* 
  Настройка навигации
  */

/* Первый элемент */
$navitem1="true";    /* Существует ли элемент */

$navlink1="/";      /* Ссылка на страницу (без .php) */

$navname1="Главная";    /* Название на панели навигации (видимое) */

$navpage1="home";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */


/* Второй элемент */
$navitem2="true";     /* Существует ли элемент */

$navlink2="/wallpaper";     /* Ссылка на страницу (без .php) */

$navname2="Картинки";    /* Название на панели навигации (видимое) */

$navpage2="wallpaper";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */


/* Третий элемент */
$navitem3="true";     /* Существует ли элемент */

$navlink3="/book";     /* Ссылка на страницу (без .php) */

$navname3="Гостевая";    /* Название на панели навигации (видимое) */

$navpage3="book";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */


/* Четвёртый элемент */
$navitem4="true";     /* Существует ли элемент */

$navlink4="/faq";     /* Ссылка на страницу (без .php) */

$navname4="Частые вопросы";    /* Название на панели навигации (видимое) */

$navpage4="faq";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */



/* Пятый элемент */
$navitem7="true";     /* Существует ли элемент */

$navlink7="/about";     /* Ссылка на страницу (без .php) */

$navname7="О сайте";    /* Название на панели навигации (видимое) */

$navpage7="about";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */


/* 6 */
$navitem9="false";     /* Существует ли элемент */

$navlink9="/help";     /* Ссылка на страницу (без .php) */

$navname9="Помощь проекту";    /* Название на панели навигации (видимое) */

$navpage9="help";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */

/* 7 */
$navitem8="true";     /* Существует ли элемент */

$navlink8="https://old.harhive.pp.ua/";     /* Ссылка на страницу (без .php) */

$navname8="Старый сайт";    /* Название на панели навигации (видимое) */

$navpage8="old";    /* Указываем что за страница (То что вы указываете в $thisPage в каждом файле страницы) */

$ver="?108";


  /* 
  Настройка футера (сам код)
  */

$footercontent='
</main>
<footer class="footer mt-auto py-3">
<div class="container">

    <p>&copy; Harhive 2020-2021</p>

</div>
</footer>
</body>
</html>';   /* Содержание */



  /* 
  Другое (Постояные скрипты)
  */

if ($ddos=="true"){
    session_start();
    $time=microtime(1);
    if (!isset($_SESSION["arr_time"])) $_SESSION["arr_time"]=array(0,0,0);
    $min_time=min($_SESSION["arr_time"]);
    if ($time-$min_time < 1.2) die("<meta charset=\"utf-8\"><center><img src=\"https://www.pngjoy.com/pngl/383/7083822_girl-crying-sad-anime-girl-transparent-transparent-png.png\"><h2>Вы слишком часто обращаетесь к страничкам сайта!</h2></center>");
    $min_index=array_search($min_time,$_SESSION["arr_time"]);    
    $_SESSION["arr_time"][$min_index]=$time;
}
$timenow= date("H");
if ($autodarkmode=="true"){
    if ($timenow>= "20"|| $timenow<="04"){ $darkmode="true";}}


if($userdarkmode=="true"){
  $darkmode=$_COOKIE["dark"];
}


if ($siteoff=="true"){ if ($navpage=="404"||$navpage=="403"||$navpage=="500"){ include("maintenance.php");exit;}}


 //Определение браузера
 function getInfoBrowser(){
  $agent = $_SERVER['HTTP_USER_AGENT'];
  preg_match("/(MSIE|Opera|Firefox|Chrome|Version)(?:\/| )([0-9.]+)/", $agent, $bInfo);
  $browserInfo = array();
  $browserInfo['name'] = ($bInfo[1]=="Version") ? "Safari" : $bInfo[1];
  $browserInfo['version'] = $bInfo[2];     
  return $browserInfo;
 }
$oldbrowser="true";
$browserInfo = getInfoBrowser();


if ($browserInfo['name']=="Chrome"){
  if ($browserInfo['version']>="81"){
    $oldbrowser="false";
  }
}
if ($browserInfo['name']=="Opera"){
  if ($browserInfo['version']>="72"){
    $oldbrowser="false";
  }
}
if ($browserInfo['name']=="Safari"){
  if ($browserInfo['version']>="12"){
    $oldbrowser="false";
  }
}
if ($browserInfo['name']=="Chromium"){
  if ($browserInfo['version']>="81"){
    $oldbrowser="false";
  }
}
/* 
if ($browserInfo['name']=="Firefox"){
  if ($browserInfo['version']>="82"){
    $oldbrowser="false";
  }
}*/

  /* 
  Ниже уже заглавление страниц...
  */
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  <!-- SEO & meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Cache-Control" content="private">

    <!-- Name tags -->
    <title><?php echo $sitename; ?> - <?php echo $pagetitle; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>" >
    <meta name="author" content="<?php if ($authortag=="true") echo $author;?>">
    <?php if($darkmode=="true"){ echo '<meta name="theme-color" content="#111111">';} ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="dist/images/favicon.png" type="image/png">

    <!-- CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <link href="dist/css/template.css<?php echo $ver;?>" rel="stylesheet">
    <?php if ($darkmode=="true")  echo "<link href=\"/dist/css/dark.css\" rel=\"stylesheet\">";?>
    <?php if ($oldbrowser=="true"){ if($darkmode=="true"){echo "<link href=\"/dist/css/oldbrowser-dark.css\" rel=\"stylesheet\">";} else {echo "<link href=\"/dist/css/oldbrowser.css\" rel=\"stylesheet\">";}} ?>
    
    <!-- MainJS -->
    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/lightbox.min.js"></script>
    <?php if ($ad=="true")  echo '<script data-ad-client="ca-pub-8946219937000871" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';?>

 </head>

<?php if ($siteoff=="true"){include("errors/maintenance.php");exit;}?>


<body>
<nav class="navbar navbar-inverse navbar-expand-md navbar-light fixed-top shadow-sm p-2 mb-2 <?php if ($mininav=="true") echo "container"; ?> <?php if ($darkmode=="true") echo "navbar-dark"?>">
    <a class="navbar-brand mb-0 h1" href="#">
    <?php if($darkmode=="true"){
      if($brand=="true") echo "<img src=\"dist/images/whitelogo.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" loading=\"lazy\" alt=\"logo\">";
    }
      else{  if($brand=="true") echo "<img src=\"dist/images/favicon.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" loading=\"lazy\" alt=\"logo\">";} ?> <?php echo "$sitename" ?>
    </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span><navico><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-justify-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/> </svg></navico></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">

      <!-- Навигация -->
<?php if ($navitem1=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage1) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink1\">"; if ($navico=="true"){ echo '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg><navtext>'; } echo" $navname1</navtext></a>
      </li>";}


      if ($navitem2=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage2) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink2\">"; if ($navico=="true"){ echo '<svg width="1.0625em" height="1em" viewBox="0 0 17 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
        </svg><navtext>'; } echo" $navname2</navtext></a>
      </li>";}


      if ($navitem3=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage3) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink3\">"; if ($navico=="true"){ echo '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
          <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg><navtext>'; } echo" $navname3</navtext></a>
      </li>";}


      if ($navitem4=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage4) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink4\">"; if ($navico=="true"){ echo '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
        </svg><navtext>'; } echo" $navname4</navtext></a>
      </li>";}


      if ($navitem7=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage7) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink7\">"; if ($navico=="true"){ echo '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
          <circle cx="8" cy="4.5" r="1"/>
        </svg><navtext>'; } echo" $navname7</navtext></a>
      </li>";}


      if ($navitem9=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage9) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink9\">"; if ($navico=="true"){ echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
        </svg><navtext>'; } echo" $navname9</navtext></a>
      </li>";}


      if ($navitem8=="true"){echo "
      <li class=\"nav-item "; if ($navpage==$navpage8) echo "active"; echo "\">
        <a class=\"nav-link\" href=\""; echo"$navlink8\">"; if ($navico=="true"){ echo '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
          <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
        </svg><navtext>'; } echo" $navname8</navtext></a>
      </li>";}


      if($userdarkmode=="true"){
      if($darkmode=="true"){
        echo '<li class="nav-item">
        <a class="nav-link" href="/elements/light"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-toggle-on" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/> </svg><navtext> Тёмная тема</navtext></a>
      </li';}
      else{ echo '
      <li class="nav-item">
        <a class="nav-link" href="/elements/dark"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-toggle-off" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/></svg><navtext> Тёмная тема</navtext></a>
      </li>';}
      }


echo '    </ul>
  </div>
</nav>
</body>

<body class="d-flex flex-column h-100">
<main class="container">
';
if($xmas=="true"){ include("elements/xmas-snow.php");}
?>
