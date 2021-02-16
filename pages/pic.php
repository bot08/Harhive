<center>   
<?php
if($_SERVER['QUERY_STRING']>4060 || $_SERVER['QUERY_STRING']<0 ) exit('<style>body { padding-top:148px; /* (отступ сверху) */ margin:0; } </style> <center> <h1 class="display-4"><b>Страница не найдена</b></h1> <h4>404</h4> <a href="/" type="button" class="btn shadow p-2 mb-4 button btn-light"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/> </svg> На главную</a> </center> <!--Футер--> </main> <footer class="footer mt-auto py-3"> <div class="container"> <p>&copy; Harhive 2020-2021</p> </div> </footer> </body> </html>');
echo '
<img class="img-fluid shadow post fade-in" src="https://ymfkaboyrybjzj2xkeinla-on.drv.tw/light/'.$_SERVER['QUERY_STRING'].'.jpg" alt="content">';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
<script>function done(){$("#done").append('<div id="snackbar">Ссылка скопирована успешно!</div>');var x=document.getElementById("snackbar"); x.className="show shadow"; setTimeout(function(){x.className=x.className.replace("show shadow", "");}, 2970);}; </script>
<script>
jQuery(document).ready(function($){
var url = document.location.href;
new Clipboard('.copy_link', {text: function(){ return url;}});
});
</script>



  <br>
  <button onclick="done()" type="button" class="copy_link btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/> <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> </svg> Копировать ссылку на пост</button>

</center>

<div id="done"></div>