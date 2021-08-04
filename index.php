<?php get_header(); ?>

<?php 
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      get_template_part('template-parts/content-short');
    endwhile;

    the_posts_navigation(array(
      'prev_text' => '<< Previous Post',
      'next_text' => 'Next Post >>'
    ));
  endif;
?>

<?php get_footer(); ?> 
