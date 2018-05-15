<?php include"header.php"; ?>

<section id="homeContent" class="homeContent">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/home','hero'); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php include"footer.php"; ?>