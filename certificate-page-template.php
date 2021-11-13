<?php
/*
    Template name: Certificate
*/
get_header(); ?>
    <div class="page-section page__bg-image" data-bg-image-small="<?= get_template_directory_uri() ?>/assets/images/bg-small.png" data-bg-image-middle="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png" data-bg-image-full="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png">

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
    <style>
        .certificate {
            text-align: center;
        }
        .certificate img {
            width: 700px;
            height: auto;
        }
        @media (max-width: 767px) {
            .certificate img {
                width: 100%;
            }
        }  
    </style>

    <?php 
    $certificate_image = get_field("certificate_image");

    if(!empty($certificate_image)): ?>
        <section class="mb-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 certificate">
                        <img alt="<?= $certificate_image[alt]; ?>" src="<?= $certificate_image[url]; ?>" title="<?= $certificate_image[title]; ?>" align="middle">
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
