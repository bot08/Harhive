$(function () {
        var jqBar = $('#watch'); // селектор для блока
        var jqBarStatus = true;
        $(window).scroll(function() { 
            var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus) { 
                
                img = document.getElementById('out');
                for(i=0;i<3;i++){
                var url_img = Math.floor(Math.random() * 4059);
                img.innerHTML += '<a href="https://ymfkaboyrybjzj2xkeinla-on.drv.tw/light/{url_img}.jpg" data-lightbox="img"><img class="img-fluid shadow image scale size" src="/dist/prevLight/{url_img}.jpg" loading="lazy" alt="content"></a>'.replace("{url_img}",url_img) .replace("{url_img}",url_img); //Картики
                }  
            }
        });
});