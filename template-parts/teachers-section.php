<div class="teachers-section">
    <div class="container">
        <div class="head">
            <h2><?php the_field('teachers_title'); ?></h2>
        </div>

        
		<div class="tutors-listing">
				<div class="row">
					<?php

					$args = array(
						'post_type' => 'tutor',
						'posts_per_page' => 6,
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$tutors = new WP_Query($args);
					query_posts( $tutors );			
					if ($tutors->have_posts()) : ?>
						<?php while ($tutors->have_posts()) : $tutors->the_post();
						$tutor_categories = get_the_terms($post->ID, 'tutors'); ?>
						<?php
						$post_id = get_the_ID();
						$featured_image_url = get_the_post_thumbnail_url($post_id);
						?>
						<div class="col">
                            <div class="teacher-card">
							 <div class="photo" style="background-image: url('<?php echo $featured_image_url; ?>'); background-size: cover;"></div>
							<div class="details">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="price-wrap">
                                        <div class="price"><?php $terms = get_the_terms( $post->ID , 'tsina' );
											echo join(', ', wp_list_pluck($terms, 'name'));?> грн./год</div>	
									</div>
									<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" hide="if_empty,bars,summary"]');?>	
									<div class="buttons-wrap">
                                        <a href="<?php the_permalink(); ?>" class="button button-tutor-details smaller">
                                            <?php echo get_field('text_teacher_card', get_option('page_on_front')); ?>
                                            <div class="icon margin-left">
                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); 
					wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="button-wrap align-centered">
            <?php if(get_field('text_link_all_teachers')): ?>
                <a href="/tutors/" class="learn-more-link"><?php echo (get_field('text_link_all_teachers')); ?></a>
            <?php endif; ?>
        </div>

    </div><!-- container -->
</div>