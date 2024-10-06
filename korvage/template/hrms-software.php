<?php

/**
 * Template Name: HRMS Software Page
 */
get_header();
?>

<!-- Slider Area Start -->
<section class="breadcumb-area-services desktop-responsive" style="background-color:#4AABF4!important">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-5">
            <div class="breadcumb" style="text-align:left">
               <h1 class="py-2"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="py-2"><?php echo esc_html(get_field('description')); ?></p>
               <button class="my-2 py-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
         <div class="col-xl-7 pl-lg-5">
            <div class="breadcumb px-lg-5">
               <?php
               $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
               ?>
               <img src="<?php echo esc_url($image[0]); ?>" />
            </div>
         </div>
      </div>
   </div>
</section>
<section class="breadcumb-area-services mobile-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="breadcrumb-overlay"></div>
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0" style="color:#fff;text-align:left!Important;">
               <h1 class="pb-2"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="pb-2"><?php echo esc_html(get_field('description')); ?></p>
               <button class="my-2 pb-2"><a href="<?php echo esc_html(get_field('url')); ?>">Consult Our Experts</a></button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Area End -->
<section class="services-area">
   <div class="container pb-5 pt-4">
      <?php
      $main_title = get_field('main_title');
      ?>
      <h2 class="mx-auto text-center" style="line-height: 1.3em;color:#202020;font-size:40px;text-align:center"><?php echo esc_html($main_title); ?></h2>
   </div>
</section>

<section class="services-area pt-50 pb-50">
   <div class="container pb-5">
      <?php
      $web_title = get_field('web_title');
      $web_description = get_field('web_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($web_title); ?></h2>
      <p style="color:#202020; font-size:18px" class="app-description"><?php echo esc_html($web_description); ?></p>
   </div>
   <div class="container px-0 pt-5">
      <div class="row">
         <div class="col-md-12">
            <div class="testimonials owl-carousel">
               <?php
               // Query to fetch posts from Services custom post type
               $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => -1, // Retrieve all posts
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'services-box', // Taxonomy name
                        'field' => 'name',
                        'terms' => 'HRMS Software' // Term name
                     )
                  )
               );
               $services_query = new WP_Query($args);

               if ($services_query->have_posts()) :
                  while ($services_query->have_posts()) : $services_query->the_post();
               ?>
                     <div class="single-service">
                        <?php
                        if (has_post_thumbnail()) {
                           the_post_thumbnail('medium', ['class' => 'img-fluid mb-3']);
                        }
                        ?>
                        <div class="single-service-content">
                           <h5><?php the_title(); ?></h5>
                           <?php the_content(); ?>
                        </div>
                     </div>
               <?php
                  endwhile;
                  wp_reset_postdata(); // Reset the query
               else :
                  // If no posts found
                  echo '<p>No services found.</p>';
               endif;
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Services Area End -->
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-1 text-center">
      <?php
      $process_title = get_field('dev_process_title');
      ?>
      <h2 class="py-3 w-lg-75 mx-auto text-center" style="line-height: 1.3em;color:#202020;font-size:36px;text-align:left"><?php echo esc_html($process_title); ?></h2>
   </div>
   <div class="container p-0 difference">
   <div class="row p-0">
      <div class="col-lg-6 col-md-12 px-0 wrong-points">
         <h3 class="py-3" style="border-bottom:2px solid rgba(187, 187, 187, 1);text-align:center;color:rgba(255, 122, 26, 1)"><?php echo esc_html(get_field('negative')['heading']); ?></h3>
         <div class="p-5">
         <h4 style="display: flex;align-items: center;" class="px-5"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/crossed-1.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('negative')['text_1']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/crossed-1.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('negative')['text_2']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/crossed-1.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('negative')['text_3']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/crossed-1.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('negative')['text_4']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/crossed-1.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('negative')['text_5']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/crossed-1.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('negative')['text_6']); ?></span></h4>
         </div>
      </div>
      <div class="col-lg-6 col-md-12 px-0 correct-points">
         <h3 class="py-3" style="border-bottom:2px solid rgba(187, 187, 187, 1);text-align:center;color:rgba(130, 210, 0, 1)"><?php echo esc_html(get_field('positive')['heading']); ?></h3>
         <div class="p-5">
         <h4 style="display: flex;align-items: center;" class="px-5"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/check-mark-3.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('positive')['text_1']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/check-mark-3.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('positive')['text_2']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/check-mark-3.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('positive')['text_3']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/check-mark-3.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('positive')['text_4']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/check-mark-3.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('positive')['text_5']); ?></span></h4>
         <h4 style="display: flex;align-items: center;" class="px-5 pt-4"><img src="<?php echo get_stylesheet_directory_uri() ?>/asset/img/check-mark-3.png" style="width: 25px;"><span class="px-2"><?php echo esc_html(get_field('positive')['text_6']); ?></span></h4>
         </div>
      </div>
      </div>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-3 px-1">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($choose_us_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($choose_us_description); ?></p>
   </div>
   <div class="container-fluid pb-0 px-lg-5">
      <div class="card-container row px-lg-5">
         <?php
         // Query to fetch posts from Services custom post type
         $args = array(
            'post_type' => 'services',
            'posts_per_page' => -1, // Retrieve all posts
            'order' => 'ASC',
            'tax_query' => array(
               array(
                  'taxonomy' => 'services-box', // Taxonomy name
                  'field' => 'name',
                  'terms' => 'HRMS Choose Us', // Term name
               )
            )
         );
         $services_query = new WP_Query($args);

         if ($services_query->have_posts()) :
            $counter = 0;
            while ($services_query->have_posts()) : $services_query->the_post();
               $counter++;
         ?>
               <div class="card-row single-card m-3">
                  <div class="border-0 text-left mb-2">
                     <div class="card-body choose-card">
                        <div class="d-flex align-items-center">
                           <?php
                           if (has_post_thumbnail()) {
                              the_post_thumbnail('medium', ['class' => 'img mb-1 pr-2']);
                           }
                           ?>
                        </div>
                        <div class="content">
                           <h5 class="mb-1"><?php the_title(); ?></h5>
                           <p><?php the_content(); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
         <?php
            endwhile;
            wp_reset_postdata();
         else :
            // If no posts found
            echo '<p>No services found.</p>';
         endif;
         ?>
      </div>
   </div>
