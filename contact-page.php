<?php
/*
Template Name: Контакт страница

*/

get_header();
?>
<?php get_template_part( 'template-parts/header', 'section' ); ?>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920"><?php bloginfo('phone') ?></a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:<?php bloginfo('admin_email') ?>"><?php bloginfo('admin_email') ?></a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="<?php bloginfo('url') ?>"><?php bloginfo('url') ?></a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
           
<?php get_template_part( 'template-parts/form'); ?>
          
          </div>

          <div class="col-lg-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_sidebar();
get_footer();
