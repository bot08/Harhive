  <!--Сюда картинки и уведомления-->
<?php
if(!isset($_COOKIE["yes"])) { 
  include("elements/pop1.php");
  echo '<script>$.ajax({
    type: "GET",url: "elements/ajax1.php",
    success: function(data){}})</script>';}
?>

<a onclick="layout()" class="m-2 <?php if($darkmode=="true"){echo "text-light";} else{echo "text-dark";}?>"><?php if($_COOKIE["yes"]=="2"){echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16"> <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/> </svg>';} else{echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16"> <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/> </svg>';}?>  на страницу поста</a>
  <script>
function layout() {
  $.ajax({
    type: "GET",
    url: 'elements/ajax<?php if($_COOKIE["yes"]=="2"){echo "1";}else{echo "2";}?>.php',
    success: function(data){
      window.location.href = "/";
    }
});
}
</script>

<div>
<?php
$log1=0;

if($autoload=="true"){
  $log2=30;
}
else{
  $log2=75;
}

if ($_COOKIE["yes"]=="2"){
  while($log1!=$log2){
  $url = rand(0, 4059);
  echo '<a href="/pic?'; echo ($url); echo'"><img class="img-fluid shadow image scale size fade-in" src="/dist/prevLight/'; echo ($url); echo'.jpg" loading="lazy" alt="content"></a>';
  $log1++;
  }
}
else{
  while($log1!=$log2){
    $url = rand(0, 4059);
    echo '<a href="https://ymfkaboyrybjzj2xkeinla-on.drv.tw/light/'; echo ($url); echo'.jpg" data-lightbox="img"><img class="img-fluid shadow image scale size fade-in" src="/dist/prevLight/'; echo ($url); echo'.jpg" loading="lazy" alt="content"></a>';
    $log1++;
    }
}

echo "</div>
<div id=\"out\">
</div>";

if($autoload=="true"){
        if($_COOKIE["yes"]=="2"){
          echo '  <script src = "dist/js/load2.js" type="text/javascript"></script>';}
             else{
              echo '  <script src = "dist/js/load.js" type="text/javascript"></script>';} 
echo'              
<div class="d-flex justify-content-center m-3" id="watch" style="height: 121px;">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>';
}
else{
  echo '
  <center>
  <a href="/" type="button" class="btn shadow p-2 mb-4 button '; if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} echo '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/> <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/> </svg> Обновить картинки</a>
</center>
';
}

?>

    <!--Lightbox-->
    <script>
      lightbox.option({
        'resizeDuration': 320,
        'fadeDuration':320,
      })
    </script>


