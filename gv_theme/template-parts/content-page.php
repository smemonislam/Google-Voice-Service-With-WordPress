<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GV_Theme
 */

?>	
	<!-- Desktop View -->
	<?php 
		$args = array(
			'post_type'      => 'table',
			'posts_per_page' => 10,
		);
		$loop = new WP_Query($args);
		while ( $loop->have_posts() ) {
			$loop->the_post();
	?>
	
	<div id="post-<?php the_ID(); ?>" <?php post_class(array( "gv-services", "bg-white", "gv-pd", 'mb-80' )); ?>>		
		<table class="table gv-table">
			<h2 class="section-heading"><?php the_title(); ?></h2>
			<thead>
				<tr class="gv-table-row-color">
					<th scope="col"><?php esc_html_e( 'Product Name', 'gv_theme' ); ?></th>
					<th scope="col"><?php esc_html_e('Shipping Mode', 'gv_theme' ); ?></th>
					<th scope="col"><?php esc_html_e( 'In Stock', 'gv_theme' ); ?></th>
					<th scope="col"><?php esc_html_e( 'Quantity', 'gv_theme' ); ?></th>
					<th scope="col"><?php esc_html_e( 'Price', 'gv_theme' ); ?></th>
					<th scope="col"><?php esc_html_e( 'Operate', 'gv_theme' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Loop through rows.
					while( have_rows('product_name_table') ) : the_row();
						?>
						<tr>
							<th scope="row"><?php  the_sub_field('product_name'); ?></th>
							<td class="text-center"><span class="gv-btn gv-btn-color"><?php  the_sub_field('shipping_mode'); ?></span></td>
							<td><?php  the_sub_field('quantity'); ?></td>
							<td><?php  the_sub_field('in_stock'); ?></td>
							<td><?php  the_sub_field('price'); ?></td>
							<?php 
							$link = get_sub_field('urls');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								?>
							<?php endif; ?>

							<td class="text-center"><a href="<?php echo $link_url; ?>" class="gv-services-link"><?php echo $link_title; ?></a></td>					
						</tr>	
					<?php
					// End loop.
					endwhile;
				?>
				
			</tbody>
		</table>		
	</div>
	<?php
	wp_reset_postdata();
		}
	?>