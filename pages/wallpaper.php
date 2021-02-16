<!-- Main для картинок -->
<body class="d-flex flex-column h-100">
<main class="container"> 
  <script src = 'dist/js/urls2.json' type="text/javascript"></script> 

  <!--Запись базы -->
  <script type="text/javascript">
   var my_data = JSON.parse(data);
  </script>
    
    <!--Lightbox-->
    <script>
      lightbox.option({
        'resizeDuration': 320,
        'fadeDuration':320,
      })
  </script>
  <script src="<?php if ($darkmode=="true"){ echo "dist/js/imgdark.js?2";} else{ echo "dist/js/img.js?2";} ?>"></script>

  <!--Сюда картинки и уведомления-->
  <?php
  if(!isset($_COOKIE["wall"])) { 
  include("elements/pop2.php"); } 
  echo "<div><p> <br> </p></div>";
?>


  <center><div id="out"> </div></center>
</main>

<!--Для кнопок и уведомлений-->
<main class="container">
 <center id="download"><button onclick="out()" type="button" class="btn shadow p-2 mb-3 <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
</svg>⠀Прогрузить</button></center>
</main>