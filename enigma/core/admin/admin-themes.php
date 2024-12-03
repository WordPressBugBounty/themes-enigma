<?php if (!function_exists('enigma_info_page')) {
	function enigma_info_page() {
	$page1=add_theme_page(__('Welcome to Enigma', 'enigma'), __('About Enigma  <i class="fa fa-star theme-icon"></i>', 'enigma'), 'edit_theme_options', 'enigma', 'enigma_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'enigma_admin_info');
	}	
}
add_action('admin_menu', 'enigma_info_page');

function enigma_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/core/admin/bootstrap.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style( 'fontawesome6.7.1', get_template_directory_uri(). '/css/fontawesome6.7.1/css/all.css');
	wp_enqueue_style('snow-css',  get_template_directory_uri() .'/core/admin/snow.css');
	
	//JS
	//wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/core/admin/bootstrap.js');
} 
if (!function_exists('enigma_display_theme_info_page')) {
	function enigma_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
	<div class="wrap elw-page-welcome about-wrap seting-page">
	<style>
	
.p-header-bg {
   margin: 25px !important;
}
	</style>

<div class="p-header-bg">
<div class="snow"></div>
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/christmas-offer.jpg" class="img-responsive" style="width:100%;height:auto;" alt=""/>
</div>

    <div class="col-md-12 settings">
         <div class="col-md-9">
            <div class="col-md-12" style="padding:0">
				<?php $wl_th_info = wp_get_theme(); ?>
				<h2><span class="elw_shortcode_heading">Welcome to Enigma - Version <?php echo esc_html( $wl_th_info->get('Version') ); ?> </span></h2>
				<p style="font-size:19px;color: #555d66;">Enigma is an outstanding superfine creation from Infigo Software, Enigma has become one of the most popular superfine multipurpose responsive theme with WPMLlovers by many professionals for its amazing capabilities and great designs. Enigma is multi function free WordPress theme with responsive and flexible light-weighted WooCommerce theme built by using core WordPress functions (BOOTSTRAP CSS framework) that works on All leading web browsers weather its mobile device or any other this makes it fast, simple and easy to customize! It has a promising design and powerful features with page layouts and sidebar widget that let your websites easy to design. This theme can be used for different kinds of websites including business, blogging, portfolio, agency, landing page etc. Enigma has Filkr as a custom widget to showing up your Flickr Photos .Enigma provide you a platform for business template, awesome BOOTSTRAP Carousel slider for full CMS control option to match your logo & website, wide layout and many more. </p>
            </div>
			
		</div>
       
        <div class=" col-md-3">
			<div class="update_pro">
				<h3> Upgrade Pro </h3>
				<a class="demo" href="#one">Get Pro In $12</a>
			</div>
		</div>
	</div>

            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
				    <li class="active"><a data-toggle="tab" href="#start"> Getting Started </a></li>
                    <li><a data-toggle="tab" href="#themesd"> Enigma Premium </a></li>
					<li><a data-toggle="tab" href="#freepro">Free Vs Pro</a></li>
                </ul>

                <div class="tab-content">
				
				
				<div id="start" class="tab-pane fade in active">
                        <div class="space  theme active">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-7 col-md-7 p_plugin_pic">
                                    <h4>Step 1: Create a Homepage</h4>
									<ol>
									<li> Create a new page -> home and publish. </li>
									<li> Go to Appearance -> Customize > Homepage Settings -> select A static page option. </li>
									<li> In "Homepage", select the page that you created as a home page. </li>
									<li> Now Go to Customize -> Theme Options -> Theme General Options. </li>
									<li> select Show Front Page option </li>
									<li> Save changes </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('/post-new.php?post_type=page')); ?>">Add New Page</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                         <div class="img-thumbnail">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" class="img-responsive" alt="img"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
                                    <h4>Step 2: Customizer Options Panel </h4>
									<ol>
									<li> Go to Appearance -> Customize > Theme Options </li>
									<li> Theme General Options - Theme General Options use for logo width and height, and add custom css. </li>
									<li> Theme Slider Options - It is use to add slider image, title, description and enable/disable slider on homepage. </li>
									<li> Service Options - It is use to add service icon, title, description and enable/disable service on homepage. </li>
									<li> Portfolio Options - It is use to add portfolio image, title, link and enable/disable portfolio on homepage. </li>
									<li> Home Blog Options - Use to add blog title, description, blog excerpt length and enable/disable blog section on homepage and select category. </li>
									<li> Typography Settings - use to change the font of the site.  </li>
									<li> Social Options - enable/disable social option on header and footer, add social links, phone number, address and Email-ID. </li>
									<li> Footer Call-Out Options - use to add Footer callout Title, Footer callout Button Text, Footer callout Button Link and Footer callout Icon </li>
									<li> Footer Options - Use to add Customization text, developed by text and developed by link. </li>
									<li> Home Page Layout Option - use for front page section order and box layout option. </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('customize.php')); ?>">Go to Customizer</a>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a id="one" href="https://www.infigosoftware.in/enigma/" target="_blank">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
				
				<!-- end 1st tab -->
				
				
                    <div id="themesd" class="tab-pane fade">
                        <div class="space theme">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/enigma.jpg" class="img-responsive" alt="img"/>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <div>
                                            <p><strong>Description: </strong>Enigma Premium is a super professional Multi-Purpose theme and perfect for any small to medium sized creative agency, ad agency, photo studio, small business, or freelancer that is looking for a bold, yet professional modern look. To help you get started with your website we’ve made sure to include 4 homepage layouts, 10 unique heros, and some 50+ content blocks that you can use to tailor modafinil to your needs and preferences.</p>
                                        </div>
										<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant.</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price1">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>12</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="#two">Detail</a>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gurdian.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="#">Guardian Premium WordPress Theme</a></h4>
										</div>
                                    </div>
									
                                </div>
								
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/digicrew4.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="#">Digicrew Premium WordPress Theme</a></h4>
										</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/corporal2.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="#">Corporal Premium WordPress Theme</a></h4>
										</div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a id="two" href="https://www.infigosoftware.in/enigma/" target="_blank">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
					
					<div id="freepro" class="tab-pane fade">
							<div class=" p_head theme">
                                
                            </div>
						<div class="row p_plugin blog_gallery">		
						<div class="columns">
						  <ul class="price">
							<li class="header" style="background:#31A3DD">Enigma</li>
							<li class="grey">Features</li>
							<li>Theme Option Panel</li>
							<li>Front Page</li>
							<li>Unlimited Color Skins</li>
							<li>Multiple Background Patterns</li>
							<li>Multiple Theme Templates</li>
							<li>3 Portfolio Layout</li>
							<li>3 Page Layout</li>
							<li>Multilingual</li>
							<li>Blog Page(Variations)</li>
							<li>Service Page Template</li>
						  </ul>
						</div>
						
						 <div class="columns">
						  <ul class="price">
							<li class="header">Free</li>
							<li class="grey">$ 00</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
						  </ul>
						</div>

						<div class="columns">
						  <ul class="price">
							<li class="header" style="background-color:#31A3DD">Enigma Pro</li>
							<li class="grey">$ 12</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li class="grey"><a href="https://www.infigosoftware.in/enigma/" target="_blank" class="pro_btn">Visit Demo</a></li>
						  </ul>
						</div>
						</div>
					</div>
                </div>
            </div>            
<?php
	}
}
?>