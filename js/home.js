$(window).scroll(function(){
    $(".search-form").each(function(){
        var pos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        var searchOption1 = $(".search-option-1");
        var searchOption2 = $(".search-option-2");
        var searchOption3 = $(".search-option-3");
        var content = $(".render");
        var formSearch = $(".form-search");
        var contentShow = $(".content-show");
        var searchFormTitle = $(".search-form-title");
        if(pos < winTop){
            $(this).addClass("fixed-top w-auto search-form-top");
            $(this).addClass("");
            searchOption1.addClass("col-3");
            searchOption2.addClass("col-4");
            searchOption3.addClass("col-2");
            formSearch.addClass("container form-search-top");
            content.addClass("d-none");
            contentShow.removeClass("content-show-big");
            searchFormTitle.addClass("d-none");
        }
        if(winTop < 430){
            $(this).removeClass("fixed-top w-auto search-form-top");
            searchOption1.removeClass("col-3");
            searchOption2.removeClass("col-4");
            searchOption3.removeClass("col-2");
            formSearch.removeClass("container form-search-top");
            content.removeClass("d-none");
            contentShow.addClass("content-show-big");
            searchFormTitle.removeClass("d-none");
        }
    });
});

$(document).ready(function(){
    $(".btn-next-tour").click(function(){
        var tourItems = $(this).parent().parent();
        tourItems.animate({scrollLeft: '+=250'}, 300, 'swing');
    });
    $(".btn-pre-tour").click(function(){
        var tourItems = $(this).parent().parent();
        tourItems.animate({scrollLeft: '-=250'}, 300, 'swing');
    });
});