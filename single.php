<?php
get_header();
?>

<main class="row-limit-size margin-auto">

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
            <article class="single-article">
                <h2 class="index-article-title single-title"><?php the_title(); ?></h2>
                <div class="single-content-font"><?php the_content(); ?></div>
            </article>
            <?php
        }
    }
?>

</main>

<?php
get_footer();
?>