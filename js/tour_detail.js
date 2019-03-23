$(window).scroll(function(){
    $(".single-tour-booking").each(function(){
        var pos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        if(pos < winTop){
            $(this).addClass("sticky-top");
        }
    });
});

$(document).ready(function(){
    var arrow = $(".tour-itinerary .btn-arrow");
    arrow.click(function(){
        var body = $(this).parent().parent().find(".body");
        if( body.hasClass("d-none")){
            body.removeClass("d-none");
        }else{
            body.addClass("d-none");
        }
    });    
});
