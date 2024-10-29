<?php
/*
Template Name: home
 */
?>
<?php get_header(); ?>
<section class="top">
        <div class="top__title">
            <h1><?php the_field('header-title'); ?></h1>
            <h6><?php the_field('header-subtitle'); ?></h6>
            <button type="button" class="button_btn">See plans</button>
        </div>
    </section>

    <section class="hero">
        <div class="hero__nav">
            <div class="hero__nav-number">
                <?php the_field('number_page-1'); ?>
            </div>
            <div class="hero__nav-name">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/work.svg" alt="work">
                <?php the_field('name_page-1'); ?>
            </div>
        </div>
        <div class="slider">
            <div class="slider__intro">
                <div class="slider-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/1.png" alt="">
                </div>
                <div class="slider-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/2.png" alt="">
                </div>
                <div class="slider-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/3.png" alt="">
                </div>
                <div class="slider-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/4.png" alt="">
                </div>
                <div class="slider-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/5.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="plans">
        <div class="plans__nav">
            <div class="plans__nav-number">
                <?php the_field('number_page-2'); ?>
            </div>
            <div class="plans__nav-text">
                <?php the_field('text_page'); ?>
            </div>
            <div class="plans__nav-name">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/work.svg" alt="Plans">
                    <?php the_field('name_page-2'); ?>
            </div>
        </div>
        <div class="plans__menu">
            <button class="active" id="monthly">Monthly</button>
            <button id="quarterly">Quarterly<span>-10%</span></button>
            <button id="annual">Annual<span>-20%</span></button>
        </div>
        <div class="plans__intro-wrapper">
            <div class="plans__intro">
                <!-- Перший вложений блок-->
                <div class="plans__item">
                    <div class="plans__item-title">
                        <h2><?php the_field('name_plans-1'); ?></h2>
                    </div>
                    <div class="plans__item-price">
                        <div id="concept-original-price" class="original-price" style="display: none;">$4.500</div>
                        <div id="concept-price">$4.500 <span>/month</span></div>
                    </div>
                    <div class="plans__item-subtitle"><?php the_field('subname_plans-1'); ?></div>
                    <button class="plans__btn first-btn">Get started-></button>
                    <div class="plans__item-like">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                <strong>80 hours per month</strong>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Research & Benchmarking
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">User Journey
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Concept Development
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Product Architecture
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Unlimited Team Members
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Software Licences
                            </li>
                            <li class="disabled">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_2.svg" alt="">
                                DFM
                            </li>
                            <li class="disabled">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_2.svg" alt="">
                                Prototyping
                            </li>
                            <li class="disabled">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_2.svg" alt="">
                                Simultaneous Designers
                            </li>
                            <li class="disabled">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_2.svg" alt="">
                                Photorealistic Rendering
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Другий вложений блок-->
                <div class="plans__item">
                    <div class="plans__item-title">
                        <h2><?php the_field('name_plans-2'); ?></h2>
                    </div>
                    <div class="plans__item-price">
                        <div id="product-original-price" class="original-price" style="display: none;">$6.000</div>
                        <div id="product-price">$6.000<span>/month</span></div>
                    </div>
                    <div class="plans__item-subtitle"><?php the_field('subname_plans-2'); ?></div>
                    <button class="plans__btn">Get started-></button>
                    <div class="plans__item-like">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                <strong>120 hours per month</strong>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Research & Benchmarking
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">User Journey
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Concept Development
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Product Architecture
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Unlimited Team Members
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Software Licences
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                DFM
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Prototyping
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Simultaneous Designers
                            </li>
                            <li class="disabled">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_2.svg" alt="">
                                Photorealistic Rendering
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Третій вложений блок-->
                <div class="plans__item offer">
                    <div class="best-offer">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/si.svg" alt="Left icon" class="offer-icon-left">
                        Best Offer
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/si.svg" alt="Right icon" class="offer-icon-right">
                    </div>
                    <div class="plans__item-title">
                    <h2><?php the_field('name_plans-3'); ?></h2>
                    </div>
                    <div class="plans__item-price">
                        <div id="services-original-price" class="original-price" style="display: none;">$7.500</div>
                        <div id="services-price">$7.500 <span>/month</span></div>
                    </div>
                    <div class="plans__item-subtitle"><?php the_field('name_plans-3'); ?></div>
                    <button class="plans__btn">Get started-></button>
                    <div class="plans__item-like">
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                <strong>180 hours per month</strong>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Research & Benchmarking
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">User Journey
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Concept Development
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Product Architecture
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Unlimited Team Members
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Software Licences
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                DFM
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Prototyping
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Simultaneous Designers
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/plans_1.svg" alt="">
                                Photorealistic Rendering
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Четвертий вложений блок-->
                <div class="plans__item intro-end">

                    <div class="plans__item-title">
                        <h2><?php the_field('name_plans-4'); ?></h2>
                    </div>
                    <div class="plans__item-subtitle"><?php the_field('subname_plans-4'); ?></div>
                    <div class="plans__item-text"><?php the_field('ask_plans'); ?></div>
                    <button class="plans__btn">Let’s talk-></button>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
