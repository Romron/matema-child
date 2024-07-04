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
               <div class="test-work-article__header"></div>
               <div class="test-work-article__body"></div>
               <div class="test-work-article__footer"></div>
            </article>

            <article class="test-work-article">
               <div class="test-work-article__header"></div>
               <div class="test-work-article__body"></div>
               <div class="test-work-article__footer"></div>
            </article>

         </section>

         <section class="gravity-form">
         </section>


      </div>
   </div><!-- page name -->
</div><!-- inner page -->

<?php endwhile; ?>







<?php get_footer(); ?>