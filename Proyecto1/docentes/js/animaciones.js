$(".icono1").mouseover(function(){
    $(this).addClass('animated jello').one("webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd",function(){
        $(this).removeClass('animated jello');
    });
});
$(".icono2").mouseover(function(){
    $(this).addClass('animated jello').one("webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd",function(){
        $(this).removeClass('animated jello');
    });
});