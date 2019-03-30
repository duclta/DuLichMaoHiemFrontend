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
    item.each(function (index) {
        var header = $(this).find(".header");
        header.click(function () {
            var body = $(this).parent().find(".body");
            if (body.hasClass("d-none")) {
                body.removeClass("d-none");
            } else {
                body.addClass("d-none");
            }
            var timeLineNavItem = $(".timeline-nav-item");

            if (timeLineNavItem.eq(index).hasClass("active"))
                timeLineNavItem.eq(index).removeClass("active");
            else
                timeLineNavItem.eq(index).addClass("active");
        });
    });
});

$(document).ready(function () {
    var item = $(".tour-itinerary").find(".item");
    var timeLineNavItem = $(".timeline-nav-item");
    timeLineNavItem.click(function (e) {
        var body = item.eq($(this).index()).find(".body");
        if (body.hasClass("d-none")) {
            body.removeClass("d-none");
        } else {
            body.addClass("d-none");
        }

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            e.preventDefault();
        }
        else {
            $(this).addClass("active");
            var offsetClick = $('#' + 'item-' + $(this).index()).offset().top;
            e.preventDefault();
            $('html, body').animate({
                'scrollTop': offsetClick - 53
            }, 300);

            var offsetTimelineItem = $(this).offset().left;
            console.log(offsetTimelineItem);
            var timelineNav = $(".timeline-nav");
            console.log(timelineNav.width());
            if (offsetTimelineItem > timelineNav.width() / 2)
                timelineNav.animate({ scrollLeft: '+=300' }, 300, 'swing');
            else
                timelineNav.animate({ scrollLeft: '-=300' }, 300, 'swing');

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
        if(slideIndex == 0)
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


