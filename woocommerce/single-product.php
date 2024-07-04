<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<div class="inner-page">
	<div class="page-wrap">
		<div class="container">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
		</div>
	</div>
</div>
	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 
		do_action( 'woocommerce_sidebar' );*/
	?>

<?php
get_footer( 'shop' );
?>
<style>
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
</style>
<?php
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
