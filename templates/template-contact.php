<?php /* Template Name: Gabarit Contact */?>

<?php get_header(); ?>

<h1> Nous joindre </h1>

<section class="joindre"> 
    <div class="coordonnées">
        <h2> Coordonnées </h2>
        <?php
            $args = array(
                'post_type' => 'post',
                'tag' => 'info-contact',
            );
            $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="un-service">
                    <?php if($query -> have_posts()): $query->the_post(); ?>
                        <?php if(has_post_thumbnail()) : ?> <!--Si le post à une image-->
                            <div class="une-coordonnee">
                                <?php the_post_thumbnail();?> <!--Affiche l'image-->
                                <div class="coordonnee-texte"> <?php the_content(); ?> </div> <!--Affiche le contenu-->
                            </div>
                        <?php endif; ?>   
                    <?php endif; ?>  
                </div>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div>
    <div class="formulaire" >
        <h2> Formulaire de contact </h2>
        <div>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>