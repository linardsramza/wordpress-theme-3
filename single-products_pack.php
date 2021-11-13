<?php

get_header();

global $post;
$post_id = $post->ID;

?>
    <?php get_template_part( 'pack-animation' ); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="page-section__top">
                    <?php $subtitle = get_field( 'subtitle', $post_id ); ?>
                    <h1 class="page__title small-line">
                        <?= get_the_title() ?>
                        <?php if(!empty($subtitle)): ?>
                            <span><?= $subtitle; ?></span>
                        <?php endif; ?>
                    </h1>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>

    <section class="mb-7">
        <?php
            $img_url = get_the_post_thumbnail_url($post_id);
            $image_without_animation = get_field('image_without_animation', $post_id);
        ?>
        <?php if(!empty($img_url)): ?>
            <div class="page-section page__bg-image" data-bg-animation="<?= $img_url; ?>" data-bg-image-small="<?= $img_url; ?>" data-bg-image-middle="<?= $img_url; ?>" data-bg-image-full="<?= $img_url; ?>">
        <?php elseif(!empty($image_without_animation)): ?>
             <div class="page-section" data-bg-image="<?= $image_without_animation['url']; ?>">
        <?php else: ?>
            <div>
        <?php endif; ?>
            <div class="container products-content">
                <?php
                    if( have_rows('section') ):
                        while ( have_rows('section') ) : the_row();
                            if( get_row_layout() == 'content_block' ): ?>
                                <?php if(!empty(get_sub_field('price', $post_id ))): ?>
                                    <h2 class="news-detail__products__price"><?= get_sub_field('price', $post_id ); ?></h2>
                                <?php endif; ?>
                                <div class="row">
                                    <?php $content = get_sub_field('content', $post_id ); ?>
                                    <div class="col-lg-6">
                                        <?= $content; ?>
                                    </div>
                                </div>
                            <?php elseif( get_row_layout() == 'table_content_block' ): ?>
                                <div class="row">
                                    <?php
                                        $title          = get_sub_field('title', $post_id );
                                        $table_content  = get_sub_field('table_content', $post_id );
                                    ?>
                                    <div class="price-table-wrapper">
                                        <div class="col-lg-12">
                                            <?php if(!empty($title)): ?>
                                                <h2><?= $title; ?></h2>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!empty($table_content)): ?>
                                            <div class="price-table" id="priceTable">
                                                <?= $table_content; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
							<?php elseif( get_row_layout() == 'spacer' ): ?>
                                <div class="row">
                                	<div class="col-lg-6">
                                        <div class="spacer"></div>
										<style>
											@media (min-width: 1199px){
												.spacer {
													min-height: <?= get_sub_field('spacer_height', $post_id ); ?>px;
												}
											}
										</style>
                                    </div>
                                </div>
                            <?php elseif( get_row_layout() == 'button_block' ): ?>
                                <div class="row">
                                    <?php
                                        $info_text    = get_sub_field('info_text', $post_id );
                                        $button_name  = get_sub_field('button_name', $post_id );
                                        $button_link  = get_sub_field('button_link', $post_id );
                                    ?>
                                    <div class="col-lg-6">
                                        <p class="price-calc__text"><?= $info_text; ?></p>
                                        <?php if(!empty($button_link) || !empty($button_name)): ?>
                                            <a href="<?= $button_link; ?>" class="price-calc__button" style="display: none;"><?= $button_name; ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif;
                        endwhile;

                    else :
                        // no layouts found
                    endif;
                ?>
            </div>
        </div>
    </section>
<?php get_footer()?>
