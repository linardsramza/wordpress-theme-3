<?php
/*
    Template name: Reviews
*/
get_header(); ?>
<div class="page-section page__bg-image" data-bg-image-small="/local/templates/newpack/images/bg-small.png" data-bg-image-middle="/local/templates/newpack/images/bg-middle.png" data-bg-image-full="/local/templates/newpack/images/bg-middle.png">

    <?php get_template_part( 'pack-animation' ); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="page-section__top">
                    <h1 class="page__title small-line">
                        <?= the_title();?>                        
                    </h1>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row reviews-items">
                <?php
                $reviews = get_field('review');
                    if(!empty($reviews)):
                    foreach($reviews as $review): ?>
                    <div class="col-md-12 review-item__wrapper">
                        <div class="review-item">
                            <div class="review-item__title">
                                <?= $review[review_name]; ?>                            
                            </div>
                            <div class="review-item__description">
                                <?= $review[review_content]; ?>                             
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
