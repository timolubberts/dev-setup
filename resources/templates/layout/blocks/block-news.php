<?php 
//settings
$args = array(  'numberposts'   => 4,
                'orderby'       => 'post_date',
                'order'         => 'DESC');

$recent_posts = wp_get_recent_posts($args);

?>

<section id="dev-news" class="dev-news">
    <div class="container">
        <div class="row">
            <div class="dev-news__header">
                <h2><?= get_field('news_header'); ?></h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div id="dev-news-slide" class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php if(!empty($recent_posts)): ?>
                                <?php foreach($recent_posts as $post): ?>
                                    <?php

                                    if(get_the_post_thumbnail($post['ID'])){
                                        $thumbnail = get_the_post_thumbnail($post['ID']);
                                    }
                                    else{
                                        $thumbnail = get_template_directory_uri() . '/resources/assets/images/beer.jpeg';
                                    }
                                    $date = $post['post_date'];
                                    $title = $post['post_title'];
                                    $excerpt = $post['post_excerpt'];
                                    $link = get_permalink($post['ID']);
                                    ?>
                                    <div class="splide__slide">
                                        <div class="dev-news__item">
                                            <div class="dev-news__item--thumbnail">
                                                <?php echo $thumbnail; ?>
                                            </div>
                                            <div class="dev-news__item--date">
                                                <p><?= $date ?></p>
                                            </div>
                                            <div class="dev-news__item--title">
                                                <h5><?= $title ?></h5>
                                            </div>
                                            <div class="dev-news__item--excerpt">
                                                <p><?= $excerpt ?></p>
                                            </div>
                                            <div class="dev-news__item--link">
                                                <a href="<?= $link ?>">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>