<?php
$cat   = $settings['portfolio_category'];

if (empty($cat)) {
	$best_wp = new wp_Query(array(
		'post_type'      => 'rt-portfolios',
		'posts_per_page' => $settings['per_page'],
	));
} else {
	$best_wp = new wp_Query(array(
		'post_type'      => 'rt-portfolios',
		'posts_per_page' => $settings['per_page'],
		'tax_query'      => array(
			array(
				'taxonomy' => 'rt-portfolio-category',
				'field'    => 'slug', //can be set to ID
				'terms'    => $cat //if field is ID you can reference by cat/term number
			),
		)
	));
}
$details_btn_text = !empty($settings['details_btn_text']) ? $settings['details_btn_text'] : 'Case Details';
while ($best_wp->have_posts()) : $best_wp->the_post();
	$cats_show = get_the_term_list($best_wp->ID, 'rt-portfolio-category', ' ', '<span class="separator">,</span> ');
	?>

	<div class="swiper-slide">
		<!-- siongle team -->
		<div class="single-project-solari-h3">
			<a href="<?php the_permalink(); ?>" class="thumbnail">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail($settings['thumbnail_size']); ?>
				<?php endif; ?>
			</a>
			<div class="name-social-area-wrapper">
				<div class="name-area">					
						<p><?php echo $cats_show; ?></p>			
						<h6 class="title"><?php the_title();?></h6>
					
				</div>
			</div>
		</div>
		<!-- siongle team end -->
	</div>


<?php
endwhile;
wp_reset_query();
?>