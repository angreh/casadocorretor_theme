<?php
/*
Template Name: Main Home
*/
?>

<?php get_header(); ?>

<div id="home-banner">
    <div class="container">

        <div class="family"></div><!-- .family -->

        <div class="form-wrapper">
            <div class="pre-form"></div>
            <div class="form">
                <form>
                    <input>
                </form>
            </div><!-- .form -->
            <div class="pos-form"></div>
        </div>

    </div><!-- .container -->
</div><!-- #home-banner -->

<div id="home-chatonline">
    <div class="container">
        chatonline
    </div><!-- .container -->
</div><!-- #home-chatonline -->

<div id="home-logos">
    <div class="container">

        <?php if ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endif; ?>

    </div><!-- .container -->
</div><!-- #home-logos -->

<div id="home-quemsomos">
    <div class="container">
        quemsomos
    </div><!-- .container -->
</div><!-- #home-quemsomos -->

<div id="home-porquecdc">
    <div class="container">
        pqcdc
    </div><!-- .container -->
</div><!-- #home-porquecdc -->

<?php get_footer(); ?>
