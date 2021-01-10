<h1 class="display-4"><b>О сайте</b></h1>
 <p>Хархив - это большой архив аниме артов. История сайта очень долгая и тяжёлая. Дата основания 10 апреля 2019 года, именно в этот день был создан старый сайт Хархив. Тогда он назывался ещё Harchive от слов hentai и archive. Оригинальная идея была в предоставлении функции скачивания архивов с хентай картинки, но с версии 2.0 сайт начал отходить от этой затеи и ориентироваться на онлайн просмотр.</p>

 <center><img src="dist/images/h2.png" class="img-fluid shadow p-0 mb-0 rounded" alt="harhive 2.14" width="92%"></center>

 <P><br>Но всё же старый сайт сохранил в себе ту самую частичку. После версии 5.0 в названии была убрана буква c так и получился harhive (Хархив). Новый сайт всегда переделывался и был полем для экспериментов. Изначально он был построен на базе CMS с затеей что каждый может добавить свой материал, но тут же возникло 3 проблемы. Первая в сильной нагрузке на сервер, так как он один на два сайта. Вторая в слабой гибкости и частых ошибках в конце. А третья в маленьком количестве памяти на сервере, всего 1 гигабайт.</P>

 <center><img src="dist/images/old1.png" class="img-fluid shadow p-0 mb-0 rounded" alt="harhive CMS" width="92%"></center>

 <p><br>После чего было принято решение написать Хархив с 0, но учитывая прошлые ошибки и проблемы. Конечно без жертв не обошлось. В первую очередь пострадает бек сайта, тоисть не будет регистрации и добавления собственных материалов. Но в этом и плюс, так как при таком раскладе нет нагрузки на сервер и больше скорость загрузки страниц. Всё остальное осталось на примерно таком же уровне. Сейчас новый сайт не предоставляет скачивание архивов с хентаем (только на старом), но на нём более 5000000 разных аниме артов!</p>

 <center><img src="dist/images/newh2.png" class="img-fluid shadow p-0 mb-0 rounded" alt="harhive CMS" width="92%"></center>

 <p><br>Сверху скриншот первой рабочей версии - 0.42. Отображались картинки тогда на весь экран и загружалось сразу 72 штуки, в большом разрешении. Но с каждым новым обновлением он становился лучше. В версии 0.8 он был переписан на php. Есть все копии от версии 0.2 до 1.0 (включая беты), так что если хотите посмотреть напишите на почту <b>info.harhive@gmail.com</b>.   </p>
 
 <center><img src="dist/images/h0-91.png" class="img-fluid shadow p-0 mb-0 rounded" alt="harhive 0.91" width="92%"></center>

 <p><br>(Сверху скриншот версии 0.91 с включённым новогоднем оформлением)<br> В начале была идея просто доработать версию 0.9 до идеала и исправить большинство багов и заменить картинки на более качественные. Но по мере разработки было принято ряд решений, которые сильно изменили суть релиза.<br><br>
С начало было принято перелопатить дизайн сайта. Первая бета-версия была отвратительная и выглядела ужасно. Но по мере вносились правки и стало выглядеть лучше.</p>

<center><img src="dist/images/beta1.png" class="img-fluid shadow p-0 mb-0 rounded" alt="harhive 1.0beta1" width="92%"></center>

<p><br>Ну и чтобы дать разнообразие была добавлена белая тема. На виртуальном сервере всё работало отлично, но возникли трудности этапе теста на хостинге. Как оказалось из-за кеша она ломалась и функция возврата на предыдущею страницу не работала. Поэтому было принято решение сделать тему автоматической, так как никаких проблем обнаружено не было.<br><br>
Также мы перешли на собственные сервера с картинками ну и изменился подход с загрузкой картинок (перешли на php с  js). Теперь у нас есть миниатюры картинок и сами картинки, также это повлияло на скорость подгрузки и восприятия сайта. <br><br>
Сейчас будем делать симбиоз js и php. </p>

 <p><br>  </p>
</main>

<main class="container">
  <p><code>Version 1.02</code></p>
  <center>
  <a href="/help" type="button" class="btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><like class="<?php if ($darkmode!="true"){echo "text-danger";};?>"><?php echo '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/> </svg>';?></like> Благодарности и помощь</a>
  </center>
  <hr>


  <center>
  <a href="https://admin.harhive.pp.ua/copy" type="button" class="btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>">&copy Copyright</a>
  <a href="https://admin.harhive.pp.ua/legal-note" type="button" class="btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/> <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> </svg> Legal note</a>
  <br>  
  <a href="https://admin.harhive.pp.ua/dmca" type="button" class="btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/> </svg> DMCA</a>
  <a href="https://admin.harhive.pp.ua/" type="button" class="btn shadow p-2 mb-4 button <?php if ($darkmode=="true"){echo "btn-danger";} else{echo "btn-light";} ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/> <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/> </svg> Your Harhive</a>

</center>

</main>
