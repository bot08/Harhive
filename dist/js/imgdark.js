function out() {
for(i=0;i<12;i++){
    var url_img = my_data.url[Math.floor(Math.random()*my_data.url.length)];
    img = document.getElementById('out');
    img.innerHTML += '<div class="wall"><a href="{url_img}" data-lightbox="img"><img src="{url_img}" loading="lazy" class="shadow image scale" alt="content" widht="100%"><br></a> <a href="{url_img}" type="button" class="btn btn-danger shadow p-2 mb-4 button">Скачать</a></div>'.replace("{url_img}",url_img) .replace("{url_img}",url_img) .replace("{url_img}",url_img);} //Картики
    bot = document.getElementById('download');
    bot.innerHTML = '<br><button onclick="out()" type="button" class="btn btn-danger shadow p-2 mb-4 button">Загрузить ещё</button><a href="https://harhive.pp.ua/wallpaper" type="button" class="btn btn-danger shadow p-2 mb-4 button">Перезагрузить страницу</a>'; //Добавляем кнопки //Убираем прогрузить
}
//ID нужно смотреть в коде страницы в тегах div(Зачастую)
