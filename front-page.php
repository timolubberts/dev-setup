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

  <div class="background-1">
    <div id="about" class="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 order-2 order-lg-1">
            <div class="about__img">
              <img class="img-responsive" src="<?= get_template_directory_uri() ?>/resources/assets/images/Pexels photo 2.jpg">
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 order-1 order-lg-2">
            <h2 class="about__title">
              About our company
            </h2>
            <p class="about__content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non dapibus libero, quis interdum mi.
              Pellentesque maximus posuere faucibus. Pellentesque justo nunc, varius sit amet commodo et, mollis
              quis
              dui. Quisque ullamcorper orci faucibus elementum ultrices. Sed condimentum sodales dolor. Aliquam erat
              volutpat. Proin rhoncus mi accumsan, luctus purus eu, dapibus mi. Phasellus et velit in nibh commodo
              pharetra ut eget leo. Nulla congue ullamcorper condimentum.
            </p>
            <h5 class="about__subtitle">
              Lorem Ipsum
            </h5>
            <p class="about__content">
              Nam imperdiet leo non imperdiet lobortis. Aliquam et mauris iaculis, volutpat velit eu, lacinia mi.
              Nunc a
              semper nunc. Morbi ante velit, efficitur sit amet feugiat vel, porttitor vel turpis.
            </p>
            <a href="main.html" class="about__button">Get started!</a>
          </div>
        </div>
      </div>
      
    </div>
  
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="services__title services__title--blue">
              Our services
            </h2>
            <p class="services__subtitle">
              We provide some awesome services, check them out!
            </p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div id="services-slide" class="splide">
              <div class="splide__track">
                <div class="splide__list">
                  <div class="splide__slide">
                    <div class="services__item">
                      <div class="services__img">
                        <img class="img-responsive" src="<?= get_template_directory_uri() ?>/resources/assets/images/refresh.svg">
                      </div>
                      <h4 class="services__title">
                        Monthly updates
                      </h4>
                      <p class="services__content">
                        Duis eget tempus augue, ut auctor nunc. Cras pretium tempus ornare. Curabitur dictum
                        pellentesque dapibus. Nunc vitae urna vitae ante fringilla tincidunt. In ante lectus,
                        tristique id risus et, rhoncus auctor purus.
                      </p>
                      <a href="main.html" class="services__moreinfo">
                        More information
                      </a>
                    </div>
                  </div>
                  <div class="splide__slide">
                    <div class="services__item">
                      <div class="services__img">
                        <img class="img-responsive" src="<?= get_template_directory_uri() ?>/resources/assets/images/verified.svg">
                      </div>
                      <h4 class="services__title">
                        Monthly updates
                      </h4>
                      <p class="services__content">
                        Duis eget tempus augue, ut auctor nunc. Cras pretium tempus ornare. Curabitur dictum
                        pellentesque dapibus. Nunc vitae urna vitae ante fringilla tincidunt. In ante lectus,
                        tristique id risus et, rhoncus auctor purus.
                      </p>
                      <a href="main.html" class="services__moreinfo">
                        More information
                      </a>
                    </div>
                  </div>
                  <div class="splide__slide">
                    <div class="services__item">
                      <div class="services__img">
                        <img class="img-responsive" src="<?= get_template_directory_uri() ?>/resources/assets/images/tools.svg">
                      </div>
                      <h4 class="services__title">
                        Monthly updates
                      </h4>
                      <p class="services__content">
                        Duis eget tempus augue, ut auctor nunc. Cras pretium tempus ornare. Curabitur dictum
                        pellentesque dapibus. Nunc vitae urna vitae ante fringilla tincidunt. In ante lectus,
                        tristique id risus et, rhoncus auctor purus.
                      </p>
                      <a href="main.html" class="services__moreinfo">
                        More information
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
