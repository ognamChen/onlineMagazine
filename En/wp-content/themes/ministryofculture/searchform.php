<!-- <div class="m-t-16"></div> -->
<form class="input-group" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" class="og-form-control form-control" value="<?php echo get_search_query(); ?>" name="s" id="s">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit">
        <i class="fas fa-search"></i>
    </button>
  </div>
</form>
