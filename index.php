<?php get_header() ?>

<h1>Blog</h1>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post() ?>

        <?php get_template_part('template-parts/content'); ?>

        <hr>

    <?php endwhile; ?>

<?php else : ?>

    <p>No posts found</p>

<?php endif; ?>

<?php get_footer(); ?>