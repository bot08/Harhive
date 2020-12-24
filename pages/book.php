<h1 class="display-4"><b>Гостевая</b></h1>

<form action="#" method="post">
<fieldset>
<label>Ник:<br></label>
<input name="name" type="text" class="form-control shadow formbook 
<?php if ($darkmode=="true") echo "bg-dark text-light"?>" /></label>  <br>

<label>Текст:<br></label>
<textarea name="comment" class="form-control shadow formbook 
<?php if ($darkmode=="true") echo "bg-dark text-light"?>"> </textarea>  <br>

<label><button type="submit" class="btn shadow p-2 mb-3 
<?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8.002 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C2.425 10.515 3.59 9.982 4.61 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L7.3 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L8.002 5.013zM6.8 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z"/> <path fill-rule="evenodd" d="M10.868 4.293a.5.5 0 0 1 .7-.106l3.993 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a.5.5 0 0 1-.593-.805l4.012-2.954a.493.493 0 0 1 .042-.028.147.147 0 0 0 0-.252.496.496 0 0 1-.042-.028l-4.012-2.954a.5.5 0 0 1-.106-.699z"/> </svg> Опубликовать</button></label>
</fieldset>
</form>
<?php
if(isset($_POST['name']) || isset($_POST['comment'])|| isset($_POST['number'])) {


   
$name =  $_POST['name'];
$comment = $_POST['comment'];
//фильтер
$namef = filter_var($name, FILTER_SANITIZE_STRING);
$commentf = filter_var($comment, FILTER_SANITIZE_STRING);
if(strlen($namef)<="2" || strlen($namef)>"21" ){ die('<script>alert( "Имя должно состоять хотя бы из 3 букв" ); window.location.href = "/book";</script>');}
if(strlen($commentf)<="3" || strlen($namef)>"777"){ die('<script>alert( "Комментарий должен состоять хотя бы из 4 букв" ); window.location.href = "/book";</script>');}

  $myfile = fopen("elements/data.html", "a") or die("Что-то пошло не так :(");
	$writeInFile = "<h4><i>  Ник: &nbsp;".$namef."</i></h4>";
  $writeInFile2 = "<i>  Коментарий: &nbsp;</i>".$commentf."<hr>";
  $old = file_get_contents('elements/data.html');
  file_put_contents('elements/data.html', '');
	fwrite($myfile, $writeInFile);
  fwrite($myfile, $writeInFile2);
  fwrite($myfile, $old);
  fclose($myfile);
  echo '<script>window.location.href = "/book";</script>';
}
require "elements/data.html";
?>

 
 </main>
 <main class="container">
 <p> </p>
   <p><a class="btn shadow p-2 mb-3 <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>" data-toggle="collapse" href="#spoiler" role="button" aria-expanded="false" aria-controls="spoiler">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16"> <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/> <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/> <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/> </svg>   Правила
  </a>
  </p>
  <div class="collapse formbook" id="spoiler">
    <div class="card card-body <?php if ($darkmode=="true"){echo "bg-dark text-light";}?>">
      1.1 Любой спам запрещён<br>
      1.2 Запрещено отправлять пустые сообщения (ник не считается)<br>
      1.3 Запрещено отправлять оскорбительные сообщения<br>
      1.4 Запрещена реклама или агитация<br>
    </div>
  </div>
   </p>
  <p> </p>
 </main>