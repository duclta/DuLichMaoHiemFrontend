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
            if (offsetTimelineItem > timelineNav.width() /2)
                timelineNav.animate({ scrollLeft: '+=300' }, 300, 'swing');
            else
                timelineNav.animate({ scrollLeft: '-=300' }, 300, 'swing');

        }
    });
});

