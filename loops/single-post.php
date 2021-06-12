<?php
/*
 * The Single Post
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <!-- breadcrumbs x-->
    <?php if (function_exists('dimox_breadcrumbs_child')) { ?>
      <?php dimox_breadcrumbs_child(); ?>
    <?php } ?>
    <!-- breadcrumbs -->

  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <div class="headertitle container entry-header mb-5">
      <h2 class="text-center"><?php the_title()?></h2>

    </div>
    <div class="author-email">
        <p>Precio: <?php echo get_post_meta($post->ID, 'price', true); ?> </p>
    </div>
    <div class="author-email">
        <p>Calorias: <?php echo get_post_meta($post->ID, 'calories', true); ?> </p>
    </div>
<!--singlepost -->
    <section class="entry-content">
      <?php
        //the_post_thumbnail();
        echo "<!-- single post -->";      
        the_content();
      ?>
    </section>
<!-- -->

<!-- -->
    <?php wp_link_pages(); ?>

    <footer class="container mt-5 border-top pt-3">
      <!-- /.author-bio fa-fw -->

      <div class="row mt-5 border-top pt-3 pb-5">
        <div class="col">
          <?php previous_post_link('%link', '<i class="fas  fa-angle-left"></i><i class="fas   fa-angle-left"></i>   '.'%title'); ?>
        </div>
        <div class="col text-right">
          <?php next_post_link('%link', ' '.'%title'.'<i class="fas  fa-angle-right"></i><i class="fas  fa-angle-right"></i>'); ?>
        </div>
      </div>

    </footer>
  </article>

  <?php
  /*
  If you revert to the traditional main column + sidebar layout, then
  comment out (or remove) the entire `main-widget-area` unit below.
  // is_active_sidebar('main-widget-area' false-->
  */
  ?>
  
  <?php if(false): ?>
  <section id="site-main-widgets" class="bg-light">
    <div class="container">
      <div class="row pt-5 pb-4" id="main-widget-area" role="navigation">
        <?php
           b4st_main_widgets_before();
           dynamic_sidebar('main-widget-area');
           b4st_main_widgets_after();
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php
    // This continues in the single post loop

  endwhile; else :
    get_template_part('loops/404');
  endif;
?>