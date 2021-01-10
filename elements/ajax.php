<?php
die("Функция не готова");
$log1=0;

$log2=15;



if ($darkmode=="true"){
  while($log1!=$log2){
  $url = rand(0, 4059);
  echo '<a href="https://ymfkaboyrybjzj2xkeinla-on.drv.tw/light/'; echo ($url); echo'.jpg" data-lightbox="img"><img class="img-fluid shadow image scale size" src="/dist/prevLight/'; echo ($url); echo'.jpg" loading="lazy" alt="content"></a>';
  $log1++;
  }
}
else{
  while($log1!=$log2){
    $url = rand(0, 4059);
    echo '<a href="https://ymfkaboyrybjzj2xkeinla-on.drv.tw/light/'; echo ($url); echo'.jpg" data-lightbox="img"><img class="img-fluid shadow image scale size" src="/dist/prevLight/'; echo ($url); echo'.jpg" loading="lazy" alt="content"></a>';
    $log1++;
    }
}


?>