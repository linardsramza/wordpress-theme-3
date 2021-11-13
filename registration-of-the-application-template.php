<?php
/*
    Template name: Registration of the application
*/
get_header(); ?>
<div class="page-section page__bg-image" data-bg-image-small="<?= get_template_directory_uri() ?>/assets/images/bg-small.png" data-bg-image-middle="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png" data-bg-image-full="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png">

    <?php get_template_part( 'pack-animation' ); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="page-section__top">
                    <h1 class="page__title small-line">
                        <?= the_title(); ?>
                    </h1>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
    <div class="container">
    <div class="row">
        <div class="feedback">
            <?php 
                $form_headline = get_field('form_headline');
                $form_description = get_field('form_description');
                $form_title = get_field('form_title');
            ?>
            <div class="feedback__block">
                <?php if(!empty($form_headline)) : ?>
                    <div class="feedback__title">
                        <?= $form_headline; ?>
                    </div>
                <?php endif;
                if(!empty($form_description)) : ?>
                    <div class="feedback__desc">
                        <?= $form_description; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="feedback__block">
                <?php if(!empty($form_title)) : ?>
                    <div class="feedback__title">
                        <?= $form_title; ?>
                    </div>
                <?php endif; ?>
                <div class="feedback__content">
                    <?= the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
