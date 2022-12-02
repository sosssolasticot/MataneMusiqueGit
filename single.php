<?php get_header(); ?>

<section class="flex">
     <h2 class="item-full">
          <?php the_title(); ?>
     </h2>
     <article class="item-half">
          <p>
               <?php the_content(); ?>
          </p>
     </article>
     <?php if (has_post_thumbnail()): ?>
     <div class="item-half img-container">
          <?php the_post_thumbnail(); ?>
     </div>
     <?php endif; ?>
</section>

<?php get_footer(); ?>