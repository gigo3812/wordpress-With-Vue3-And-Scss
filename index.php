<?php

get_header();
?>

<section id="app">
 
    <!-- slider -->
    <?php get_template_part('templates/slider'); ?>


    <?php if (is_home()) { ?>
        <!--  news -->
        <?php get_template_part('templates/news'); ?>
    <?php } ?>


    <!-- post -->
    <?php get_template_part('templates/post'); ?>


</section>


<?php
get_footer();
