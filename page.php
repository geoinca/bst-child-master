<?php get_template_part('header'); ?>
<main id="site-main"  class=" mt-5">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12">
                <div id="content" role="main">
                    <?php get_template_part('loops/page-content', 'page'); ?>
                </div><!-- /#content -->
            </div>



        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
<?php get_template_part('footer'); ?>