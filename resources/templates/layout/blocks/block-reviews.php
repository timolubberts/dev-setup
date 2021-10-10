<section id="dev-reviews" class="dev-reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div id="dev-reviews-slide" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php if(have_rows('review_repeater')): ?>
                                <?php while(have_rows('review_repeater')): the_row();?>
                                    <?php 
                                    $text = get_sub_field('review_text');
                                    $author = get_sub_field('review_author');
                                    ?>
                                    <div class="splide__slide">
                                        <div class="dev-reviews__item">
                                            <div class="dev-reviews__item--text">
                                                <?= the_sub_field('review_text') ?>
                                            </div>
                                            <div class="dev-reviews__item--author">
                                                <?= the_sub_field('review_author') ?>
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