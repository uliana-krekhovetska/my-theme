<?php 
get_header();
?>
</section>

<?php get_sidebar(); ?>

<main class="mainTravel">
    <section class="whatOurTouristSay" id="WhatOurTouristSay">
        <div class="container containerWhatOurTouristSay">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 titleWhatOurTouristSay"><?php wp_title(); ?></div>
            </div>
            
            <?php  if (have_posts()) : while(have_posts()) : the_post(); ?>
            <?php get_template_part('content');?>
            <?php endwhile; endif; ?>

        </div>
    </section>
</main>
<?php get_footer(); ?>