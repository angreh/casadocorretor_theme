<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endif; ?>

<?php get_footer(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo get_template_directory_uri() . '/style.css'; ?>" rel="stylesheet" />

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



</body>
</html>