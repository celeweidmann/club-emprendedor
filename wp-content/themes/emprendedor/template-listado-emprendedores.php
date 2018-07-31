<?php
/**
 * Template Name: Listado de Emprendedores
 */
get_header(); ?>

<!-- Wrapper start -->
<div class="main">

<!-- cele -->
	<?php
	if ( ( function_exists( 'is_cart' ) && is_cart() ) || ( function_exists( 'is_checkout' ) && is_checkout() ) || ( function_exists( 'is_wc_endpoint_url' ) && is_wc_endpoint_url( 'lost-password' ) ) || ( function_exists( 'is_account_page' ) && is_account_page() ) ) :
		echo '<section class="module module-cart-top">';
	else :

		$thumb_tmp = get_the_post_thumbnail_url();

		$shop_isle_header_image = get_header_image();
		if ( ! empty( $thumb_tmp ) ) {
			echo '<section class="page-header-module module bg-dark" data-background="' . esc_url( $thumb_tmp ) . '">';
		} elseif ( ! empty( $shop_isle_header_image ) ) {
			echo '<section class="page-header-module module bg-dark" data-background="' . esc_url( $shop_isle_header_image ) . '">';
		} else {
			echo '<section class="page-header-module module bg-dark">';
		}

	endif;
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="module-title font-alt"><?php the_title(); ?></h1>

				<?php

				if ( function_exists( 'shop_isle_page_description_box' ) ) {

					/* Header description */

					$shop_isle_shop_id = get_the_ID();

					if ( ! empty( $shop_isle_shop_id ) ) :

						$shop_isle_page_description = get_post_meta( $shop_isle_shop_id, 'shop_isle_page_description' );

						if ( ! empty( $shop_isle_page_description[0] ) ) :
							echo '<div class="module-subtitle font-serif mb-0">' . wp_kses_post( $shop_isle_page_description[0] ) . '</div>';
						endif;

					endif;
				}
				?>

			</div>
		</div>
		<?php
		if ( ( function_exists( 'is_cart' ) && is_cart() ) || ( function_exists( 'is_checkout' ) && is_checkout() ) || ( function_exists( 'is_wc_endpoint_url' ) && is_wc_endpoint_url( 'lost-password' ) ) || ( function_exists( 'is_account_page' ) && is_account_page() ) ) :
			echo '<hr class="divider-w pt-20"><!-- divider -->';
		endif;
		?>
	</div><!-- .container -->
</section>
<!-- fin cele -->

<!-- Post single start -->

<section class="page-module-content module">

    <div class="container">

        <div class="row">

            <!-- Content column start -->
            <div class="col-sm-8">
            <div class="post-header font-alt">
                <h2 class="post-title entry-title">
                    <a href="#" rel="bookmark">Listado de Emprendedores</a>
                </h2>
            </div>
            <?php
            $sites = get_sites();
            foreach ( $sites as $site ): switch_to_blog( $site->blog_id ); ?>
                <div><a href="<?php echo get_bloginfo( 'url' ); ?>" target="_blank"><?php echo get_bloginfo( 'name' ); ?></a></div>
            <?php endforeach; ?>

            </div>
            <!-- Content column end -->

        </div><!-- .row -->

    </div>
</section>
<!-- Post single end -->

<?php get_footer(); ?>