<style>
.learning-programs-section {
    box-sizing: border-box;
    background-color: #fff;
    padding-bottom: 100px;
}    
.learning-programs-section .row {
    display: flex;
}
.learning-programs-section .row .col {
    margin-bottom: 48px;
    width: 33.3333%;
}
.learning-programs-section .row .block {
    box-sizing: border-box;
    padding-right: 64px;
}
@media screen and (max-width: 991px) {
    .learning-programs-section .row {
        display: block;
    }
    .learning-programs-section .row .col {
        width: 100%;
    }
    .learning-programs-section .row .block {
        padding-right: 0;
    }
}
</style>

<div class="learning-programs-section">
    <div class="head">
        <div class="container">
            <?php the_field('learning_programs_title'); ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php if (have_rows('learning_programs')) : while (have_rows('learning_programs')) : the_row(); ?>
        
            <div class="col">
                <div class="block">
                    <?php the_sub_field('learn_program'); ?>
                </div>
            </div>

            <?php endwhile;
            else : endif; ?>
        </div>    
    </div>
</div>