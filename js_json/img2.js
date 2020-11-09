function out() {
for(i=0;i<18;i++){
    var url_img = my_data.url[Math.floor(Math.random()*my_data.url.length)];
    img = document.getElementById('out');
    img.innerHTML += '<a href="{url_img}" data-lightbox="img"><img src="{url_img}" loading="lazy" class="img-fluid p-1 shadow image scale" alt="content" width="30%"></a>'.replace("{url_img}",url_img) .replace("{url_img}",url_img);} //Картики
    bot = document.getElementById('download');
    bot.innerHTML = '<button onclick="out()" type="button" class="btn btn-light shadow p-3 mb-5 button">Загрузить ещё</button><a href="https://harhive.pp.ua/" type="button" class="btn btn-light  shadow p-3 mb-5 button">Перезагрузить страницу</a>'; //Добавляем кнопки
    war = document.getElementById('war');
    war.innerHTML = ''; //Убираем прогрузить
}
//ID нужно смотреть в коде страницы в тегах div(Зачастую)
