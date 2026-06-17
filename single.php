<?php get_header(); ?>

<div class="single-post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="single-post__article">

            <div class="single-post__content">
                <p class="single-post__date"><?php echo get_the_date('d.m.Y'); ?></p>
                <h1 class="single-post__title"><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-post__image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <?php the_content(); ?>
                <a href="<?php echo get_permalink(get_page_by_path('aktuelles')); ?>" class="single-post__back">
                    ← Zurück
                </a>
            </div>
            <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="' . get_permalink() . '" title_text="Kommentare" order_type="social" width="100%" count_of_comments="5"]'); ?>
        </article>

    <?php endwhile; endif; ?>
</div>

<?php get_template_part('floating-buttons') ?>
<?php get_footer(); ?>