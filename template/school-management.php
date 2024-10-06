<?php

/**
 * Template Name: School Management Page
 */
get_header();
?>
<style>
   @media screen and (max-width:900px){
      li{
         font-size:18px!Important;
      }
   }
   @media screen and (min-width:900px){
      li{
         font-size:15px!Important;
      }
   }
</style>


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
   <div class="container pb-lg-5 pt-4">
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
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($web_title); ?></h2>
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
                        'terms' => 'School Management' // Term name
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
   <div class="container px-lg-5 text-center mx-auto">
      <?php
      $business_title = get_field('business_title');
      ?>
      <h2 class="w-lg-75 mx-auto" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($business_title); ?></h2>
   </div>
   <div class="services-area px-lg-2 pt-5" id="services">
      <div class="px-lg-5 w-lg-75 mx-auto">
         <div class="px-lg-5 mx-auto row">
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
                     'terms' => 'Software Benifits', // Term name
                  )
               )
            );
            $industries_query = new WP_Query($args);

            if ($industries_query->have_posts()) :
               while ($industries_query->have_posts()) : $industries_query->the_post();
            ?>
                  <div class="col-lg-3 col-6 px-0">
                	<div class="boxing m-auto" style="height: 200px; border: 3px solid black; border-radius: 100%; width: 200px;">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'my-4 py-2 mx-auto wp-post-image']);
                     }
                     ?>
                    </div>
                    <h4 class="mt-3" style="text-align:center"><?php the_title(); ?></h4>
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
<section class="services-area pt-50 pb-50">
   <div class="container pb-5 px-lg-1 text-center">
      <?php
      $process_title = get_field('dev_process_title');
      $process_description = get_field('dev_process_description');
      ?>
      <h2 class="py-3 app-title" style="line-height: 1.3em;color:#202020;text-align:left"><?php echo esc_html($process_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($process_description); ?></p>
   </div>
   <div class="container-fluid pb-0">
     <div class="container my-3 px-0 desktop-responsive">
      <div class="row">
         <div class="col-md-12 p-0">
            <ul class="nav nav-pills flex-row m-0 justify-content-center mx-auto mb-4" id="myTab" role="tablist" style="padding: 30px 20px;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 20px;width:60%">
               <li class="nav-item">
                  <a class="nav-link tab-box active" id="home-tab" data-toggle="tab" href="#asset" role="tab" aria-controls="home" aria-selected="true" style="display: flex;flex-direction: column;align-items: center;border: 0px;border-right: 1px solid #BABABA;height: 50px;justify-content: center;padding:25px;background-color:white!important">
          			 <img src="<?php echo esc_url(get_field('process')['image']) ?>" style="width: 50px;"/>
                     <h5 style="text-align:center"><?php echo esc_html(get_field('process')['name']) ?></h5>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link tab-box" id="profile-tab" data-toggle="tab" href="#configuration" role="tab" aria-controls="profile" aria-selected="false" style="display: flex;flex-direction: column;align-items: center;border: 0px;border-right: 1px solid #BABABA;height: 50px;justify-content: center;padding:25px;background-color:white!important">
                     <img src="<?php echo esc_url(get_field('process_1')['image']) ?>" style="width: 50px;"/>
                     <h5 style="text-align:center"><?php echo esc_html(get_field('process_1')['name']) ?></h5>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link tab-box" id="contact-tab" data-toggle="tab" href="#usability" role="tab" aria-controls="contact" aria-selected="false" style="display: flex;flex-direction: column;align-items: center;border: 0px;border-right: 1px solid #BABABA;height: 50px;justify-content: center;padding:25px;background-color:white!important">
                     <img src="<?php echo esc_url(get_field('process_2')['image']) ?>" style="width: 50px;"/>
                     <h5 style="text-align:center"><?php echo esc_html(get_field('process_2')['name']) ?></h5>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link tab-box" id="contact-tab" data-toggle="tab" href="#security" role="tab" aria-controls="contact" aria-selected="false" style="display: flex;flex-direction: column;align-items: center;border: 0px;border-right: 0px solid #BABABA;height: 50px;justify-content: center;padding:25px;background-color:white!important">
                     <img src="<?php echo esc_url(get_field('process_3')['image']) ?>" style="width: 50px;"/>
                     <h5 style="text-align:center"><?php echo esc_html(get_field('process_3')['name']) ?></h5>
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.col-md-4 -->
         <div class="col-md-12 p-2">
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="asset" role="tabpanel" aria-labelledby="home-tab">
                  <div class="container-fluid p-0">
                     <div class="card-container row" style="padding: 30px 20px;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 20px;">
                        <div class="col-6"><?php echo get_field('process')['description'] ?></div>
          				<div class="col-6"><img src="<?php echo esc_url(get_field('process')['image_1']) ?>"/></div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="configuration" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="container-fluid p-0">
                     <div class="card-container row" style="padding: 30px 20px;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 20px;">
                        <div class="col-6"><?php echo get_field('process_1')['description'] ?></div>
          				<div class="col-6"><img src="<?php echo esc_url(get_field('process_1')['image_1']) ?>"/></div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="usability" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="container-fluid p-0">
                     <div class="card-container row" style="padding: 30px 20px;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 20px;">
                        <div class="col-6"><?php echo get_field('process_2')['description'] ?></div>
          				<div class="col-6"><img src="<?php echo esc_url(get_field('process_2')['image_1']) ?>"/></div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="container-fluid p-0">
                     <div class="card-container row" style="padding: 30px 20px;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 20px;">
                        <div class="col-6"><?php echo get_field('process_3')['description'] ?></div>
          				<div class="col-6"><img src="<?php echo esc_url(get_field('process_3')['image_1']) ?>"/></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.col-md-8 -->
      </div>
   </div>
   </div>
   <section class="testimonial text-center mobile-responsive">
    <div class="container">
        <div id="testimonial-carousel" class="carousel slide testimonial-carousel_indicators testimonial-carousel_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="false" data-duration="2000">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-category mx-auto" style="width: 100%;padding: 10px 80px;display: flex;flex-direction: column;align-items: center;">
          				<img src="<?php echo esc_url(get_field('process')['image']) ?>" style="width: 25%"/>
                     	<h3 class="mt-4" style="text-align:center;width: max-content;background-color:#145CAA66;padding: 10px 30px;border-radius: 50px;"><?php echo esc_html(get_field('process')['name']) ?></h3>
                    </div>
                    <div class="container-fluid p-0 mt-4" style="border: 2px solid rgba(0, 0, 0, 0.4);border-radius: 20px">
                        <div class="container row pb-4 px-0" style="flex-direction: column-reverse;">
                            <div class="col-md-12 px-3">
                                <div style="text-align:justify;font-size:33px"><?php echo get_field('process')['description']; ?></div>
                            </div>
                            <div class="col-md-12 p-0 pb-4">
                                <img src="<?php echo esc_url(get_field('process')['image_1']); ?>" style="width:100%"/>
                            </div>
                        </div>
                    </div>
                </div>
               	<div class="carousel-item">
                    <div class="carousel-category mx-auto" style="width: 100%;padding: 10px 80px;display: flex;flex-direction: column;align-items: center;">
          				<img src="<?php echo esc_url(get_field('process_1')['image']) ?>" style="width: 25%;"/>
                     	<h2 class="mt-4" style="text-align:center;width: max-content;background-color:#145CAA66;padding: 10px 80px;border-radius: 50px;"><?php echo esc_html(get_field('process_1')['name']) ?></h2>
                    </div>
                    <div class="container-fluid p-0 mt-4" style="border: 2px solid rgba(0, 0, 0, 0.4);border-radius: 20px">
                        <div class="container row pb-4 px-0" style="flex-direction: column-reverse;">
                            <div class="col-md-12 px-3">
                                <div style="text-align:justify;font-size:33px"><?php echo get_field('process_1')['description']; ?></div>
                            </div>
                            <div class="col-md-12 p-0 pb-4">
                                <img src="<?php echo esc_url(get_field('process_1')['image_1']); ?>" style="width:100%"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-category mx-auto" style="width: 100%;padding: 10px 80px;display: flex;flex-direction: column;align-items: center;">
          				<img src="<?php echo esc_url(get_field('process_2')['image']) ?>" style="width: 25%;"/>
                     	<h2 class="mt-4" style="text-align:center;width: max-content;background-color:#145CAA66;padding: 10px 80px;border-radius: 50px;"><?php echo esc_html(get_field('process_2')['name']) ?></h2>
                    </div>
                    <div class="container-fluid p-0 mt-4" style="border: 2px solid rgba(0, 0, 0, 0.4);border-radius: 20px">
                        <div class="container row pb-4 px-0" style="flex-direction: column-reverse;">
                            <div class="col-md-12 px-3">
                                <div style="text-align:justify;font-size:33px"><?php echo get_field('process_2')['description']; ?></div>
                            </div>
                            <div class="col-md-12 p-0 pb-4">
                                <img src="<?php echo esc_url(get_field('process_2')['image_1']); ?>" style="width:100%"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-category mx-auto" style="width: 100%;padding: 10px 80px;display: flex;flex-direction: column;align-items: center;">
          				<img src="<?php echo esc_url(get_field('process_3')['image']) ?>" style="width: 25%;"/>
                     	<h2 class="mt-4" style="text-align:center;width: max-content;background-color:#145CAA66;padding: 10px 80px;border-radius: 50px;"><?php echo esc_html(get_field('process_3')['name']) ?></h2>
                    </div>
                    <div class="container-fluid px-0 mt-4" style="border: 2px solid rgba(0, 0, 0, 0.4);border-radius: 20px">
                        <div class="container row pb-4 px-0" style="flex-direction: column-reverse;">
                            <div class="col-md-12 px-3">
                                <div style="text-align:justify;font-size:33px"><?php echo get_field('process_3')['description']; ?></div>
                            </div>
                            <div class="col-md-12 p-0 pb-4">
                                <img src="<?php echo esc_url(get_field('process_3')['image_1']); ?>" style="width:100%"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" style="top:165px; left:149%; position:absolute; background-color:rgba(20, 92, 170, 0.4);width:40px; height:40px"></span>
            </a>
            <a class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="top:165px;right:115%; position:absolute; background-color:rgba(20, 92, 170, 0.4);width:40px; height:40px"></span>
            </a>
        </div>
    </div>
</section>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-3 px-3">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020"><?php echo esc_html($choose_us_title); ?></h2>
      <p class="app-description" style="color:#202020; font-size:18px"><?php echo esc_html($choose_us_description); ?></p>
   </div>
   <div class="container-fluid pb-0 px-lg-5 px-0">
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
                  'terms' => 'School Choose Us', // Term name
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
<section class="services-area pt-50 pb-50">
   <div class="container">
      <div class="row" style="align-items:center">
         <div class="col-xl-6 px-lg-5 px-0">
            <div class="container px-0 py-4 py-lg-0">
               <div class="row py-sm-5">
                  <div class="col-6 d-flex align-items-center justify-content-center px-lg-3 px-2">
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
                  <div class="col-6 d-flex align-items-center justify-content-center px-lg-3 px-1">
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
         <div class="col-xl-6 pl-lg-5 px-2">
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
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-lg-5 text-center mx-auto">
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
                     'terms' => 'School Management', // Term name
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
<section class="testimonial text-center pt-50 pb-50">
   <div class="container p-0">
      <div class="container pb-3 px-lg-5 text-center mx-auto">
         <h2 class="py-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;text-align:center">Frequently Asked Questions</h2>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="row flex-wrap">
               <?php
               // Query to retrieve FAQ posts
               $args = array(
                  'post_type' => 'faq',
                  'posts_per_page' => -1,
                  'order' => 'ASC',
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'faq-category', // Taxonomy name
                        'field' => 'name',
                        'terms' => 'School Management', // Term name
                     )
                  )
               );
               $faq_posts = new WP_Query($args);

               // Check if there are FAQ posts
               if ($faq_posts->have_posts()) :
                  $count = 0;
                  while ($faq_posts->have_posts()) : $faq_posts->the_post();
                     $count++;
                     if ($count % 2 != 0) { // Odd numbered FAQs
               ?>
                        <div class="col-12">
                           <div class="card accordian-card mb-4">
                              <div class="card-header" id="faqHeading<?php the_ID(); ?>">
                                 <button class="mb-0 row d-flex align-items-center flex-wrap p-0">
                                    <div class="col-1 px-0 px-lg-3">
                                       <div class="icon-circle">
                                          <i class="far fa-user"></i> <!-- User icon -->
                                       </div>
                                    </div>
                                    <div class="col-10">
                                       <p class="faq-item" type="button" data-toggle="collapse" data-target="#faqCollapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="faqCollapse<?php the_ID(); ?>">
                                          <?php the_title(); ?>
                                       </p>
                                    </div>
                                    <div class="col-1 text-right p-0" data-toggle="collapse" data-target="#faqCollapse<?php the_ID(); ?>">
                                       <i class="fa fa-chevron-down"></i> <!-- Arrow icon -->
                                    </div>
                                 </button>
                              </div>
                              <div id="faqCollapse<?php the_ID(); ?>" class="collapse" aria-labelledby="faqHeading<?php the_ID(); ?>" data-parent="#accordion">
                                 <div class="card-body faq-body">
                                    <?php the_content(); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                  <?php
                     }
                  endwhile;
                  wp_reset_postdata(); // Reset the query
               else :
                  ?>
                  <p>No FAQs found.</p>
               <?php endif; ?>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row flex-wrap">
               <?php
               // Query to retrieve FAQ posts
               $faq_posts = new WP_Query($args); // Resetting the WP_Query to reuse

               // Check if there are FAQ posts
               if ($faq_posts->have_posts()) :
                  $count = 0;
                  while ($faq_posts->have_posts()) : $faq_posts->the_post();
                     $count++;
                     if ($count % 2 == 0) { // Even numbered FAQs
               ?>
                        <div class="col-12">
                           <div class="card accordian-card mb-4">
                              <div class="card-header" id="faqHeading<?php the_ID(); ?>">
                                 <button class="mb-0 row d-flex align-items-center flex-wrap p-0">
                                    <div class="col-1 px-0 px-lg-3">
                                       <div class="icon-circle">
                                          <i class="far fa-user"></i> <!-- User icon -->
                                       </div>
                                    </div>
                                    <div class="col-10">
                                       <p class="faq-item" type="button" data-toggle="collapse" data-target="#faqCollapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="faqCollapse<?php the_ID(); ?>">
                                          <?php the_title(); ?>
                                       </p>
                                    </div>
                                    <div class="col-1 text-right p-0" data-toggle="collapse" data-target="#faqCollapse<?php the_ID(); ?>">
                                       <i class="fa fa-chevron-down"></i> <!-- Arrow icon -->
                                    </div>
                                 </button>
                              </div>
                              <div id="faqCollapse<?php the_ID(); ?>" class="collapse" aria-labelledby="faqHeading<?php the_ID(); ?>" data-parent="#accordion">
                                 <div class="card-body faq-body">
                                    <?php the_content(); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                  <?php
                     }
                  endwhile;
                  wp_reset_postdata(); // Reset the query
               else :
                  ?>
                  <p>No FAQs found.</p>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.querySelector('#testimonial-carousel');
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