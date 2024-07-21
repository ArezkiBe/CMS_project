<div class="search-container">
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" class="search-input" placeholder="Type something to search…" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <button type="submit" id="searchsubmit" class="search-icon-button">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/search-icon.svg" class="search-icon" alt="Search">
    </button>
    <div class="search-underline"></div>
  </form>
</div>
