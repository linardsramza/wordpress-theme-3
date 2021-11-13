<?php
/*
    Template name: Contacts
*/
get_header(); ?>
    <div class="page-section page__bg-image" data-bg-animation="<?= get_template_directory_uri() ?>/assets/images/newPackMain.png" data-bg-image-small="<?= get_template_directory_uri() ?>/assets/images/bg-small.png" data-bg-image-middle="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png" data-bg-image-full="<?= get_template_directory_uri() ?>/assets/images/bg-middle.png">

        <?php get_template_part( 'pack-animation' ); ?>

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

    <section class="mb-7 contacts">

        <?php
            $location_link_text = get_field('location_link_text');
            $references_link_text = get_field('references_link_text');
            $phones_heading_text = get_field('phones_heading_text');
            $phone_numbers = get_field('phone_numbers', 'options');
            $managers_heading_text = get_field('managers_heading_text');
            $managers = get_field('managers');
            $contact_email_heading_text = get_field('contact_email_heading_text');
            $site_email = get_field('email_address', 'options');
            $work_hours_heading_text = get_field('work_hours_heading_text');
            $work_hours = get_field('work_hours');
			$info_list = get_field('info_list');
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <?php if(!empty($location_link_text) || !empty($references_link_text)): ?>
                        <div class="contacts__top mb-5" style="display: none;">
                            <?php if(!empty($location_link_text)): ?>
                                <div class="contacts__item">
                                    <a href="<?= the_permalink(99); ?>"><?= $location_link_text; ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($references_link_text)): ?>
                                <div class="contacts__item">
                                    <a href="<?= the_permalink(102); ?>"><?= $references_link_text; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="contacts__block">
                        <?php if(!empty($phones_heading_text)): ?>
                            <div class="contacts__label">
                                <?= $phones_heading_text; ?>:
                            </div>
                        <?php endif;
                        if(!empty($phone_numbers)):
                            foreach($phone_numbers as $phone_number): ?>
                            <a href="tel:<?php echo str_replace([' ', ')', '(', '-'], '', $phone_number['phone_number']); ?>" class="contacts__item">
                                <?php echo $phone_number['phone_number']; ?>
                            </a>
                            <?php endforeach;
                        endif; ?>
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contacts__block"  style="display: none;">
                                <?php if(!empty($managers_heading_text)): ?>
                                    <div class="contacts__label">
                                        <?= $managers_heading_text; ?>:
                                    </div>
                                <?php endif;
                                if(!empty($managers)):
                                    foreach($managers as $manager): ?>
                                        <div class="contacts__item-label">
                                            <?php echo $manager[manager_name]; ?> email:
                                            <a href="mailto:<?php echo $manager[manager_email]; ?>" class="contacts__item">
                                                <?php echo $manager[manager_email]; ?>
                                            </a>
                                        </div>
                                    <?php endforeach;
                                endif; ?>

                            </div>
                            <div class="contacts__block contacts__block--big">
                                <?php if(!empty($contact_email_heading_text)): ?>
                                    <div class="contacts__label">
                                        <?= $contact_email_heading_text; ?>:
                                    </div>
                                <?php endif;
                                if(!empty($site_email)): ?>
                                    <a href="mailto:<?= $site_email; ?>" class="contacts__item">
                                        <?= $site_email; ?>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="contacts__block"  style="display: none;">
                                <?php if(!empty($work_hours_heading_text)): ?>
                                    <div class="contacts__label">
                                        <?= $work_hours_heading_text; ?>:
                                    </div>
                                <?php endif;
                                if(!empty($work_hours)): ?>
                                    <div class="contacts__item contacts__item--black">
                                        <?= $work_hours; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
							
                        </div>
                    </div>
					
                </div>
				

            </div>
			<?php if(!empty($info_list)): ?>
					<?php foreach($info_list as $item): ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="contacts__block contacts__block--big">
									<?php if(!empty($item['title'])): ?>
										<div class="contacts__label">
											<?= $item['title']; ?>:
										</div>
									<?php endif;
									if(!empty($item['content'])): ?>
										<?= $item['content']; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
        </div>
    </section>



</div>
<?php get_footer(); ?>
