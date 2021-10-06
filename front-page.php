<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dev-test
 */

get_header();
?>

  

<?php
  the_content();
  ?>
  
  <div id="news" class="news">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="news__header">
            Latest news from our company
          </h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12">
          <div id="news-slide" class="splide">
            <div class="splide__track">
              <div class="splide__list">
                <div class="splide__slide">
                  <div class="news__item">
                    <div class="news__img">
                      <img src="<?= get_template_directory_uri() ?>/resources/assets/images/Pexels photo 2.jpg">
                    </div>
                    <div class="news__text">
                      <p class="news__date">
                        9 November 2016
                      </p>
                      <p class="news__title">
                        10 Tips for more e-commerce inside enterprises like...
                      </p>
                      <p class="news__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et malesuada sapien,
                        vitae tristique justo. Nulla.
                      </p>
                      <a class="news__readmore"href="main.html">
                        Read news article
                        <img src="<?= get_template_directory_uri() ?>/resources/assets/images/right-chevron.svg">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="splide__slide">
                  <div class="news__item">
                    <div class="news__img">
                      <img src="<?= get_template_directory_uri() ?>/resources/assets/images/woman-helmet-work-electrician.jpg">
                    </div>
                    <div class="news__text">
                      <p class="news__date">
                        9 November 2016
                      </p>
                      <p class="news__title">
                        10 Tips for more e-commerce inside enterprises like...
                      </p>
                      <p class="news__content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et malesuada sapien,
                        vitae tristique justo. Nulla.
                      </p>
                      <a class="news__readmore"href="main.html">
                        Read news article
                        <img src="<?= get_template_directory_uri() ?>/resources/assets/images/right-chevron.svg">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="splide__slide">
                  <div class="news__item">
                    <div class="news__img">
                      <img src="<?= get_template_directory_uri() ?>/resources/assets/images/Pexels photo 1.jpg">
                    </div>
                    <div class="news__text">
                      <p class="news__date">
                        9 November 2016
                      </p>
                      <p class="news__title">
                        10 Tips for more e-commerce inside enterprises like...
                      </p>
                      <p class="news__content">
                        Lorem ipsum dolor sit amet.
                      </p>
                      <a class="news__readmore"href="main.html">
                        Read news article
                        <img src="<?= get_template_directory_uri() ?>/resources/assets/images/right-chevron.svg">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="splide__slide">
                  <div class="news__item">
                    <div class="news__img">
                      <img src="<?= get_template_directory_uri() ?>/resources/assets/images/Pexels photo 1.jpg">
                    </div>
                    <div class="news__text">
                      <p class="news__date">
                        Date
                      </p>
                      <p class="news__title">
                        Title
                      </p>
                      <p class="news__content">
                        Content  
                      </p>
                      <a class="news__readmore"href="main.html">
                        Read news article
                        <img src="<?= get_template_directory_uri() ?>/resources/assets/images/right-chevron.svg">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="testimonials background-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div id="testimonials-slide" class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <p class="testimonials__text">
                    "Bedankt voor de snelle en professionele afhandeling bij het maken van onze nieuwe website. Alles
                    was binnen no-time geregeld zonder mankementen en vragen."
                  </p>
                  <p class="testimonials__author">
                    Tom Dijkslag, Front-end developer at Hoogdesign
                  </p>
                </li>
                <li class="splide__slide">
                  <p class="testimonials__text">
                    What's 9+10? 21
                  </p>
                  <p class="testimonials__author">
                    stupid
                  </p>
                </li>
                <li class="splide__slide">
                  <p class="testimonials__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam deleniti corrupti ex dicta rem unde aspernatur saepe velit dolor laborum.
                  </p>
                  <p class="testimonials__author">
                    Tim
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php

get_footer();
