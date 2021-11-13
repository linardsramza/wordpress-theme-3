<?php
/*
    Template name: Promotion
*/
get_header(); ?>
    <div class="page-section page__bg-image" data-bg-animation="<?= get_template_directory_uri() ?>/assets/images/newPackMain.png" data-bg-image-small="<?= get_template_directory_uri() ?>/assets/images/bg-small.png" data-bg-image-middle="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png" data-bg-image-full="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="page-section__top">
                            <h1 class="page__title small-line"><?php the_title(); ?></h1>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>
