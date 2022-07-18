<?php
get_header();
?>

<section class="index-sections index-articles-section row-limit-size" id="content">
            <h2 class="index-titles">Nos articles</h2>
            <div class="index-articles-container flex-start">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);
                ?>

                <?php
                    if(have_posts()){
                        while($query->have_posts()){
                            $query->the_post();
                            $categories = get_the_category();
                            $cat = $categories[0]->name;
                            $number = rand(1, 4);
                            $deg = rand(-500, 500)/100;

                            ?>
                            <a href="<?php the_permalink(); ?>" class="index-article-lien article-lien-none" style="transform:rotate(<?php echo $deg ?>deg)">
                                <article class="index-article index-article-left">
                                    <?php 
                                    if($cat === 'Tech'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/red-pin.png" alt=""></figure>
                                    <?php } else if($cat === 'Dev'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/purple-pin.png" alt=""></figure>
                                    <?php } else if($cat === 'Design'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/blue-pin.png" alt=""></figure>
                                    <?php } else if($cat === 'SEO'){ ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/yellow-pin.png" alt=""></figure>
                                    <?php } else { ?>
                                        <figure class="index-article-pin"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/green-pin.png" alt=""></figure>
                                    <?php } ?>
                                    <h3 class="index-article-title"><?php the_title(); ?></h3>
                                    <figure class="index-article-scotch"><img src="<?php echo get_template_directory_uri() ?>/inc/img/other/scotch-<?php echo $number ?>.png" alt=""></figure>
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
            <div id="theme-navigation">
            <?php
                $big = 999999999; // need an unlikely integer
                
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $query->max_num_pages,
                    'next_text' => 'Page suivante',
                    'prev_text' => 'Page precedente'
                ) );
            ?>
            </div>
            <?php

            ?>
        </section>

<?php
get_footer();
?>