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

  // feature category seprate img and content start
  $(".feature_category_content img").hide()
    .clone()
    .appendTo(".feature_category_img").show();
  $(".feature_category_content a").remove();
  // feature category seprate img and content end

  // category page separate img and content start
  $(".category_page_content a").hide()
    .clone()
    .appendTo(".category_page_img").show();
    $(".category_page_content a").remove();
  // category page separate img and content end

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
