<!-- Footer Widget Secton -->
<style>
.w_footer {
    padding: 50px 0px 50px;
     background: #ecf0f1;
}

.widget-heading {
    padding: 30px 15px;
}
.widget-heading h1 {
    border-bottom: 2px solid #31A3DD;
    display: inline-block;
    font-size: 24px;
    padding: 5px 5px 5px 0;
    color: #fff;
}

#calendar_wrap {
    padding: 10px;
}
table.table, table {
    width: 100%;
    text-align: left;
    background-color: transparent;
}
#wp-calendar caption {
    padding: 10px;
    color: #fff;
    text-align: center;
    font-size: 16px;
    font-weight: 700;
    background-color: #005994;
}
.footer-widget #wp-calendar thead tr th, .footer-widget table td {
    color: #fff;
}
#wp-calendar thead tr th, #wp-calendar tbody tr td  {
    text-align: center;
}
table th, table td {
    border: 1px solid #dddddd;
    padding: 6px;
    line-height: 20px;
    text-align: center;
    vertical-align: top;
}
.footer-widget ul {
    list-style: none;
    padding-left: 20px;
	margin:0;
}
.footer-widget ul li {
    display: block;
}
.footer-widget ul li a {
    color: #fff;
    font-size: 16px;
}
</style>

<?php 
$enigma_footer_section_areas = get_theme_mod('enigma_footer_section_areas','1'); 
if ($enigma_footer_section_areas == '1') { ?>

    <div class="enigma_footer_widget_area">
        <div class="container">
            <div class="row">
                  <?php if ( is_active_sidebar( 'footer-widget-area' ) )
		{ dynamic_sidebar( 'footer-widget-area' );	}
		else 
		{	$footer_widget=  array('name' => __( 'Footer Widget Area', 'enigma' ),
			'id' => 'footer-widget-area',
			'description' => __( 'Footer Widget Area', 'enigma' ),
			'before_widget' => '<div class="col-md-3 col-sm-6 footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="col-md-12 widget-heading"><h1>',
			'after_title' => '</h1></div>');
		
			the_widget('WP_Widget_Calendar', 'title='.__('Calendar', 'enigma'), $footer_widget);
			the_widget('WP_Widget_Recent_Posts', null, $footer_widget);
            the_widget('WP_Widget_Pages', null, $footer_widget);
            the_widget('WP_Widget_Archives', null, $footer_widget); 
		} ?>
            </div>
        </div>
    </div>
<?php } ?>
<div class="enigma_footer_area">
    <div class="container">
        <div class="col-md-12">
            <?php if ( enigma_theme_is_companion_active() ) { ?>
                <p class="enigma_footer_copyright_info wl_rtl">
                    <?php 
                    $enigma_footer_customization = get_theme_mod( 'footer_customizations', __('&copy; Copyright 2024. All Rights Reserved','enigma') );
                    $developed_by_text = get_theme_mod('developed_by_text', __('Powered By','enigma'));
                    echo esc_html( $enigma_footer_customization );?> <?php  echo esc_html($developed_by_text);?>
                    <a target="_blank" rel="nofollow" href="<?php echo esc_url( get_theme_mod( 'developed_by_link' ) ); ?>">
                       <?php 
                       $enigma_develop_by = get_theme_mod( 'developed_by_weblizar_text' );
                       echo esc_html( $enigma_develop_by ); ?>
                    </a>
                </p>    
            <?php 
            }else{ ?>
                <p class="enigma_footer_copyright_info wl_rtl">
                    <?php esc_html_e('&copy; Copyright 2024. All Rights Reserved','enigma'); ?>
                </p>    
            <?php
            }
            if ( enigma_theme_is_companion_active() ) {
                $footer_section_social_media_enbled = absint(get_theme_mod('footer_section_social_media_enbled', 1));
                if ($footer_section_social_media_enbled == 1) { ?>
                    <div class="enigma_footer_social_div">
                        <ul class="social">
                            <?php
                            $fb_link = get_theme_mod('fb_link');
                            if (!empty ($fb_link)) { ?>
                                <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Facebook",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link')); ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <?php }
                            $twitter_link = get_theme_mod('twitter_link');
                            if (!empty ($twitter_link)) { ?>
                                <li class="twitter" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Twitter",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>"><i class="fa-brands fa-square-x-twitter"></i></a></li>
                            <?php }
                            $linkedin_link = get_theme_mod('linkedin_link');
                            if (!empty ($linkedin_link)) { ?>
                                <li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Linkedin",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('linkedin_link')); ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <?php }
                            $youtube_link = get_theme_mod('youtube_link');
                            if (!empty ($youtube_link)) { ?>
                                <li class="youtube" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Youtube",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>"><i class="fab fa-youtube"></i></a></li>
                            <?php }
                            $instagram = get_theme_mod('instagram');
                            if (!empty ($instagram)) { ?>
                                <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("instagram",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('instagram')); ?>"><i class="fab fa-instagram"></i></a></li>
                            <?php }
                            $vk_link = get_theme_mod('vk_link');
                            if (!empty ($vk_link)) { ?>
                                <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("vk",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('vk_link')); ?>"><i class="fa-brands fa-vk"></i></a></li>
                            <?php }
                            $qq_link = get_theme_mod('qq_link');
                            if (!empty ($qq_link)) { ?>
                                <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("qq",'enigma') ?>"><a target="_blank" href="<?php echo esc_url(get_theme_mod('qq_link')); ?>"><i class="fa-brands fa-qq"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } 
            } ?>
        </div>
    </div>
</div>
<!-- /Footer Widget Secton--> 
<?php if ( enigma_theme_is_companion_active() ) { 
    $enigma_return_top = absint(get_theme_mod( 'enigma_return_top', '1' ));
    if ( $enigma_return_top == "1" ) { ?>
        <a id="btn-to-top"></a>
    <?php } 
} ?>
</div></div>
<?php wp_footer(); ?>
</body>
</html>