$(window).scroll(function () {
    $(".single-tour-tab").each(function () {
        var pos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        if (pos < winTop) {
            $(this).addClass("sticky-top");
        }
    });
});

$(document).ready(function () {
    var item = $(".tour-itinerary").find(".item");
    var timeLineNavItem = $(".timeline-nav-item");
    timeLineNavItem.click(function (e) {
        var body = item.eq($(this).index());
        item.addClass("d-none");
        body.removeClass("d-none");
        if ($(this).hasClass("active")) {
            e.preventDefault();
        }
        else {
            timeLineNavItem.removeClass("active");
            $(this).addClass("active");
            var offsetTimelineItem = $(this).offset().left;
            console.log(offsetTimelineItem);
            var timelineNav = $(".timeline-nav");
            console.log($(body).width());
            if (offsetTimelineItem >= $(body).width()*4/5)
                timelineNav.animate({ scrollLeft: '+=100' }, 300, 'swing');
                if (offsetTimelineItem <= $(body).width()*1/4)
                timelineNav.animate({ scrollLeft: '-=100' }, 300, 'swing');
        }
    });
});

$(document).ready(function () {
    var imgs = $(".img-slideshow img");
    var slideIndex = 0;
    var imgThumbnail = $(".img-info .item")
    $(".btn-next-img").click(function () {
        imgs.eq(slideIndex).fadeOut();
        imgs.eq(slideIndex).addClass("d-none");
        imgThumbnail.eq(slideIndex).removeClass("active");
        s1 = imgThumbnail.eq(slideIndex).offset().top;
        if (slideIndex == imgs.length - 1)
            slideIndex = 0;
        else
            slideIndex++;
        imgs.eq(slideIndex).fadeIn();
        imgs.eq(slideIndex).removeClass("d-none");
        var item = imgThumbnail.eq(slideIndex);
        var imgInfo = $(".img-info");
        item.addClass("active");
        var s2 = item.offset().top;
        var s = Math.abs(s1 - s2);
        if (item.offset().top + item.height() > imgInfo.offset().top + imgInfo.height())
            $(".img-info").animate({ scrollTop: '+=' + s }, 300, 'swing');
        if (slideIndex == 0)
            $(".img-info").animate({ scrollTop: '-=' + s }, 300, 'swing');
    });
    $(".btn-pre-img").click(function () {
        imgs.eq(slideIndex).fadeOut();
        imgs.eq(slideIndex).addClass("d-none");
        imgThumbnail.eq(slideIndex).removeClass("active")
        s1 = imgThumbnail.eq(slideIndex).offset().top;
        if (slideIndex == 0)
            slideIndex = imgs.length - 1;
        else
            slideIndex--;
        imgs.eq(slideIndex).fadeIn();
        imgs.eq(slideIndex).removeClass("d-none");
        var item = imgThumbnail.eq(slideIndex);
        var imgInfo = $(".img-info");
        item.addClass("active");
        var s2 = item.offset().top;
        var s = Math.abs(s1 - s2);
        if (item.offset().top < imgInfo.offset().top)
            $(".img-info").animate({ scrollTop: '-=' + s }, 300, 'swing');
        if (slideIndex == imgs.length - 1)
            $(".img-info").animate({ scrollTop: '+=' + s }, 300, 'swing');
    });

    imgThumbnail.each(function (index) {
        $(this).click(function (e) {
            if (!$(this).hasClass("active")) {
                imgs.eq(slideIndex).fadeOut();
                imgs.eq(slideIndex).addClass("d-none");
                imgThumbnail.eq(slideIndex).removeClass("active");

                slideIndex = index;
                imgs.eq(slideIndex).fadeIn();
                imgs.eq(slideIndex).removeClass("d-none");
                $(this).addClass("active");
            }
        });
    });
});

$(document).ready(function () {
    var selectWrapper = $(".select-wrapper");
    var btnMinus = selectWrapper.find(".minus");
    btnMinus.click(function () {
        var item = $(this).parent().find(".form-control");
        var value = item.val();
        if (value != 0) {
            value--;
            item.val(value);
        }
    });
    var btnPlus = selectWrapper.find(".plus");
    btnPlus.click(function () {
        var item = $(this).parent().find(".form-control");
        var value = item.val();
        value++;
        item.val(value);
    });
});

$(document).ready(function(){
    var flag = true;
    var btnModeDes = $(".btn-more-des");
    btnModeDes.click(function(){
        var des = $(".tour-overview .description");
        var h = $(".tour-overview .description p").height();
        var pGradient = $(".p-gradient");
        if(flag){
            des.css("height", h);
            pGradient.addClass("d-none");
            flag = false;
        }
        else{
            des.css("height", "200px");
            pGradient.removeClass("d-none");
            flag = true;
        }
    });
});

$(document).ready(function(){
    var hienCo = $(".hien-co").text();
    var size = $(".group-size").text();
    console.log(hienCo);
    console.log(size);
    if(hienCo==size){
        var link = $(".link-tham-gia");
        link.addClass("disabled");
        link.text("TOUR ĐÃ FULL");
    }
});

$(document).ready(function () {
    var stars = $('.form-comment-wrapper .review-star').find('i');
    stars.click(function () {
        $('#id-score').val($(this).index() + 1);
        console.log($('#id-score').val());
        for (var i = 0; i <= 4; i++) {
            if (i <= $(this).index()){
                stars.eq(i).addClass('yellow');
            }
            else{
                stars.eq(i).removeClass('yellow');
            }
        }
    });
});