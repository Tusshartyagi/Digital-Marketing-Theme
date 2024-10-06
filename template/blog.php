<?php

/**
 * Template Name: Blog Page
 */
get_header();
?>
<style>
    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pagination ul li {
        display: inline-block;
        margin-right: 5px;
    }

    .pagination ul li.active span {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination ul li a:hover {
        background-color: #ddd;
    }
    @media (min-width: 992px) {
    h4{
		font-size: 26px!Important;
	}
    .rounded-circle{
    	height:370px!Important;
	}
   .breadcumb p{
   		font-size:22px!Important;
   }
   .owl-dots{
   		display:none!Important;
	}
    .breadcumb h1{
    	font-size:50px!Important;
    }
    .store-card{
	height:270px!important;
}
    .testimonial4_slide h4{
    	font-size:22px!important;
    }
    .search-form .search-submit[type="submit"] {
        top: 0;
        right: 0px;
        bottom: 0;
        position: absolute;
        color: white;
        z-index: 2;
        width: 32%;
        border: 0;
        border-radius: 0;
        box-shadow: none;
        overflow: hidden;
        font-size: 15px;
        height: 45px;
        margin: 3px;
        background: rgba(20, 92, 170, 1);
        padding: 9px 25px !important;
        font-weight: 600;
	}
      .blog-card img {
        border-radius: 10px;
        padding-bottom: 10px;
        width:100%;
        height:200px!Important;
    }
    .card-space{
		display:flex;
        justify-content: center;
	}
    .pagination ul li a,
    .pagination ul li span {
        padding: 6px 12px;
        background-color: white;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
        border-radius: 3px;
        height: 100%;
        display: inline-flex;
    }
} 
@media (max-width: 990px) {
    .pagination ul li a,
    .pagination ul li span {
        padding: 1px 8px;
        background-color: white;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
        border-radius: 3px;
        display: inline-flex;
    }
    .breadcumb p{
   		font-size:22px!Important;
   }
    h4{
		font-size: 40px!important;
	}
    .featured-blog button a{
		font-size:20px!important;
	}
    .search-form input[type="search"], .search-form input.search-field{
		height:60px;
	}
	.search-form .search-submit[type="submit"] {
        right: 0px;
        position: absolute;
        color: white;
        z-index: 2;
        width: 33%;
        border: 0;
        border-radius: 0;
        box-shadow: none;
        overflow: hidden;
        font-size: 18px;
        height: 54px;
        margin: 3px;
        background: rgba(20, 92, 170, 1);
        padding: 9px 25px !important;
        font-weight: 600;
    }
    .blog-card img {
        border-radius: 10px;
        padding-bottom: 10px;
        width:100%;
        height:200px!important;
    }
    .categories .category{
		font-size:14px!Important;
	}
	.blog .row{
		flex-direction:column!important;
	}
    .load-more,
    .view-less{
		margin-top:-20px!Important;
		font-size:30px;
	}
}    
    .blog-card {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 15px;
    	width:96%;
    }

    .categories {
        margin-bottom: 10px;
    }

    .categories .category {
        display: inline-block;
        margin-right: 5px;
        color: rgba(75, 107, 251, 1);
        background: rgba(75, 107, 251, 0.05);
        padding: 4px 10px;
        border-radius: 5px;
        font-size:14px;
        font-weight:600;
    }

    .author-info {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .author-info p {
        margin: 0 10px 0 0;
    }
	.author-info img {
        border-radius: 50px;
        padding: 10px;
        width:12%;
        height:44px!Important;
    }

    .load-more,
    .view-less {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: white;
        border: 1px solid rgba(105, 106, 117, 1);
        color: rgba(105, 106, 117, 1);
        border-radius: 5px;
        cursor: pointer;
    }

    .load-more:hover,
    .view-less:hover {
        background-color: white;
        border: 1px solid rgba(105, 106, 117, 1);
        color: rgba(105, 106, 117, 1);
    }

    .view-less {
        display: none;
    }
	.search-form label{
		width:100%;
	}
.search-form .kadence-search-icon-wrap {
    position: absolute;
    right: 24%;
    top: -3px;
    height: 100%;
    width: 30px;
    padding: 0;
    text-align: center;
    background: 0 0;
    z-index: 3;
    cursor: pointer;
    pointer-events: none;
    color: white;
    text-shadow: none;
    display: flex;
    align-items: center;
    justify-content: center;
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
<section class="blog-section pt-50 pb-50">
    <div class="container">
        <div class="search-bar mobile-responsive">
             <?php get_search_form(); ?>
        </div>
        <div class="row">
            <div class=" blog col-lg-9 col-md-12 py-lg-0 py-md-5">
                <h2 class="pb-2">All Blog Articles</h2>
                <hr style="height:4px;background-color:black">
                <div class="row pt-4">
    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 8,
        'paged'          => $paged,
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="col-lg-6 card-space col-md-12 p-0 py-md-3">
                <!-- Display your blog post cards here -->
                <!-- Sample card structure -->
                <div class="blog-card">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Image">
                    <div class="categories my-2">
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) {
                            echo '<span class="category my-2">' . $category->name . '</span>';
                        }
                        ?>
                    </div>
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <div class="author-info">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                        <p><?php the_author(); ?></p>
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                </div>
            </div>
            <?php
        endwhile;

        // Custom Pagination
        custom_pagination($query->max_num_pages);

        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;

    // Custom Pagination Function
    function custom_pagination($pages = '', $range = 2)
    {
        $showitems = ($range * 2) + 1;
        global $paged;
        if (empty($paged)) $paged = 1;
        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }
        if (1 != $pages) {
            echo "<div class=\"pagination\"><ul>";
            if ($paged > 1) echo "<li><a href='" . get_pagenum_link($paged - 1) . "'>&laquo; Previous</a></li>";
            for ($i = 1; $i <= $pages; $i++) {
                if ($paged == $i) {
                    echo "<li class='active'><span>" . $i . "</span></li>";
                } else {
                    echo "<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
                }
            }
            if ($paged < $pages) echo "<li><a href=\"" . get_pagenum_link($paged + 1) . "\">Next &raquo;</a></li>";
            echo "</ul></div>\n";
        }
    }
    ?>
</div>
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- Search Bar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>