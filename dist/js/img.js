function out() {
for(i=0;i<12;i++){
    var url_img = my_data.url[Math.floor(Math.random()*my_data.url.length)];
    img = document.getElementById('out');
    img.innerHTML += '<div class="wall"><a href="{url_img}" data-lightbox="img"><img src="{url_img}" loading="lazy" class="shadow image scale" alt="content" widht="100%"><br></a> <a href="{url_img}" type="button" class="btn btn-light  shadow p-2 mb-4 button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16"> <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/> <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/> <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"/> </svg> Скачать</a></div>'.replace("{url_img}",url_img) .replace("{url_img}",url_img) .replace("{url_img}",url_img);} //Картики
    bot = document.getElementById('download');
    bot.innerHTML = '<div class="w-100"><button onclick="out()" type="button" class="btn btn-light shadow p-2 mb-4 button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/> </svg> Загрузить ещё</button><a href="https://harhive.pp.ua/wallpaper" type="button" class="btn btn-light  shadow p-2 mb-4 button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/> <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/> </svg> Перезагрузить страницу</a></div>'; //Добавляем кнопки //Убираем прогрузить
}
//ID нужно смотреть в коде страницы в тегах div(Зачастую)
