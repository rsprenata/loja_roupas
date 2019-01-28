<?php
/**
 * Dynamic WooCommerce CSS
 *
 * Holds Customizer WooCommerce CSS styles
 *
 * @package Page Builder Framework
 * @subpackage Integration/WooCommerce
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'wpbf_after_customizer_css', 'wpbf_do_woocommerce_customizer_css', 10 );

function wpbf_do_woocommerce_customizer_css() {

	// Accent Color
	$page_accent_color = get_theme_mod( 'page_accent_color' );

	if( $page_accent_color ) {

		echo 'p.demo_store, .woocommerce-store-notice {';
		echo sprintf( 'background: %s;', esc_attr( $page_accent_color ) );
		echo '}';

		echo '.woocommerce-info:before';
		echo sprintf( 'color: %s;', esc_attr( $page_accent_color ) );
		echo '}';

		echo '.woocommerce-info {';
		echo sprintf( 'border-top-color: %s;', esc_attr( $page_accent_color ) );
		echo '}';

	}

	// Menu Item Desktop
	$woocommerce_menu_item_desktop = get_theme_mod( 'woocommerce_menu_item_desktop' );
	$woocommerce_menu_item_desktop_color = get_theme_mod( 'woocommerce_menu_item_desktop_color' );
	$menu_font_color = get_theme_mod( 'menu_font_color' );

	if( $woocommerce_menu_item_desktop !== 'hide' ) {

		if( $woocommerce_menu_item_desktop_color ) {

			echo '.wpbf-menu .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $woocommerce_menu_item_desktop_color ) );
			echo '}';

			echo '.wpbf-menu .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $woocommerce_menu_item_desktop_color ) );
			echo '}';

		} elseif( $menu_font_color ) {

			echo '.wpbf-menu .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $menu_font_color ) );
			echo '}';

			echo '.wpbf-menu .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $menu_font_color ) );
			echo '}';

		} elseif( $page_accent_color ) {

			echo '.wpbf-menu .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $page_accent_color ) );
			echo '}';

			echo '.wpbf-menu .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $page_accent_color ) );
			echo '}';

		}

	}

	// Menu Item Mobile
	$woocommerce_menu_item_mobile = get_theme_mod( 'woocommerce_menu_item_mobile' );
	$woocommerce_menu_item_mobile_color = get_theme_mod( 'woocommerce_menu_item_mobile_color' );
	$mobile_menu_font_color = get_theme_mod( 'mobile_menu_font_color' );

	if( $woocommerce_menu_item_mobile !== 'hide' ) {

		if( $woocommerce_menu_item_mobile_color ) {

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $woocommerce_menu_item_mobile_color ) );
			echo '}';

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $woocommerce_menu_item_mobile_color ) );
			echo '}';

		} elseif( $woocommerce_menu_item_desktop_color ) {

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $woocommerce_menu_item_desktop_color ) );
			echo '}';

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $woocommerce_menu_item_desktop_color ) );
			echo '}';

		} elseif( $mobile_menu_font_color ) {

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $mobile_menu_font_color ) );
			echo '}';

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $mobile_menu_font_color ) );
			echo '}';

		} elseif( $menu_font_color ) {

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $menu_font_color ) );
			echo '}';

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $menu_font_color ) );
			echo '}';

		} elseif( $page_accent_color ) {

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count {';
			echo sprintf( 'background: %s;', esc_attr( $page_accent_color ) );
			echo '}';

			echo '.wpbf-mobile-nav-wrapper .wpbf-woo-menu-item .wpbf-woo-menu-item-count:before {';
			echo sprintf( 'color: %s;', esc_attr( $page_accent_color ) );
			echo '}';

		}

	}

	// Buttons
	$button_border_width = get_theme_mod( 'button_border_width' );
	$button_primary_border_color = get_theme_mod( 'button_primary_border_color' );
	$button_primary_border_color_alt = get_theme_mod( 'button_primary_border_color_alt' );
	$button_primary_bg_color = get_theme_mod( 'button_primary_bg_color' );
	$button_primary_text_color = get_theme_mod( 'button_primary_text_color' );
	$button_border_radius = get_theme_mod( 'button_border_radius' );
	$button_primary_bg_color_alt = get_theme_mod( 'button_primary_bg_color_alt' );
	$button_primary_text_color_alt = get_theme_mod( 'button_primary_text_color_alt' );

	if( $button_border_width ) {

		echo '.woocommerce a.button, .woocommerce button.button, .woocommerce a.button.alt, .woocommerce button.button.alt {';
		echo sprintf( 'border-width: %s;', esc_attr( $button_border_width ) . 'px' );
		echo 'border-style: solid;';

		if( $button_primary_border_color ) {

			echo sprintf( 'border-color: %s;', esc_attr( $button_primary_border_color ) );

		}

		echo '}';

		if( $button_primary_border_color_alt ) {

			echo '.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover {';

			echo sprintf( 'border-color: %s;', esc_attr( $button_primary_border_color_alt ) );

			echo '}';

		}

	}

	if( $button_primary_bg_color || $button_primary_text_color || $button_border_radius ) {

		echo '.woocommerce a.button, .woocommerce button.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled]:hover {';

		if( $button_border_radius ) {

			echo sprintf( 'border-radius: %s;', esc_attr( $button_border_radius ) . 'px' );

		}

		if( $button_primary_bg_color ) {

			echo sprintf( 'background: %s;', esc_attr( $button_primary_bg_color ) );

		}

		if( $button_primary_text_color ) {

			echo sprintf( 'color: %s;', esc_attr( $button_primary_text_color ) );

		}

		echo '}';

	}

	if( $button_primary_bg_color_alt || $button_primary_text_color_alt ) {

		echo '.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover {';

		if( $button_primary_bg_color_alt ) {

			echo sprintf( 'background: %s;', esc_attr( $button_primary_bg_color_alt ) );

		}

		if( $button_primary_text_color_alt ) {

			echo sprintf( 'color: %s;', esc_attr( $button_primary_text_color_alt ) );

		}

		echo '}';

	}

	// Loop
	$woocommerce_loop_custom_width = get_theme_mod( 'woocommerce_loop_custom_width' );
	$woocommerce_loop_content_alignment = get_theme_mod( 'woocommerce_loop_content_alignment' );
	$woocommerce_loop_sale_alignment = get_theme_mod( 'woocommerce_loop_sale_alignment' );
	$woocommerce_loop_sale_layout = get_theme_mod( 'woocommerce_loop_sale_layout' );
	$woocommerce_loop_sale_position = get_theme_mod( 'woocommerce_loop_sale_position' );
	$woocommerce_loop_sale_font_size = get_theme_mod( 'woocommerce_loop_sale_font_size' );
	$woocommerce_loop_sale_font_color = get_theme_mod( 'woocommerce_loop_sale_font_color' );
	$woocommerce_loop_sale_background_color = get_theme_mod( 'woocommerce_loop_sale_background_color' );
	$woocommerce_loop_title_size = get_theme_mod( 'woocommerce_loop_title_size' );
	$woocommerce_loop_title_color = get_theme_mod( 'woocommerce_loop_title_color' );
	$woocommerce_loop_price_size = get_theme_mod( 'woocommerce_loop_price_size' );
	$woocommerce_loop_price_color = get_theme_mod( 'woocommerce_loop_price_color' );
	$woocommerce_single_price_color = get_theme_mod( 'woocommerce_single_price_color' );
	$woocommerce_loop_out_of_stock_font_size = get_theme_mod( 'woocommerce_loop_out_of_stock_font_size' );
	$woocommerce_loop_out_of_stock_font_color = get_theme_mod( 'woocommerce_loop_out_of_stock_font_color' );
	$woocommerce_loop_out_of_stock_background_color = get_theme_mod( 'woocommerce_loop_out_of_stock_background_color' );

	if( $woocommerce_loop_custom_width ) {

		echo '.archive.woocommerce #inner-content {';
		echo sprintf( 'max-width: %s;', esc_attr( $woocommerce_loop_custom_width ) );
		echo '}';

	}

	if( $woocommerce_loop_content_alignment ) {

		echo '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {';
		echo sprintf( 'text-align: %s;', esc_attr( $woocommerce_loop_content_alignment ) );
		echo '}';

		if( $woocommerce_loop_content_alignment == 'center' ) {

			echo '.woocommerce .products .star-rating {';
			echo 'margin: 0 auto 10px auto;';
			echo '}';

		}

		if( $woocommerce_loop_content_alignment == 'right' ) {

			echo '.woocommerce .products .star-rating {';
			echo 'display: inline-block;';
			echo 'text-align: right;';
			echo '}';

		}

	}

	if( $woocommerce_loop_sale_alignment == 'right' ) {

		echo '.woocommerce ul.products li.product .onsale {';
		echo 'right: 0;';
		echo 'left: auto;';
		echo 'margin-right: -10px;';
		echo '}';

	}

	if( $woocommerce_loop_sale_alignment == 'center' ) {

		echo '.woocommerce ul.products li.product .onsale {';
		echo 'left: 50%;';
		echo 'width: 90px;';
		echo 'margin: 0 0 0 -45px;';
		echo 'height: auto;';
		echo 'line-height: 1;';
		echo 'padding: 8px 0;';
		echo 'border-radius: 0px;';
		echo '}';

	}

	if( $woocommerce_loop_sale_layout == 'square' ) {

		echo '.woocommerce span.onsale {';
		echo 'border-radius: 0;';
		echo '}';

	}

	if( $woocommerce_loop_sale_position == 'inside' ) {

		if( !$woocommerce_loop_sale_alignment || $woocommerce_loop_sale_alignment == 'left' ) {

		echo '.woocommerce ul.products li.product .onsale {';
		echo 'margin: 10px 0 0 10px;';
		echo '}';

		}

		if( $woocommerce_loop_sale_alignment == 'right' ) {

		echo '.woocommerce ul.products li.product .onsale {';
		echo 'margin: 10px 10px 0 0;';
		echo '}';

		}

		echo '.woocommerce span.onsale {';
		echo 'margin: 10px 0 0 10px;';
		echo '}';

	}

	if( $woocommerce_loop_sale_font_size || $woocommerce_loop_sale_font_color || $woocommerce_loop_sale_background_color ) {

		echo '.woocommerce ul.products li.product .onsale, .woocommerce span.onsale {';

		if( $woocommerce_loop_sale_font_size ) {

			echo sprintf( 'font-size: %s;', esc_attr( $woocommerce_loop_sale_font_size ) );

		}

		if( $woocommerce_loop_sale_font_color ) {

			echo sprintf( 'color: %s;', esc_attr( $woocommerce_loop_sale_font_color ) );

		}

		if( $woocommerce_loop_sale_background_color ) {

			echo sprintf( 'background-color: %s;', esc_attr( $woocommerce_loop_sale_background_color ) );

		}

		echo '}';

	}

	if( $woocommerce_loop_title_size || $woocommerce_loop_title_color ) {

		echo '.woocommerce ul.products li.product h3, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product .woocommerce-loop-category__title {';

		if( $woocommerce_loop_title_size ) {

			echo sprintf( 'font-size: %s;', esc_attr( $woocommerce_loop_title_size ) );

		}

		if( $woocommerce_loop_title_color ) {

			echo sprintf( 'color: %s;', esc_attr( $woocommerce_loop_title_color ) );

		}

		echo '}';

	}

	if( $woocommerce_loop_price_size || $woocommerce_loop_price_color ) {

		echo '.woocommerce ul.products li.product .price {';

		if( $woocommerce_loop_price_size ) {

			echo sprintf( 'font-size: %s;', esc_attr( $woocommerce_loop_price_size ) );

		}

		if( $woocommerce_loop_price_color ) {

			echo sprintf( 'color: %s;', esc_attr( $woocommerce_loop_price_color ) );

		}

		echo '}';

	}

	if( !$woocommerce_single_price_color && $woocommerce_loop_price_color ) {

		echo '.woocommerce div.product span.price, .woocommerce div.product p.price {';
		echo sprintf( 'color: %s;', esc_attr( $woocommerce_loop_price_color ) );
		echo '}';

	}

	if( $woocommerce_loop_out_of_stock_font_size || $woocommerce_loop_out_of_stock_font_color || $woocommerce_loop_out_of_stock_background_color ) {

		echo '.woocommerce ul.products li.product .wpbf-woo-loop-out-of-stock {';

		if( $woocommerce_loop_out_of_stock_font_size ) {

			echo sprintf( 'font-size: %s;', esc_attr( $woocommerce_loop_out_of_stock_font_size ) );

		}

		if( $woocommerce_loop_out_of_stock_font_color ) {

			echo sprintf( 'color: %s;', esc_attr( $woocommerce_loop_out_of_stock_font_color ) );

		}

		if( $woocommerce_loop_out_of_stock_background_color ) {

			echo sprintf( 'background-color: %s;', esc_attr( $woocommerce_loop_out_of_stock_background_color ) );

		}

		echo '}';

	}

	// Proudct
	$woocommerce_single_custom_width = get_theme_mod( 'woocommerce_single_custom_width' );
	$woocommerce_single_alignment = get_theme_mod( 'woocommerce_single_alignment' );
	$woocommerce_single_image_width = get_theme_mod( 'woocommerce_single_image_width' );
	$woocommerce_single_summary_separator = get_theme_mod( 'woocommerce_single_summary_separator' );
	$woocommerce_single_tabs_font_size = get_theme_mod( 'woocommerce_single_tabs_font_size' );
	$woocommerce_single_tabs_font_color = get_theme_mod( 'woocommerce_single_tabs_font_color' );
	$woocommerce_single_tabs_font_color_alt = get_theme_mod( 'woocommerce_single_tabs_font_color_alt' );
	$woocommerce_single_tabs_font_color_active = get_theme_mod( 'woocommerce_single_tabs_font_color_active' );
	$woocommerce_single_tabs = get_theme_mod( 'woocommerce_single_tabs' );
	$woocommerce_single_tabs_background_color = get_theme_mod( 'woocommerce_single_tabs_background_color' );
	$woocommerce_single_tabs_background_color_alt = get_theme_mod( 'woocommerce_single_tabs_background_color_alt' );
	$woocommerce_single_tabs_background_color_active = get_theme_mod( 'woocommerce_single_tabs_background_color_active' );
	$woocommerce_single_tabs_remove_headline = get_theme_mod( 'woocommerce_single_tabs_remove_headline' );
	$woocommerce_single_price_size = get_theme_mod( 'woocommerce_single_price_size' );

	if( $woocommerce_single_custom_width ) {

		echo '.single.woocommerce #inner-content {';
		echo sprintf( 'max-width: %s;', esc_attr( $woocommerce_single_custom_width ) );
		echo '}';

	}

	if( $woocommerce_single_alignment == 'right' ) {

		echo '.woocommerce div.product div.summary, .woocommerce #content div.product div.summary, .woocommerce-page div.product div.summary, .woocommerce-page #content div.product div.summary {';
		echo 'float: left;';
		echo '}';

		echo '.woocommerce div.product div.images, .woocommerce #content div.product div.images, .woocommerce-page div.product div.images, .woocommerce-page #content div.product div.images {';
		echo 'float: right;';
		echo '}';

		echo '.single-product.woocommerce span.onsale {';
		echo 'display: none;';
		echo '}';

	}

	if( $woocommerce_single_image_width && $woocommerce_single_image_width !== '50' && !wpbf_has_responsive_breakpoints() ) {

		echo '@media screen and (min-width:769px) {';

			echo '.woocommerce div.product div.images, .woocommerce #content div.product div.images, .woocommerce-page div.product div.images, .woocommerce-page #content div.product div.images {';
			echo sprintf( 'width: %s;', esc_attr( $woocommerce_single_image_width ) - 2 . '%' );
			echo '}';

			echo '.woocommerce div.product div.summary, .woocommerce #content div.product div.summary, .woocommerce-page div.product div.summary, .woocommerce-page #content div.product div.summary {';
			echo sprintf( 'width: %s;', 98 - esc_attr( $woocommerce_single_image_width ) . '%' );
			echo '}';

		echo '}';

	}

	if( $woocommerce_single_summary_separator == 'show' ) {

		echo '.woocommerce div.product form.cart {';
		echo 'padding-top: 20px;';
		echo 'padding-bottom: 20px;';
		echo 'border-top: 1px solid #d9d9e0;';
		echo 'border-bottom: 1px solid #d9d9e0;';
		echo '}';

	}

	if( $woocommerce_single_tabs_font_size || $woocommerce_single_tabs_font_color ) {

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li a {';

		if( $woocommerce_single_tabs_font_size ) {

			echo sprintf( 'font-size: %s;', esc_attr( $woocommerce_single_tabs_font_size ) );

		}

		if( $woocommerce_single_tabs_font_color ) {

			echo sprintf( 'color: %s;', esc_attr( $woocommerce_single_tabs_font_color ) );

		}

		echo '}';

	}

	if( $woocommerce_single_tabs_font_color_alt ) {

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover {';
		echo sprintf( 'color: %s;', esc_attr( $woocommerce_single_tabs_font_color_alt ) );
		echo '}';

	}

	if( $woocommerce_single_tabs_font_color_active ) {

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {';
		echo sprintf( 'color: %s;', esc_attr( $woocommerce_single_tabs_font_color_active ) );
		echo '}';

	}

	if( !$woocommerce_single_tabs || $woocommerce_single_tabs == 'default' ) {

		if( $woocommerce_single_tabs_background_color ) {

			echo '.woocommerce div.product .woocommerce-tabs ul.tabs li {';
			echo sprintf( 'background-color: %s;', esc_attr( $woocommerce_single_tabs_background_color ) );
			echo '}';

		}

		if( $woocommerce_single_tabs_background_color_alt ) {

			echo '.woocommerce div.product .woocommerce-tabs ul.tabs li:hover {';
			echo sprintf( 'background-color: %s;', esc_attr( $woocommerce_single_tabs_background_color_alt ) );
			echo sprintf( 'border-bottom-color: %s;', esc_attr( $woocommerce_single_tabs_background_color_alt ) );
			echo '}';

		}

		if( $woocommerce_single_tabs_background_color_active ) {

			echo '.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce div.product .woocommerce-tabs ul.tabs li.active:hover {';
			echo sprintf( 'background-color: %s;', esc_attr( $woocommerce_single_tabs_background_color_active ) );
			echo sprintf( 'border-bottom-color: %s;', esc_attr( $woocommerce_single_tabs_background_color_active ) );
			echo '}';

		}

	}

	if( $woocommerce_single_tabs == 'modern' ) {

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs {';
		echo 'border-top: 1px solid #d9d9e0;';
		echo '}';

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li {';
		echo 'border: none;';
		echo 'border-top: 5px solid transparent;';
		echo 'background: none;';
		echo 'margin: 0 40px 0 0;';
		echo '}';

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li a {';
		echo 'padding-left: 0;';
		echo 'padding-right: 0;';
		echo '}';

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li:last-child {';
		echo 'border-right: none;';
		echo '}';

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li:hover {';
		echo 'background: none;';
		echo '}';

		echo '.woocommerce div.product .woocommerce-tabs ul.tabs li.active {';
		echo 'background: none;';

		if( $woocommerce_single_tabs_font_color_active ) {
			echo sprintf( 'border-top: 5px solid %s;', esc_attr( $woocommerce_single_tabs_font_color_active ) );
		} elseif( $page_accent_color ) {
			echo sprintf( 'border-top: 5px solid %s;', esc_attr( $page_accent_color ) );
		} else {
			echo 'border-top: 5px solid #3ba9d2;';
		}

		echo '}';

		echo '.woocommerce div.product .woocommerce-tabs .panel {';
		echo 'padding: 0;';
		echo 'border: none;';
		echo 'margin-top: 30px;';
		echo '}';

	}

	if( $woocommerce_single_tabs_remove_headline ) {

		echo '.woocommerce div.product .woocommerce-tabs .panel h2:first-child {';
		echo 'display: none;';
		echo '}';

	}

	if( $woocommerce_single_price_size ) {

		echo '.woocommerce div.product span.price, .woocommerce div.product p.price {';
		echo sprintf( 'font-size: %s;', esc_attr( $woocommerce_single_price_size ) );
		echo '}';

	}

	if( $woocommerce_single_price_color ) {

		echo '.woocommerce div.product span.price, .woocommerce div.product p.price {';
		echo sprintf( 'color: %s;', esc_attr( $woocommerce_single_price_color ) );
		echo '}';

	}

	// Checkout
	$woocommerce_checkout_layout = get_theme_mod( 'woocommerce_checkout_layout' );

	if( $woocommerce_checkout_layout == 'side' ) {

		echo '.woocommerce-checkout .col2-set {';
		echo 'width: 53%;';
		echo 'float: left;';
		echo '}';

		echo '.woocommerce-checkout .col2-set .col-1, .woocommerce-checkout .col2-set .col-2 {';
		echo 'float: none;';
		echo 'width: 100%;';
		echo '}';

		echo '#order_review_heading {';
		echo 'float: right;';
		echo 'width: 42%;';
		echo '}';

		echo '.woocommerce-checkout-review-order {';
		echo 'width: 42%;';
		echo 'float: right;';
		echo '}';

		echo '.woocommerce #payment #place_order, .woocommerce-page #payment #place_order {';
		echo 'width: 100%;';
		echo '}';

		if( !wpbf_has_responsive_breakpoints() ) {

			echo '@media screen and (max-width:768px) {';

			echo '.woocommerce-checkout .col2-set, #order_review_heading, .woocommerce-checkout-review-order {';
			echo 'width: 100%;';
			echo 'float: none;';
			echo '}';


			echo '}';

		}

	}

}