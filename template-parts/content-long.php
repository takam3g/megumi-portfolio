<?php ?>

<article <?php post_class(); ?> >

    <h2 class="entry-title">
        <?php the_title(); ?>
    </h2>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <div class="entry-category">
        <?php if (has_category()): ?>
            <i class="fas fa-folder"></i>
        <?php endif; ?>
        <?php the_category( " <span>&#9830;</span> " ); ?>
    </div>

    <div class="entry-tag">
        <?php if (has_tag()): ?>
            <i class="fas fa-tag"></i>
        <?php endif; ?>
        <?php the_tags("", " <span>&#9830;</span> "); ?> 
    </div>
</article>