<?php /* Template Name: Gabarit Actualitée */?>

    <?php get_header(); ?>

    
<?php
$args = array(
    'post_type' => 'Actualités'
);
$query = new WP_query($args);
?>

<section class="actualite">
    <h1>Nouvelles</h1>
    <h2>Actualités</h2>
    <div class="actu-section">
        <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()):
            $query->the_post(); ?>
        <article class="actu">
            <h3 class="actu-titre">
                <?php the_field('titre_'); ?>
            </h3>
            <div class="actu-contient">
                <?php $image=get_field('image_article_') ?>
                <?php if(!empty($image)): ?>
                    <img src="<?php the_field('image_article_') ?>" alt="">
                <?php endif; ?>
                <div>
                    <?php the_field('paragraphe_actualite'); ?>
                </div>
            </div>
            <button class="btn-actu"><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
            <hr class="header_hr">
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button class="btn-bordure"><a href="">Découvrir plus de nouvelles</a></button>
</section>

<?php
$args = array(
    'post_type' => 'Evenement'
);
$query = new WP_query($args);
?>


<section>
    <h2>Évenements à venir</h2>
    <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()):
            $query->the_post(); ?>
    <article>
        <div class="evenement-position">
            <img src="<?php the_field('image_evenement') ?>" alt="">
            <div class="evenement">
                <div class="evenement-infos">    
                    <div class="evenement-categorie">
                        <?php the_field('categorie_evenement_'); ?>
                    </div>
                    <div>
                        <?php the_field('paragraphe_evenement_'); ?>
                    </div>
                </div>
                <div class="evenement-date">
                    <p> DATE </p>
                    <div>
                        <?php the_field('date_evenement_'); ?>
                    </div>
                </div>
                <div class="evenement-lieu">
                    <p> LIEU </p>
                    <div>
                        <?php the_field('lieu_evenement_'); ?>
                    </div>
                </div>
            </div>
        </div>  
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</section>