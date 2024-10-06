<style>
.sidebar-menu {
    padding: 0!important;
    margin:0px!important;
}
.widget-area{
	border:1px solid rgba(0, 0, 0, 0.125);
    border-radius:20px;
    padding:20px;
}
.sidebar-menu li {
    margin-bottom: 10px;
}

#block-21 ul li a{
    font-weight:500;
	font-size:17px!Important;
}

.sidebar-menu .parent-category {
    font-weight: bold;
}
#block-21 ul li::before{
	content: " > ";
    margin-right: 5px;
    color:black;
    font-weight:600;
}
.widget_categories .children .cat-item::before {
    color: blue; /* Change to your desired active category color */
    content: none!important;
}
.widget_categories .children .cat-item{
	list-style: circle!Important;
    margin:0px;
}
.widget_categories .children .cat-item a{
	font-size:15px!Important;
}
.widget_categories .children{
    padding-left: 45px;
    padding-top: 10px;
}
</style>
<div class="search-bar desktop-responsive">
                    <?php get_search_form(); ?>
                </div>
                <!-- Featured Blog Post -->
				<div class="featured-blog py-3">
                    <div class="card p-lg-3 p-3" style="border-radius:15px">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if ($logo) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="Logo" class="logo w-lg-50 w-md-75 pb-2">';
                        }
                        ?>
                        <h4 class="py-2" style="font-size:70px">Drive Efficiency with Our Smart IT Strategies</h4>
                        <button class="my-lg-2 py-lg-2 w-50 my-md-4 py-md-3" style="border-radius:10px"><a href="https://test.korvage.com/contact-us/" style="color:white;font-size:15px;font-weight:600">Contact Us</a></button>
                    </div>
                </div>
                <!-- Widget Area -->
                <aside class="widget-area my-3 desktop-responsive">
                    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
                        <ul class="sidebar-menu">
                            <?php dynamic_sidebar( 'sidebar1' ); ?>
                        </ul>
                    <?php endif; ?>
                </aside>