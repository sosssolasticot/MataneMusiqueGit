<?php get_header(); ?>

<section>
    <h2 class="item-full">Résultats de recherche...</h2>
    <?php if (have_posts()): ?>
    <?php while (have_posts()):
            the_post(); ?>
    <article>
        <h3>
            <?php the_title(); ?>
        </h3>
        <!-- article complet -->
        <!--   <p><?php the_content(); ?></p> -->
        <p>
            <?php the_excerpt(); ?>
        </p>
        <p><a href="<?php the_permalink(); ?>">En savoir plus </a></p>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>