
<?php


defined( 'ABSPATH' ) || exit;

global $product;
\
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>



	<?php
	
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="form summary entry-summary">
		<?php
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	
	?>


<?php do_action( 'woocommerce_after_single_product' ); ?>
