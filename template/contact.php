<?php

/** 
 * Template Name: Contact Page
 */
get_header() ?>
<style>
@media (min-width: 992px) {
    h4{
		font-size:25px!important;
	}
    p{
		font-size:20px!important;
      font-weight: 400!important;
	}
	.details{
		font-size:18px!Important;
	}
} 
.store-card{
	display: flex;
    justify-content: center;
    align-items: center;
}
span.uacf7-value::before{
   content:'$';
}
span.uacf7-value{
   float:left!important;
}
@media (max-width: 990px) {
    h4{
		font-size: 40px!important;
	}
    .details{
		font-size:30px!Important;
	}
	.contact-cards{
		flex-direction: column;
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
               <p class="py-3 px-lg-3 mx-auto text-center" style="color:white!important"><?php echo esc_html(get_field('description')); ?></p>
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
   <div class="container-fluid px-lg-5">
      <div class="row" style="align-items:center">
         <div class="col-lg-7 col-md-12 py-lg-0 py-4">
              <image src = "<?php echo esc_url(get_field('image')); ?>"/>
         </div>
         <div class="col-lg-5 col-md-12">
            <div class="form container-fluid" style="padding: 15px 8px;">
               <?php
               echo do_shortcode(
                  '[contact-form-7 id="c0471cd" title="Contact form 1_copy"]'
               );
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="testimonial pt-50 pb-50">
   <div class="container-fluid">
      <div class="px-lg-5 text-center contact-heading mx-auto">
         <?php
         $testimonial_title = get_field('testimonial_title');
         $testimonial_descriptions = get_field('testimonial_description');
         ?>
         <h2 class="pb-3 w-lg-75 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;"><?php echo esc_html($testimonial_title); ?></h2>
         <p class="w-lg-50 mx-auto px-lg-5" style="line-height: 1.3em;color:#202020;font-size:18px;text-align:center"><?php echo esc_html($testimonial_descriptions); ?></p>
      </div>
  </div>
  <div class="container-fluid px-lg-5 py-4">
   <div class="row contact-cards">
     <div class="col-md-4 p-lg-4 px-0 py-2">
        <div class="store-card py-lg-4 py-md-5 px-md-3" style="background-image:url('<?php echo esc_url(get_field('contact_box')['image']); ?>')" style="width: 25%; max-width: 25%; overflow: hidden;">
             <div class="overlay"></div>
                  <div class="border-0 text-left mb-2">
                     <div class="card-body choose-card" style="min-height:0px">
                        <div class="content" style="color: white; position: relative; z-index: 1;font-size:20px">
                           <h4 class="text-center" style="color:white"><?php echo esc_html(get_field('contact_box')['title']); ?></h4>
                           <p class="details"><?php echo esc_html(get_field('contact_box')['detail']); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
			</div>
		<div class="col-md-4 p-lg-4 px-0 py-2">
        <div class="store-card py-lg-4 py-md-5 px-md-3" style="background-image:url('<?php echo esc_url(get_field('contact_box_1')['image']); ?>')" style="width: 25%; max-width: 25%; overflow: hidden;">
             <div class="overlay"></div>
                  <div class="border-0 text-left mb-2">
                     <div class="card-body choose-card" style="min-height:0px">
                        <div class="content" style="color: white; position: relative; z-index: 1;font-size:20px">
                           <h4 class="text-center" style="color:white"><?php echo esc_html(get_field('contact_box_1')['title']); ?></h4>
                           <p class="details"><?php echo esc_html(get_field('contact_box_1')['detail']); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
			</div>
		<div class="col-md-4 p-lg-4 px-0 py-2">
        <div class="store-card py-lg-4 py-md-5 px-md-3" style="background-image:url('<?php echo esc_url(get_field('contact_box_2')['image']); ?>')" style="width: 25%; max-width: 25%; overflow: hidden;">
             <div class="overlay"></div>
                  <div class="border-0 text-left mb-2">
                     <div class="card-body choose-card" style="min-height:0px">
                        <div class="content" style="color: white; position: relative; z-index: 1;font-size:20px">
                           <h4 class="text-center" style="color:white"><?php echo esc_html(get_field('contact_box_2')['title']); ?></h4>
                           <p><?php echo esc_html(get_field('contact_box_2')['detail']); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
			</div>
      </div>
   </div>
</section>
<script>
// jQuery script to modify CF7 file upload field
jQuery(document).ready(function($) {
    // Replace CF7 file upload field with custom structure
    $('.wpcf7-form-control-wrap input[type="file"]').each(function() {
        var fileInput = $(this);
        var wrapper = $('<div class="file-upload-wrapper"></div>');
        var icon = $('<span class="icon"><i class="fa fa-file"></i></span>');
        var buttonText = $('<span class="button-text">Choose file</span>');
        var downIcon = $('<span class="icon"><i class="fa fa-arrow-down"></i></span>');
        
        wrapper.append(icon);
        wrapper.append(buttonText);
        wrapper.append(downIcon);
        fileInput.after(wrapper);
        fileInput.appendTo(wrapper);
    });
});
</script>
<?php get_footer(); ?>