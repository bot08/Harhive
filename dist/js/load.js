$(document).ready(function(){
    var now = false;
        var jqBar = $('#watch');
        var jqBarStatus = true;
        $(window).scroll(function() { 
            var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus && !now) { 
                now = true;
                for(i=0;i<15;i++){
                var url_img = Math.floor(Math.random() * 7059);
                $("#out").append('<a href="https://ymfkaboyrybjzj2xkeinla-on.drv.tw/light/'+url_img+'.jpg" data-lightbox="img"><img class="img-fluid shadow image scale size" src="/dist/prevLight/'+url_img+'.jpg" loading="lazy" alt="content"></a>');}
                now = false;
            }
        });
});