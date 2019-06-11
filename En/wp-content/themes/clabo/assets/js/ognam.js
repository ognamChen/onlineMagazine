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
  $(".posts_title").matchHeight(matchHeightOption);
  $(".posts_img").matchHeight(matchHeightOption);
  // match Height end

  // owl carousel start
  $("#clabCarousel").owlCarousel({
    loop: true,
    dots: false,
    items: 1,
    autoplay: true,
    margin: 5,
    autoplayTimeout: 5500,
    navText: [
      "<img src='../wp-content/themes/clabo/assets/img/icon-prev.png'>",
      "<img src='../wp-content/themes/clabo/assets/img/icon-next.png'>"
    ],
    responsive: {
      0: {
        items: 2,
        nav: true
      },
      576: {
        items: 3,
        nav: true
      },
      992: {
        items: 4,
        nav: true
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
  $(".feature_category_content ._clabo_1").show().append(" ......more");
  $(".feature_category_content ._clabo_2").hide();
  $(".feature_category_content ._clabo_3").hide();

  // feature category seprate img and content end

  // feature_subtitle
  $(".feature_category_content ._clabo")
  .hide()
  .clone()
  .insertAfter(".feature_category_title")
  .show();

  // $(".child_cat_item_content ._clabo")
  // .hide()
  // .clone()
  // .insertAfter(".child_cat_item_title")
  // .show();

  var cloned_subtitle = $(".child_cat_item_content ._clabo").hide().clone();
  var append_subtitle = $(".child_cat_item_content ._clabo").parents(".child_cat_item").find(".child_cat_item_title");
  $(cloned_subtitle).each(function(i) {
    $(append_subtitle).each(function(i2) {
      if (i == i2) {
        $(cloned_subtitle[i]).insertAfter(append_subtitle[i2]).show();
      }
    })
  })


  $(".child_cat_item_content ._clabo_1").show().append(" ......more");
  $(".child_cat_item_content ._clabo_2").hide();
  $(".child_cat_item_content ._clabo_3").hide();
  

  // category page separate img and content start
  $(".category_page_content img")
    .hide()
    .clone()
    .appendTo(".category_page_img")
    .show();
  $(".category_page_content a").remove();
  $(".category_page_content ._clabo_1").show();
  $(".category_page_content ._clabo_2").show();
  $(".category_page_content ._clabo_3").show();

  // category page separate img and content end

  // var content_img = $(".child_cat_item_content img");
  var cloned_img = $(".child_cat_item_content img").hide().clone();
  var append_img = $(".child_cat_item_content img").parents(".child_cat_item").find(".child_cat_item_img");
  $(cloned_img).each(function(i) {
    $(append_img).each(function(i2) {
      if (i == i2) {
        $(cloned_img[i]).appendTo(append_img[i2]).show();
      }
    })
  })
  // $(".child_cat_item_content a").remove();
  $(".child_cat_item_img.JQ a").attr("href", "javascript:void(0);");

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

  $(window).scroll(function() {
    var scrollVal = $(this).scrollTop();
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + scrollVal;
    if (scrollVal > 50) {
      $(".sideMenuBtn").addClass("JQscroll");
    } else {
      $(".sideMenuBtn").removeClass("JQscroll");
    }
    $(".right_decorate").css({"opacity": 1 - scrollPosition/scrollHeight });
    // $(".right_decorate").css({"top": (scrollPosition/scrollHeight) * 90 + "%" });
    // console.log(scrollPosition/scrollHeight);
  });

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
  var width = $(window).width();
    if (width <= 767) {
      $("#myNav").css("width", "100%");
    } else {
      $("#myNav").css("width", "50%");
    }
  
  // document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  $("#myNav").css("width", "0%");
  // $("#myNav").style.width = "0%";
  // document.getElementById("myNav").style.width = "0%";
}
