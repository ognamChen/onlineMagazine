var length;
$(document).ready(function() {
  // img fluid start
  $("img").addClass("img-fluid");
  // img fluid end

  // match Height start
  var matchHeightOption = {
    byRow: true,
    property: "height",
    target: null,
    remove: false
  };
  $(".feature_mh").matchHeight(matchHeightOption);
  $(".point_mh").matchHeight(matchHeightOption);
  $(".posts_mh").matchHeight(matchHeightOption);
  $(".posts_img").matchHeight(matchHeightOption);
  // match Height end

  // owl carousel start
  $(".owl-carousel").owlCarousel({
    autoPlay: true,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
  // owl carousel end

  // feature category seprate img and content start
  $(".feature_category_content img")
    .hide()
    .clone()
    .appendTo(".feature_category_img")
    .show();
  $(".feature_category_content a").remove();
  // feature category seprate img and content end

  // category page separate img and content start
  $(".category_page_content a")
    .hide()
    .clone()
    .appendTo(".category_page_img")
    .show();
  $(".category_page_content a").remove();
  // category page separate img and content end

  // clabo-plus
  $(".claboItem")
    .first()
    .removeClass("hide");

  fixAutofunc();

  $(window).resize(function() {
    var width = $(window).width();
    setTimeout(function() {
      fixAutofunc();
    }, 500);
  });

  function fixAutofunc() {
    var width = $(window).width();
    if (width <= 767) {
      $(".jq_home_search").hide();
    } else {
      $(".jq_home_search").show();
    }
  }
});

// tabs start
function showPost(id) {
  var _this = $("div.claboItem#" + id);
  if ($(_this).hasClass("hide")) {
    $("div.claboItem#" + id).removeClass("hide");
    $(_this)
      .siblings()
      .addClass("hide");
  }
}
// tabs end

/* Open when someone clicks on the span element */
function openNav() {
  $("#myNav").css("width", "100%");
  // document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  $("#myNav").css("width", "0%");
  // $("#myNav").style.width = "0%";
  // document.getElementById("myNav").style.width = "0%";
}
