// alert("JavaScriptを実行しています");
$(function(){
    // navbar
    $('.menu-icon').click(function(){
        if($('.menu-icon').hasClass('opened') ){
            $('.menu-icon').removeClass('opened');
            $('.header-center').fadeOut();
        }else{
            $('.menu-icon').addClass('opened');
            $('.header-center').fadeIn();
        };
    });

    // dashboard
    $('#mainVisual').hide().fadeIn(2000);
    $('.angle').hide().fadeIn(3000);
    
    // hair catalog
    $('.catalog-photo').css('display', 'none').fadeIn(2500);

    // stylist
    $('.staff_img').css('display', 'none').fadeIn(2500);
});
