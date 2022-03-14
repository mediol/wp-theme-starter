<?php 
    $page_id = get_the_ID();
?>

<section class="hero">
    <div class="container">
        <h1><?php echo carbon_get_post_meta( $page_id, 'section_title') ?></h1>
    </div>
</section>