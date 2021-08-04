<?php get_header(); ?>

<h2 class="search-archive-title">Search Result for "<?php the_search_query() ?>" </h2>
    
<?php 
    if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        get_template_part('template-parts/content-short');
    endwhile;
    endif;

    the_posts_navigation(array(
        'prev_text' => '<< Previous Post',
        'next_text' => 'Next Post >>',
    ));
?>

<?php get_footer(); ?> 