<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://woo.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

the_title( '<h1 class="product_title entry-title">', '</h1>' );
?><style>
.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button {animation: f 100s linear infinite;
    animation-duration: 100s;
    animation-timing-function: linear;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    animation-direction: normal;
    animation-fill-mode: none;
    animation-play-state: running;
    animation-name: f;
    background: linear-gradient(121.19deg, rgba(133, 239, 49, 0) 25.73%, hsla(0, 0%, 100%, 0.3) 45.27%, rgba(133, 239, 49, 0) 62.27%), #6536D6;
	font-size: 10px;
        line-height: 30px;
        padding: 0 12px;
		        letter-spacing: 0pt;
				    border-radius: 40px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
	text-align: center;
    transition: 0.2s ease;
    user-select: none;
}
</style><?php