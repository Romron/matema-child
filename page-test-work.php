<?php

/**
 * Template Name: Test Work
 */
get_header(); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="inner-page">
   <div class="page-wrap">
      <div class="container">
         <div class="page-head">
            <h1><?php the_title(); ?></h1>
         </div>
         <?php the_content(); ?>

         <section class="test-work-section">
            <article class="test-work-article">
               <div class="test-work-article__header"><?php echo get_field('left_column_title'); ?></div>
               <div class="test-work-article__body"><?php echo get_field('left_column_description'); ?></div>
            </article>

            <article class="test-work-article">
               <div class="test-work-article__header"><?php echo get_field('right_column_title'); ?></div>
               <div class="test-work-article__body"><?php echo get_field('right_column_description'); ?></div>
            </article>

         </section>

         <section class="gravity-form"><?php echo get_field('gravity_form_id'); ?></section>


      </div>
   </div><!-- page name -->
</div><!-- inner page -->

<?php endwhile; ?>







<?php get_footer(); ?>