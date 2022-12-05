<?php /* Template Name: Gabarit Don */?>

<?php get_header(); ?>

<h1> Faire un don </h1>

<div class="">
        <div class="">
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'don',
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="un-service">
                        <div class="services-infos"> <?php the_content(); ?> </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if($query -> have_posts()): $query->the_post(); ?>
                <?php if(has_post_thumbnail()) : ?> <!--Si le post à une image-->
                    <div class="">
                        <?php the_post_thumbnail();?> <!--Affiche l'image-->
                    </div>
                <?php endif; ?>   
            <?php endif; ?>
        </div>

<?php get_footer(); ?>