</section>
<hr>
<section id="services-section" class="services-area pt-50 pb-50">
   <div class="container pb-3 w-lg-75 text-center">
      <?php
      $digital_title = get_field('digital_title');
      ?>
      <h2 class="py-3 app-title mx-lg-auto" style="line-height: 1.3em;color:#202020;font-size:32px"><?php echo esc_html($digital_title); ?></h2>
   </div>
   <div class="container">
      <p class="arrows my-2 left animate" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-67.png');"><?php echo esc_html(get_field('arrow')['text_1']); ?></p>
      <p class="arrows my-2 right animate" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-69.png');"><?php echo esc_html(get_field('arrow')['text_2']); ?></p>
      <p class="arrows my-2 left animate" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-67.png');"><?php echo esc_html(get_field('arrow')['text_3']); ?></p>
      <p class="arrows my-2 right animate" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-69.png');"><?php echo esc_html(get_field('arrow')['text_4']); ?></p>
      <p class="arrows my-2 left animate" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-67.png');"><?php echo esc_html(get_field('arrow')['text_5']); ?></p>
      <p class="arrows my-2 right animate" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/asset/img/Vector-69.png');"><?php echo esc_html(get_field('arrow')['text_6']); ?></p>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-6 px-lg-5">
            <div class="container px-lg-0">
               <div class="row py-sm-5">
                  <div class="col-md-6 d-flex align-items-center justify-content-center">
                     <div class="box-wrapper">
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter')['name']); ?></span>+</h2>
                           </div>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible; margin-top: -20px; border-radius: 8px;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter_2')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter_2')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_2')['name']); ?></span>+</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-center justify-content-center">
                     <div class="box-wrapper-1">
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter_1')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter_1')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_1')['name']); ?></span>+</h2>
                           </div>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible; margin-top: -20px; border-radius: 8px;">
                           <div class="content-wrapper">
                              <img src="<?php echo esc_url(get_field('counter_3')['image']); ?>">
                              <h6 id="number1" class="number"><?php echo esc_html(get_field('counter_3')['title']); ?></h6>
                              <h2><span class="counter"><?php echo number_format(get_field('counter_3')['name']); ?></span>+</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 pl-lg-5">
            <div class="form container-fluid">
               <?php
               echo do_shortcode(
                  '[contact-form-7 id="9b8714e" title="Contact form 1"]'
               );
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container px-lg-5 text-center mx-auto">
      <?php
      $business_title = get_field('business_title');
      ?>
      <h2 class="pb-3 w-lg-75 mx-auto" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($business_title); ?></h2>
   </div>
   <div class="services-area px-2 py-2" id="services">
      <div class="container-fluid">
         <div class="brand-container px-lg-5 mx-auto">
            <?php
            // Query to fetch posts from Industries custom post type
            $args = array(
               'post_type' => 'industries',
               'posts_per_page' => -1,
               'order' => 'ASC',
               'tax_query' => array(
                  array(
                     'taxonomy' => 'industries', // Taxonomy name
                     'field' => 'name',
                     'terms' => 'Global Brands', // Term name
                  )
               )
            );
            $industries_query = new WP_Query($args);

            if ($industries_query->have_posts()) :
               while ($industries_query->have_posts()) : $industries_query->the_post();
            ?>
                  <div class="global-brand">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'mb-3 px-4']);
                     }
                     ?>
                  </div>
            <?php
               endwhile;
               wp_reset_postdata(); // Reset the query
            else :
               // If no posts found
               echo '<p>No industries found.</p>';
            endif;
            ?>
         </div>
      </div>
   </div>
