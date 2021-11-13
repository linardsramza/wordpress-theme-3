<?php
/*
    Template name: Recommendations
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
    <section class="mb-7">
        <div class="container recommendations">
            <div class="row recommendations__row">

                <?php $recommendations = get_field('recommendation');
                if(!empty($recommendations)):
                    foreach($recommendations as $recommendation): ?>
                    <div class="col-lg-4">
                        <div class="recommendations__item">
                            <img src="<?= $recommendation[recommendation_image]; ?>">
                        </div>
                    </div>
                <?php endforeach;
                endif; ?>

            </div>
        </div>
    </section>
    <script>
        var recommendationsItems = document.querySelectorAll('.recommendations__item');
        for (var i = 0; i < recommendationsItems.length; i++) {
            var item = recommendationsItems[i];
            item.onclick = function () {
                this.classList.toggle('active');
            }
        }
    </script>
</div>
<?php get_footer(); ?>
