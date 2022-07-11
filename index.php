<?php
get_header();
?>

<main>

        <section class="index-sections index-home row-limit-size">
            <p class="index-titles">Bienvenue sur le</p><h1 class="index-home-title index-titles">blog de la promo 122</h1>
            <figure class="index-home-figure"><img src="<?php echo get_template_directory_uri() ?>/inc/img/logos/logo_v1_negatif.png" alt="Logo de la Promo 122" class="index-home-logo"></figure>
        </section>

        <section class="index-sections index-articles-section row-limit-size">
            <h2 class="index-titles">Nos derniers articles</h2>
            <div class="index-articles-container flex-start">
                <?php
                    $last10 = new WP_query();
                    $last10->query('showposts=10')
                ?>

                <?php
                    if(have_posts()){
                        while($last10->have_posts()){
                            $last10->the_post();
                            $categories = get_the_category();
                            $cat = $categories[0]->name;
                            $number = rand(1, 4);

                            ?>
                            <a href="<?php the_permalink(); ?>" class="index-article-lien article-lien-none">
                                <article class="index-article index-article-left">
                                    <?php 
                                    if($cat === 'Tech'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/red-pin" alt=""></figure>
                                    <?php } else if($cat === 'Dev'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/purple-pin" alt=""></figure>
                                    <?php } else if($cat === 'Design'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/blue-pin" alt=""></figure>
                                    <?php } else if($cat === 'SEO'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/yellow-pin" alt=""></figure>
                                    <?php } else { ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/green-pin" alt=""></figure>
                                    <?php } ?>
                                    <h3 class="index-article-title"><?php the_title(); ?></h3>
                                    <figure class="index-article-scotch"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/scotch-<?php echo $number ?>" alt=""></figure>
                                    <?php the_post_thumbnail('full') ?>
                                    <p class="index-article-author">Par <?php the_author(); ?></p>
                                    <div class="index-article-overview"><?php the_excerpt(); ?></div>
                                </article>
                            </a>
                            <?php
                        }
                    }
                ?>
            </div>
        </section>

        <section class="index-sections index-team row-limit-size">
            <h2 class="index-titles">Notre equipe</h2>
            <div class="index-team-sign">
                <p class="index-team-sign-font">Découvrez les membres de la Promo 122 <a href="<?php echo esc_url(get_page_link(14)) ?>" class="index-team-sign-lien">ici</a></p>
            </div>
        </section> 


        
    </main>

<?php
get_footer();
?>