</section>
<hr>
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-5 text-center mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         $testimonial_descriptions = get_field('testimonial_description');
         ?>
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($testimonial_title); ?></h2>
         <p class="w-lg-50 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:18px;text-align:center"><?php echo esc_html($testimonial_descriptions); ?></p>
      </div>
      <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="false" data-duration="2000">
         <div class="carousel-inner" role="listbox">
            <?php
            // Query testimonial posts
            $args = array(
               'post_type' => 'testimonials',
               'posts_per_page' => -1, // Show all testimonials
               'order' => 'ASC',
               'tax_query' => array(
                  array(
                     'taxonomy' => 'testimonial-page', // Taxonomy name
                     'field' => 'name',
                     'terms' => 'HR & Payroll Management Software', // Term name
                  )
               )
            );
            $testimonials = new WP_Query($args);

            if ($testimonials->have_posts()) :
               $count = 0;
               while ($testimonials->have_posts()) :
                  $testimonials->the_post();
            ?>
                  <div class="carousel-item <?php echo ($count === 0) ? 'active' : ''; ?>">
                     <p class="comma text-center" style="text-align:center">❝</p>
                     <div class="testimonial4_slide">
                        <p><?php the_content(); ?></p>
                        <div class="row img">
                           <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-circle img-responsive p-1" />
                           <span class="px-3">
                              <h4><?php the_title(); ?></h4>
                              <h4 style="font-size:12px"><?php the_field('position'); ?></h4>
                           </span>
                        </div>
                     </div>
                  </div>
            <?php
                  $count++;
               endwhile;
               wp_reset_postdata();
            endif;
            ?>
         </div>
         <a class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
         </a>
      </div>
   </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.querySelector('#testimonial4');
        var prevControl = carousel.querySelector('.carousel-control-prev');
        var nextControl = carousel.querySelector('.carousel-control-next');
        var carouselItems = carousel.querySelectorAll('.carousel-item');

        prevControl.addEventListener('click', function (event) {
            event.preventDefault();
            var current = carousel.querySelector('.carousel-item.active');
            var prev = current.previousElementSibling || carouselItems[carouselItems.length - 1];
            current.classList.remove('active');
            prev.classList.add('active');
        });

        nextControl.addEventListener('click', function (event) {
            event.preventDefault();
            var current = carousel.querySelector('.carousel-item.active');
            var next = current.nextElementSibling || carouselItems[0];
            current.classList.remove('active');
            next.classList.add('active');
        });
    });
</script>
<?php get_footer(); ?>