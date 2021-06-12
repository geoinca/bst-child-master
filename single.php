<?php
  get_header();
  b4st_main_before();
?>



<main id="site-main"  class="mt-5">
<!-- single -->
  
  <?php
  /*
  <?php get_template_part('loops/single-post', get_post_format()); ?>

  Did you want a traditional article-plus-sidebar layout?
  =======================================================
  Use this below instead of the one line above -- and 
  remove some of the CSS styles controlling `.entry-content`
  */
  ?>
  <div class="entry-content">
    <div class="row"> 
      <div class="col-sm col-sm-wpd">
        <div id="content" role="main">
          <?php get_template_part('loops/single-post', get_post_format()); ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>


</main>

<?php
    b4st_main_after();
    get_footer();
?>