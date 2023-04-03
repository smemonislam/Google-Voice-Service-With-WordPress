<!-- /** Mobile View */ -->
	<?php 
		$args = array(
			'post_type'      => 'table',
			'posts_per_page' => 10,
		);
		$loop = new WP_Query($args);
		while ( $loop->have_posts() ) {
			$loop->the_post();

			while( have_rows('product_name_table') ) : the_row();
	?>
	
	<div class="bg-white gv-pd mt-4">
		<h2 class="section-heading"><?php the_title(); ?></h2>
		<div class="d-flex align-items-start border-bottom">
			<div class="flex-shrink-0">
				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail( 'thumbnail' );
					}
				?>
			</div>
			<div class="flex-grow-1 ms-3">
				<p class="gv-btn gv-btn-color mb-10"><?php  the_sub_field('shipping_mode'); ?></p>
				<p class="mb-10"><?php  the_sub_field('product_name'); ?></p>
				<div class="product-details">
					<span class="inventory"><?php esc_html_e('Inventory: ', 'gv_theme');  the_sub_field('in_stock'); ?></span>
					<span class="quantity"><?php esc_html_e('I Qty: ', 'gv_theme'); the_sub_field('quantity'); ?></span>
					<span class="price-text-color"><?php esc_html_e('I $ ', 'gv_theme'); the_sub_field('price'); ?></span>
				</div>
			</div>
		</div>
	</div>
	<?php
	endwhile;
	wp_reset_postdata();
		}
	?>