<?php

/** 
 * Template Name: About Page
 */
get_header() ?>
<div style="background-color:#e7f7ff">
   <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
   <section class="breadcumb-area" style="background-image:url('<?php echo esc_url($image[0]); ?>')">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                  <h2 style="color:white"><?php echo esc_html(get_the_title()); ?></h2>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- About Area Start -->
   <section class="about-area py-3" id="about">
      <?php
      $about_title = get_field('about_title');
      $about_description = get_field('about_description');
      ?>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="about">
                  <div class="page-title">
                     <h2><?php echo esc_html($about_title); ?></h2>
                  </div>
                  <p><?php echo esc_html($about_description); ?></p>
               </div>
            </div>
         </div>
      </div>
      <div class="container py-5">
         <img src="<?php echo esc_url(get_field('image')); ?>" />
      </div>
      <div class="how-section1">
         <div class="row">
            <div class="col-md-6 how-img">
               <img src="<?php echo esc_url(get_field('image_box')['image']); ?>" class="rounded-circle img-fluid" alt="" />
            </div>
            <div class="col-md-6 about">
               <h4><?php echo esc_html(get_field('image_box')['title']); ?></h4>
               <p class="text-muted"><?php echo esc_html(get_field('image_box')['description']); ?>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 about">
               <h4><?php echo esc_html(get_field('image_box_1')['title']); ?></h4>
               <p class="text-muted"><?php echo esc_html(get_field('image_box_1')['description']); ?>
            </div>
            <div class="col-md-6 how-img">
               <img src="<?php echo esc_url(get_field('image_box_1')['image']); ?>" class="rounded-circle img-fluid" alt="" />
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 how-img">
               <img src="<?php echo esc_url(get_field('image_box_2')['image']); ?>" class="rounded-circle img-fluid" alt="" />
            </div>
            <div class="col-md-6 about">
               <h4><?php echo esc_html(get_field('image_box_2')['title']); ?></h4>
               <p class="text-muted"><?php echo esc_html(get_field('image_box_2')['description']); ?>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 about">
               <h4><?php echo esc_html(get_field('image_box_3')['title']); ?></h4>
               <p class="text-muted"><?php echo esc_html(get_field('image_box_3')['description']); ?>
            </div>
            <div class="col-md-6 how-img">
               <img src="<?php echo esc_url(get_field('image_box_3')['image']); ?>" class="rounded-circle img-fluid" alt="" />
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 how-img">
               <img src="<?php echo esc_url(get_field('image_box_4')['image']); ?>" class="rounded-circle img-fluid" alt="" />
            </div>
            <div class="col-md-6 about">
               <h4><?php echo esc_html(get_field('image_box_4')['title']); ?></h4>
               <p class="text-muted"><?php echo esc_html(get_field('image_box_4')['description']); ?>
            </div>
         </div>
      </div>
   </section>
   <div id="projectFacts" class="sectionClass mx-lg-5">
      <div class="fullWidth eight columns">
         <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
               <img src="<?php echo esc_url(get_field('counter')['image']); ?>"></i>
               <p id="number1" class="number"><?php echo esc_html(get_field('counter')['title']); ?></p>
               <p><?php echo esc_html(get_field('counter')['name']); ?></p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
               <img src="<?php echo esc_url(get_field('counter_1')['image']); ?>"></i>
               <p id="number1" class="number"><?php echo esc_html(get_field('counter_1')['title']); ?></p>
               <p><?php echo esc_html(get_field('counter_1')['name']); ?></p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
               <img src="<?php echo esc_url(get_field('counter_2')['image']); ?>"></i>
               <p id="number1" class="number"><?php echo esc_html(get_field('counter_2')['title']); ?></p>
               <p><?php echo esc_html(get_field('counter_2')['name']); ?></p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
               <img src="<?php echo esc_url(get_field('counter_3')['image']); ?>"></i>
               <p id="number1" class="number"><?php echo esc_html(get_field('counter_3')['title']); ?></p>
               <p><?php echo esc_html(get_field('counter_3')['name']); ?></p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- About Area End -->
<?php get_footer(); ?>