<?php
/*
    Template name: Homepage
*/
get_header(); ?>
    <div class="page-section page__bg-image" data-bg-animation="<?= get_template_directory_uri() ?>/assets/images/newPackMain.png" data-bg-image-small="<?= get_template_directory_uri() ?>/assets/images/bg-small.png" data-bg-image-middle="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png" data-bg-image-full="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png">

        <?php get_template_part( 'pack-animation' ); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="page-section__top">
                            <h1 class="page__title small-line"><?= the_title(); ?></h1>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; endif; ?>

        <section class="mb-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <?php
                            $pack_list = get_field('pack_list');
                        if(!empty($pack_list)): ?>
                            <section>
                                <div class="container">
                                    <div class="row section-items">
                                        <?php foreach($pack_list as $pack_list_item):
                                            $get_pack_image = $pack_list_item['image'];
                                            $pack_title     = $pack_list_item['title'];
                                            $price_table    = $pack_list_item['scroll_to_price_table'];
                                            $pack_url_id    = $pack_list_item['link_to'];
                                            $permalink      = get_permalink($pack_url_id);
                                        ?>
                                            <div class="col-lg-6 section-item__wrapper">
                                                <div class="section-item">
                                                    <a href="<?= $permalink; ?>" class="section-item__image" style="background-image: url(<?= $get_pack_image['url']; ?>)"></a>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="<?= $permalink; ?>" class="section-item__title"><?= $pack_title; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                    </div>

                    <div class="offset-lg-1 col-lg-6 page-right-column">
                        <?= the_content(); ?>
                    </div>

                </div>

                <!-- GALLERY -->
                <?php
                $gallery = get_field('gallery');

                if(!empty($gallery)): ?>
                    <div class="row" id="home-gallery">
                        <div class="col">
                            <h2 class="page__title small-line"><?= get_field('gallery_title'); ?></h2>
                            <div class="artile-detail home-gallery">
                                <div class="news-slider">
                                    <div class="news-slider__main">
                                        <?php foreach($gallery as $gallery_image): ?>
                                            <div class="news-slider__main-item">
                                                <img src="<?= $gallery_image; ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="news-slider__navigation">
                                        <?php foreach($gallery as $gallery_small_image):
                                            $resized_small_image = aq_resize( $gallery_small_image, 120, 150, true, true, true );
                                        ?>
                                            <div class="news-slider__navigation-item">
                                                <img src="<?= $resized_small_image; ?>">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">
                        .home-gallery .news-slider__main-item img {
                            margin: 0 auto;
                            padding: 0 50px;
                            max-height: 400px;
                            max-width: 100%;
                            object-fit: contain;
                        }
                    </style>
                <?php endif; ?>
                <!-- END GALLERY -->

            </div>
        </section>
    </div>
<?php get_footer(); ?>
