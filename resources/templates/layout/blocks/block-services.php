<?php
/**
 * Points Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


?>
<section id="dev-services" class="dev-services">
    <div class="container">
        <div class="row">
            <div class="dev-services__title">
                <?= get_field('services_header'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="dev-services-slide" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                        <?php if(have_rows('services_repeater')): ?>
                            <?php while(have_rows('services_repeater')): the_row(); ?>
                                <?php 
                                    $icon = get_sub_field('service_icon'); 
                                    $title = get_sub_field('service_title');  
                                    $text = get_sub_field('service_text');  
                                    $link = get_sub_field('service_link');    
                                ?>
                                <div class="splide__slide">
                                    <div class="dev-services__item">
                                        <div class="dev-services__item--icon">
                                            <img src="<?= $icon ?>">
                                        </div>
                                        <div class="dev-services__item--title">
                                            <?php the_sub_field('service_title'); ?>
                                        </div>
                                        <div class="dev-services__item--text">
                                            <?php the_sub_field('service_text'); ?>
                                        </div>
                                        <div class="dev-services__item--link">
                                            <a href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>