<?php
/*
    Template name: Production
*/
setPostViews(get_the_ID());
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
        <section class="mb-7">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="article-item__top-panel">
                            <span class="article-item__date-create"><?php echo get_the_date( 'd F Y'); ?> <?php the_time( 'H:i' ); ?></span>
                            <span class="article-item__show-counter"><?php _e( 'Views', 'newpack' ); ?>: <?php echo getPostViews(get_the_ID()); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="artile-detail">
                            <?php
                                $post_gallery = get_field('post_gallery');

                            if(!empty($post_gallery)): ?>
                                <div class="news-slider">

                                    <div class="news-slider__main">
                                        <?php foreach($post_gallery as $gallery_image):
                                            $resized_image = aq_resize( $gallery_image, 860, 570, true, true, true );
                                        ?>
                                            <div class="news-slider__main-item">
                                                <img src="<?= $resized_image; ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="news-slider__navigation">
                                        <?php foreach($post_gallery as $gallery_small_image):
                                            $resized_small_image = aq_resize( $gallery_small_image, 166, 110, true, true, true );
                                        ?>
                                            <div class="news-slider__navigation-item">
                                                <img src="<?= $resized_small_image; ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?= the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
