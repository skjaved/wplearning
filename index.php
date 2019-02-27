<?php
    // WP Learning
    get_header();
?>

<div class="home-main">
    <div class="custom-header">
        <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" class="img-fluid">
    </div>
    <div class="row">
        <div class="home-posts col-8 ml-0">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="home-post">
                        <div class="post-header">
                            <div class="post-thumbnail row ml-0 mr-0">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'home-featured' ); ?>
                                </a>
                            </div>
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="post-description">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="post-footer">
                            <strong>
                                Author: <?php the_author(); ?>
                            </strong>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div> 
    <div class="home-sidebar col-4">
        <?php get_sidebar(); ?>
    </div>
    </div>
</div>

<p>Niraj</p>

<?php
    get_footer();
?>
