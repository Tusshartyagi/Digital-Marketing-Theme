<?php

/**
 * Template Name: Industry Page
 */
get_header();
?>
<style>
@media (min-width: 992px) {
    p {
        font-size: 18px!Important;
    }
    li{
        font-size: 20px!Important;
        font-weight:400;
        font-family:"Outfit", sans-serif;
    }
    .container-fluid{
    	padding-left:2px!important;
    }
    .rounded-circle{
    	height:370px!Important;
	}
   .breadcumb p{
   		font-size:22px!Important;
   }
    .breadcumb h1{
    	font-size:50px!Important;
    }
} 
@media (max-width: 990px) {
    .reverse{
		flex-direction: column-reverse;
	}
    .container-fluid{
    	padding-left:4px!important;
    }
}    
</style>
<!-- Slider Area Start -->
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<section class="breadcumb-area desktop-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0 mx-auto" style="color:#fff;text-align:center!Important;">
               <h1 class="py-2" style="text-align:center;color:white!important"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="py-3 px-lg-3 mx-auto text-center w-lg-50" style="color:white!important"><?php echo esc_html(get_field('description')); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="breadcumb-area mobile-responsive" style="background-image: url('<?php echo esc_url($image[0]); ?>');margin-top:0px;padding:100px 0px">
   <div class="container pt-md-5">
      <div class="row pt-md-5" style="align-items:left;">
         <div class="col-xl-12 px-0">
            <div class="breadcumb px-0" style="color:#fff;text-align:center!Important;">
               <h1 class="pb-2" style="text-align:center;color:white!important"><?php echo esc_html(get_field('title')); ?></h1>
               <p class="py-2 mx-auto text-center" style="text-align:center;color:white!important"><?php echo esc_html(get_field('description')); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services-area pt-50 pb-50">
   <div class="container py-3">
      <?php
      $about_title = get_field('about_title');
      ?>
      <h2 class="pb-3 app-title" style="line-height: 1.3em;color:#202020;font-size:36px"><?php echo esc_html($about_title); ?></h2>
   </div>
   <div class="container">
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box')['title']); ?> </h2>
               <p><?php the_field('list');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_1')['title']); ?> </h2>
               <p><?php the_field('list_1');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_1')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_1')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_1')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_2')['title']); ?> </h2>
               <p><?php the_field('list_2');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_2')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_2')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_2')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_3')['title']); ?> </h2>
               <p><?php the_field('list_3');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
               <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_3')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_3')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_3')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_4')['title']); ?> </h2>
               <p><?php the_field('list_4');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_4')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_4')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_4')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_5')['title']); ?> </h2>
               <p><?php the_field('list_5');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_5')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_5')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_5')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_6')['title']); ?> </h2>
               <p><?php the_field('list_6');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_6')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_6')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_6')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_7')['title']); ?> </h2>
               <p><?php the_field('list_7');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_7')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_7')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_7')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_8')['title']); ?> </h2>
               <p><?php the_field('list_8');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_8')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_8')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_8')['description']); ?></p>
            </div>
         </div>
          <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_9')['title']); ?> </h2>
               <p><?php the_field('list_9');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_9')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_9')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_9')['description']); ?></p>
            </div>
         </div>
        <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_10')['title']); ?> </h2>
               <p><?php the_field('list_10');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_10')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_10')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_10')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_11')['title']); ?> </h2>
               <p><?php the_field('list_11');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_11')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_11')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_11')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_12')['title']); ?> </h2>
               <p><?php the_field('list_12');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_12')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_12')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_12')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_13')['title']); ?> </h2>
               <p><?php the_field('list_13');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_13')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_13')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_13')['description']); ?></p>
            </div>
         </div>
         <div class="row my-lg-4" style="padding: 25px 0px;">
           <div class="col-lg-5 col-md-12 about">
               <h2 class="py-2"> <?php echo esc_html(get_field('image_box_14')['title']); ?> </h2>
               <p><?php the_field('list_14');?></p>
            </div>
            <div class="col-lg-7 col-md-12">
                 <div class="slider owl-carousel">
                   <div class="container-fluid" style="padding-left:2px">
                    <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_14')['image']); ?>" class="rounded-circle" alt="" />
                    </div></div>
					<div class="container-fluid">
                   <div class="slide" style="width:100%">
                         <img src="<?php echo esc_url(get_field('image_box_14')['image_1']); ?>" class="rounded-circle" alt="" />
                    </div></div>
                </div>
          	   <p class="py-2" style="text-align:justify;font-weight:400;"><?php echo esc_html(get_field('image_box_14')['description']); ?></p>
            </div>
         </div>
    </div>
</section>
<hr>
<section class="services-area pt-50 pb-50">
   <div class="container pb-3 px-lg-1 px-3">
      <?php
      $choose_us_title = get_field('choose_us_title');
      $choose_us_description = get_field('choose_us_description');
      ?>
      <h2 class="pb-3 w-lg-75 mx-auto" style="line-height: 1.3em;color:#202020;font-size:32px;text-align:center"><?php echo esc_html($choose_us_title); ?></h2>
      <p class="w-lg-50 mx-auto" style="color:#202020; font-size:18px;text-align:center"><?php echo esc_html($choose_us_description); ?></p>
   </div>
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
<hr>
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-lg-5 px-2 text-center mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         ?>
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($testimonial_title); ?></h2>
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
                     'terms' => 'Home', // Term name
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
                              <h4 style="font-size:12px!important"><?php the_field('position'); ?></h4>
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