<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>


<article role="article" id="post_<?php the_ID()?>" <?php post_class("entry-content pb-3 border-bottom mb-5"); ?> >
  <header>
    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
  </header>
  <section>
    <?php //the_post_thumbnail(); ?>
    <div class="author-email">
        <p>Precio: <?php echo get_post_meta($post->ID, 'price', true); ?> </p>
    </div>
    <div class="author-email">
        <p>Calorias: <?php echo get_post_meta($post->ID, 'calories', true); ?> </p>
    </div>

    <?php if ( has_excerpt( $post->ID ) ) {

    the_excerpt();
    ?>

    <a href="<?php the_permalink(); ?>">
    	<?php _e( 'Continue reading...', 'b4st' ) ?>
      </a>
  	<?php } else {
  	  the_content( __('Continue reading...', 'b4st' ) );
	  } ?>
  </section>
</article>
