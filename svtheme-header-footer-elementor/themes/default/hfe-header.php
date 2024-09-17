<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="//gmpg.org/xfn/11">
<?php global $solari_option; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
    
    <div class="close-button body-close"></div>
   <?php if ( class_exists( 'WooCommerce' ) ) { ?>
        <div class="body-overlay-cart"></div>
        <div class="cart-icon-total-products">
            <div class="cart-header">                                
                <h3 class="cart-heading"><?php echo esc_html__('Cart Total Items', 'elevate');?> (<span class="icon-num"><?php echo is_object( WC()->cart ) ? WC()->cart->get_cart_contents_count() : '';?></span>)</h3>
                <div class="close-cart"><i class="rt-xmark"></i></div>
            </div>
            <?php the_widget( 'WC_Widget_Cart' ); ?>
        </div>
    <?php } ?>
  
  
    <!--Preloader start here-->
    <?php get_template_part( 'inc/header/preloader' ); ?>
    <!--Preloader area end here-->
    
    <?php
        $gap = ''; 
        if ( is_active_sidebar( 'footer_top' )){
        $gap = 'footer-bottom-gaps';
        
    }$header_id = Header_Footer_Elementor::get_settings( 'type_header', '' );    
    $fixed_header = get_post_meta($header_id, 'header-position', true);
    $fixed_header = !empty($fixed_header) ? 'fixed-header' : '';?>
    
    <?php        
        $extrapadding = !empty($solari_option['show_call_btns']) ? '' : 'lesspadding';   
        $sticky             = !empty($solari_option['off_sticky']) ? $solari_option['off_sticky'] : ''; 
        $sticky_menu        = ($sticky == 1) ? ' menu-sticky' : '';   
    ?>
    <div id="page" class="site <?php echo esc_attr( $gap );?> <?php echo esc_attr($extrapadding);?>">
    <?php  get_template_part('inc/header/search'); get_template_part('inc/header/off-canvas'); ?>
    	<header id="svtheme-header" class="header-style-1  mainsmenu <?php echo $fixed_header ;?>">   
	     
	    <div class="header-inner<?php echo esc_attr($sticky_menu);?>">
       <?php 

		if( is_404() ){
			return;
		} else {
			do_action( 'hfe_header' );
		} ?>
        </div>
    </header>
    <?php get_template_part( 'inc/breadcrumbs' );  ?>
        <?php 
            $page_bg = get_post_meta(get_the_ID(), 'page_bg', true);
            if($page_bg !='' && is_page()): ?>
                <div class="main-contain offcontents" style="background-image: url('<?php echo esc_url( $page_bg );?>'); ">
            <?php else: ?>
                <div class="main-contain offcontents">                
            <?php endif;
        ?>        
