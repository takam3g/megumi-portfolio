<?php get_header(); ?>

<h2 class="search-archive-title">
<?php the_archive_title() ?>
</h2>

<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part('template-parts/content-short');
        endwhile;

        the_posts_navigation(array(
            'prev_text' => '<< Previous Post',
            'next_text' => 'Next Post >>',
        ));
    endif;

?>

<?php get_footer(); ?> 