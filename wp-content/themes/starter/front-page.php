<?php
/*
Template Name: Home page
*/
?>

<?php 
    $page_id = get_the_ID();
?>

<?php get_header(); ?>

        <main class="main">

            <!-- SECTION -->
            <?php get_template_part( 'template-parts/hero' ); ?>
            
        </main>

<?php get_footer(); ?>