<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= home_url(); ?>">
        <img class="" src="img/rini-logo.png" alt="Логотип">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
      </form>
    </div>
  </nav>