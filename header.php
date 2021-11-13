<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="panel"></div>
    <div id="wrapper">
        <div class="promo__wrapper">
            <a href="<?= get_field('promotion_page_link', 'option'); ?>" class="promo__button"><?php _e( 'New in Europe', 'newpack' ); ?></a>
        </div>
        <header class="header">
            <div class="mobile-menu">
                <div class="mobile-menu__header">
                    <a href="javascript:void(0)" class="btn-mobile-menu-close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                            <g>
                                <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                                c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                                C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                                s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path>
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="mobile-menu__wrapper">
                    <ul class="lang-select">
                        <?php pll_the_languages(array('show_flags' => 0,'show_names' => 1, 'hide_current' => 0)); ?>
                    </ul>
                    <div class="mobile__cart-wrapper"></div>

                    <?php wp_nav_menu(array(
                        'theme_location'    => 'main-menu',
                        'depth'             => 3,
                        'container'         => '',
                        'container_id'      => '',
                        'container_class'   => '',
                        'menu_class'        => 'mobile-nav',
                        'before'            => '',
                        'after'             => '',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    )); ?>

                    <div class="row mobile-menu__bottom">
                        <div class="col">
                            <?php
                                $phone_numbers = get_field('phone_numbers', 'option');

                            if(!empty($phone_numbers)): ?>
                                <div class="mobile-menu__contacts">
                                    <?php foreach($phone_numbers as $phone): ?>
                                        <a href="tel:<?php echo str_replace([' ', ')', '(', '-'], '', $phone['phone_number']); ?>" class="mobile-menu__contacts-item"><?= $phone['phone_number']; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col">
                            <div class="mobile-menu__social-items">
                                <?php
                                    $instagram       = get_field('instagram_link', 'option');
                                    $facebook        = get_field('facebook_link', 'option');
                                    $vkontakte       = get_field('vkontakte_link', 'option');
                                ?>
                                <?php if(!empty($instagram)): ?>
                                    <a href="<?= $instagram; ?>" class="social-icon social-icon--instagram" title="Instagram" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                                            <g>
                                                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z"></path>
                                                <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"></path>
                                                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>

                                <?php if(!empty($facebook)): ?>
                                <a href="<?= $facebook; ?>" class="social-icon social-icon--facebook" title="Facebook" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <path d="M296.296,512H200.36V256h-64v-88.225l64-0.029l-0.104-51.976C200.256,43.794,219.773,0,304.556,0h70.588v88.242h-44.115   c-33.016,0-34.604,12.328-34.604,35.342l-0.131,44.162h79.346l-9.354,88.225L296.36,256L296.296,512z"></path>
                                        </g>
                                    </svg>
                                </a>
                                <?php endif; ?>

                                <?php if(!empty($vkontakte)): ?>
                                    <a href="<?= $vkontakte; ?>" class="social-icon social-icon--vk" title="VKontakte" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 548.358 548.358" style="enable-background:new 0 0 548.358 548.358;" xml:space="preserve">
                                            <g>
                                                <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571   l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13   c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939   l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568   c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859   c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238   c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849   c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995   c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706   c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125   c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137   c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71   c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851   c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837   c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418   c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431   c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558   c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267   c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427   c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711   C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659   c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981   c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416   c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834   c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851   c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418   c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429   c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274   l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14   c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712   C546.782,404.25,546.115,401.725,545.451,400.298z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col header__top">
                        <ul class="lang-select">
                            <?php pll_the_languages(array('show_flags' => 0,'show_names' => 1, 'hide_current' => 0)); ?>
                        </ul>
                        <a href="javascript:void(0)" class="btn-mobile-menu">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 73.168 73.168" style="enable-background:new 0 0 73.168 73.168;" xml:space="preserve">
                                <g>
                                    <g id="Navigation">
                                        <g>
                                            <path d="M4.242,14.425h64.684c2.344,0,4.242-1.933,4.242-4.324c0-2.385-1.898-4.325-4.242-4.325H4.242
                                                C1.898,5.776,0,7.716,0,10.101C0,12.493,1.898,14.425,4.242,14.425z M68.926,32.259H4.242C1.898,32.259,0,34.2,0,36.584
                                                c0,2.393,1.898,4.325,4.242,4.325h64.684c2.344,0,4.242-1.933,4.242-4.325C73.168,34.2,71.27,32.259,68.926,32.259z
                                                 M68.926,58.742H4.242C1.898,58.742,0,60.683,0,63.067c0,2.393,1.898,4.325,4.242,4.325h64.684c2.344,0,4.242-1.935,4.242-4.325
                                                C73.168,60.683,71.27,58.742,68.926,58.742z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>

                        <div class="header__left-sidebar">
                            <div class="left-sidebar__row">
                                <div class="left-sidebar__col">
                                    <div class="header__cart-wrapper">
                                        <div id="headerCart" class="bx-basket bx-opener">
                                            <a href="#" class="header__cart header__cart--empty">
                                                <span class="header__cart-count"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.23 27.8">
                                                    <path class="header-cart-icon" d="M422.54,732.76h3.86L423,743.22a2.46,2.46,0,0,1-2.34,1.7H406.6a2.46,2.46,0,0,1-2.34-1.7l-3.38-10.46" transform="translate(-390.96 -724.48)"></path>
                                                    <polyline class="header-cart-empty-line" points="15.5,8.3 32,8.3"></polyline>
                                                    <polyline class="header-cart-full-line" points="10,8.3 14.5,8.3"></polyline>
                                                    <circle class="header-cart-icon" cx="15.35" cy="25.2" r="1.81"></circle>
                                                    <circle class="header-cart-icon" cx="30.22" cy="25.2" r="1.81"></circle>
                                                    <path class="header-cart-icon" d="M391.75,725.26h4.91A2.46,2.46,0,0,1,399,727l3.39,10.47" transform="translate(-390.96 -724.48)"></path>
                                                    <polyline class="header-cart-ok-icon" points="35.44 0.8 22.68 13.56 17.4 8.28"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-sidebar__col">
                                    <?php
                                        $phone_numbers = get_field('phone_numbers', 'option');

                                    if(!empty($phone_numbers)): ?>
                                        <div class="header__contacts">
                                            <?php foreach($phone_numbers as $phone): ?>
                                                <a href="tel:<?php echo str_replace([' ', ')', '(', '-'], '', $phone['phone_number']); ?>" class="header__contacts-item"><?= $phone['phone_number']; ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            $get_language = get_locale();
                            $logo       = get_field('logo', 'option');
                            $site_title = get_bloginfo('name');
                        ?>
                        <?php if ($get_language == 'ru_RU'): ?>
                            <a href="<?= get_home_url(); ?>" class="header__logo" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/logo-top-ru.png)" title=""></a>
                        <?php elseif ($get_language == 'lv'): ?>
                            <a href="<?= get_home_url(); ?>" class="header__logo" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/logo-top-lv-1.png)" title=""></a>
                        <?php else: ?>
                            <a href="<?= get_home_url(); ?>" class="header__logo" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/logo-top-eng-1.png)" title=""></a>
                        <?php endif ?>
                    </div>
                </div>

                <div class="row">
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'main-menu',
                        'depth'             => 3,
                        'container'         => 'div',
                        'container_id'      => '',
                        'container_class'   => 'col header__bottom',
                        'menu_class'        => 'header__menu nav',
                        'before'            => '',
                        'after'             => '',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    )); ?>
                </div>
            </div>
        </header>
