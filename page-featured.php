<?php get_header(); ?>

<?php 

// Featured Query
$featured_query = new WP_Query(
  array(
    'tag'             => 'featured',
    'posts_per_page'  => '4',
    'orderby'         => 'rand'
  )
);


  if ( $featured_query -> have_posts() ):
    while ( $featured_query -> have_posts() ):
      $featured_query -> the_post();
      get_template_part('template-parts/content-short');
    endwhile;
  endif;
?>

<?php get_footer(); ?> 