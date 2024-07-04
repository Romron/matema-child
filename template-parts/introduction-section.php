<div class="introduction-section">
    <div class="container">
        <div class="head">
            <div class="description">
                <?php the_field('our_program'); ?>
            </div>
        </div>

        <div class="our-features">
            <?php if (have_rows('program_features')) : while (have_rows('program_features')) : the_row(); ?>
                    <div class="row">
                        <div class="col">
                            <div class="description">
                                <?php if (get_sub_field('icon')) { ?>
								<div class="icon">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                                </div>
								<?php } ?>
                                <h3><?php the_sub_field('name'); ?></h3>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="photo" style="background-image: url('<?php the_sub_field('program_feature_photo'); ?>');"></div>
                        </div>
                    </div>
            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</div>