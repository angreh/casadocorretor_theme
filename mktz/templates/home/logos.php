<div id="home-logos">
    <div class="container">

        <?php if ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endif; ?>

    </div><!-- .container -->
</div><!-- #home-logos -->