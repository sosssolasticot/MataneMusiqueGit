<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>


<section>
    <h1>Services</h1>
    <div> 
        <?php
            $args = array(
            'post_type' => 'post',
            'tag' => 'services',
            );
            $query = new WP_Query($args);
            ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="ecole-info"> <?php the_content(); ?> </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="widget services">
            <?php
                $args = array(
                    'post_type' => 'Service',
                );
                $query = new WP_Query($args);
                ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                    <article class="item-third widget-accueil">
                        <img class="widget-img" src="<?php the_field('image_du_services_'); ?>" alt="">
                        <h3>
                            <?php the_field('titre_service_'); ?>
                        </h3>
                        <p>
                            <?php the_field('description_services_') ?>
                        </p>
                    </article>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>
    <div class="services-position">
        <div class="nos-services">
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'nos-services',
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="un-service">
                        <h2> 
                            <?php the_title(); ?> 
                        </h2>
                        <div class="services-infos"> <?php the_content(); ?> </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div service-img>
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'services',
                );
                $query = new WP_Query($args);
            ?>
            <?php if($query -> have_posts()): $query->the_post(); ?>
                <?php if(has_post_thumbnail()) : ?> <!--Si le post à une image-->
                    <div class="services-image">
                        <?php the_post_thumbnail();?> <!--Affiche l'image-->
                    </div>
                <?php endif; ?>   
            <?php endif; ?>   
        </div>
    </div>
</section>



<?php get_footer(); ?>