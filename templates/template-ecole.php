<?php
/*
Template Name: Notre école
*/
?>

<?php get_header(); ?>

<section class="mission-historique">
    <h1>Notre école</h1>
    <h2>Mission & Historique</h2>
    <div class="services-position">
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
        <div class="nos-services">
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'mission_et_historique',
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="un-service">
                        <h3> 
                            <?php the_title(); ?> 
                        </h3>
                        <div class="services-infos"> <?php the_content(); ?> </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>    
    </div>
</section>

<section>
    <?php
    $args = array(
        'post_type' => 'Enseignant', 
    );
    $query = new WP_query($args);
    ?>

    <h2> Enseignants </h2> 
    <!-- Affichage des logos des réseaux social -->
    <div class="grid-enseignants">
        <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()):
                $query->the_post(); ?>
        <article class="article-enseignant">
            <img class="img-enseignant" src="<?php the_field('photo_du_professeur_') ?>" alt="">
            <div class="textes_enseignants">
                <h3 class="titre-enseignant">
                    <?php the_field('prenom_nom_enseignants_'); ?>
                </h3>
                <div class="description_prof">
                    <?php the_field('description_professeur_'); ?>
                </div>
                <div class="instru_prof">
                    <?php the_field('instrument_professeur'); ?>
                </div>
                <button class="btn-bordure prof"><a href="<?php the_permalink('bouton_cours_'); ?>">En savoir plus</a></button>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="fondation">
<h2> Fondation </h2> 
<?php
        $args = array(
            'post_type' => 'post',
            'tag' => 'fondation',
        );
        $queryfondation = new WP_Query($args);
    ?>
    <?php if ($queryfondation->have_posts()): ?>
        <?php while ($queryfondation->have_posts()): $queryfondation->the_post(); ?>
            <div class="ecole-info"> <?php the_content(); ?> </div>
        <?php endwhile; ?>
        <?php endif; ?>

<button class="btn-bordure"><a href="">Faire un don</a></button>
    <div class="infos-dons">
        <?php
            $args = array(
                'post_type' => 'post',
                'tag' => 'fondations-infos',
            );
            $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="infos-fondation">
                    <h3> <?php the_title(); ?> </h3>
                    <div class="fondations-textes"> <?php the_content(); ?> </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>