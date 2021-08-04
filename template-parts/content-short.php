<?php ?>

<article <?php post_class(); ?> >

    <h2 class="entry-title">
        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
    </h2>

    <div class="entry-category">
        <?php the_category( ' &#9830; ' ); ?>
    </div>

    <div class="entry-content">
    <?php 
        the_excerpt(); 
    ?>

    <div class="entry-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?> 
        </a>
    </div>

</article>

