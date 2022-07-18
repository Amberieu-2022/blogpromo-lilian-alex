<?php
get_header();
?>

<h1><?php the_title() ?></h1>

<div class="apprenants">
    <?php
        $args = array(
            'post_type' => 'apprenant'
        );

        $students = new WP_Query($args);

        if($students->have_posts()){
            while($students->have_posts()){
                $students->the_post();
                ?>
                    <h2><?php the_title() ?></h2>
                <?php
            }
        }

    ?>
</div>

<?php
get_footer();
?>

