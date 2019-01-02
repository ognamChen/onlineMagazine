var length;
$(document).ready(function () {

    // $("body img").css("opacity", "1");

    $(".carousel-inner .carousel-item:first").addClass("active");
    // $("#mainNav").load('https://clab.org.tw');

    $(".og-category a").hover(function () {
        $(".og-under-orange-1", this).css("background-color", "orange");
    }, function () {
        $(".og-under-orange-1", this).css("background-color", "white");
    });
    // $("img").addClass("img-fluid");

    // match Height
    $(".mh-item").matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });


    fixAutofunc();

    $(window).resize(function () {
        var width = $(window).width();
        setTimeout(function () {
            fixAutofunc();
        }, 500);
    });

    function fixAutofunc() {
        var width = $(window).width();
        if (width <= 767) {
            // $(".fix-height").each(function () {
            //     $(this).addClass("hauto");
            // });
            $(".jq_home_search").hide();
        } else {
            // $(".fix-height").each(function () {
            //     $(this).removeClass("hauto");
            // });
            $(".jq_home_search").show();
        }
    }
});


// var content = $('main'),
// 	header = $('header');

// $(content).clone().prependTo(header).addClass('blurred');

// var blur = 'blur(.5em)';
// $('.blurred').css({
// 'background': '#fff',
// '-webkit-filter': blur,
// 'filter': blur
// });

// $(document).scroll(function(){
// var scroll = $(this).scrollTop();
// $('.blurred').css({
// 	'-webkit-transform' : 'translateY(-'+scroll+'px)',
// 	'transform' : 'translateY(-'+scroll+'px)'
// });
// })