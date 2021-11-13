<?php
get_header(); ?>
    <div class="page-section page__bg-image" data-bg-image-small="<?= get_template_directory_uri() ?>/assets/images/bg-small.png" data-bg-image-middle="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png" data-bg-image-full="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png">

        <?php get_template_part( 'pack-animation' ); ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="page-section__top">
                        <h1 class="page__title small-line"><?= get_the_title(42); ?></h1>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </section>
<div class="container">
    <div class="article-item__filter">
        <a href="<?= get_year_link(""); ?>">‹‹</a>
        <?php wp_get_archives(array('type' => 'yearly', 'format' => 'custom', 'before' => '', 'after' => '', 'order' => 'ASC',)); ?>
        <script>
        	jQuery(document).ready(function(){
        		jQuery(".article-item__filter a[aria-current='page']").addClass("current");
			});
        </script>
    </div>
</div>





    <section class="mb-7">
        <div class="container">
            <div class="row articles-items">
                <div class="col-lg-6">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="article-item__wrapper">
                            <div class="article-item">

                                <a href="<?php the_permalink(); ?>" class="article-item__title"><?= the_title(); ?></a>

                                <div class="article-item__description">
                                    <?php echo get_the_content(); ?>
                                </div>

                                <div class="article-item__date">
                                    <?php echo get_the_date( 'd F Y' ); ?>
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/news_images.png" class="article-item__icon">
                                </div>
                                <div class="article-item__detail">
                                    <a href="<?php the_permalink(); ?>">
                                        <span><?php _e( 'Read more', 'newpack' ); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>

                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </section>


</div>
<?php get_footer(); ?>
