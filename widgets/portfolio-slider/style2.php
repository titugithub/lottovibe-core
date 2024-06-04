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
		<!-- single case air condition start-->
		<div class="single-case-ac">
			<a href="<?php the_permalink(); ?>" class="thumbnail">
			<?php if(has_post_thumbnail()):?>
				<?php the_post_thumbnail($settings['thumbnail_size']); ?>
			<?php endif;?>
			</a>
			<div class="inner-content">
				<div class="inner">
					<?php 
					$categories = get_the_terms(get_the_ID(), 'rt-portfolio-category');

					if ($categories && !is_wp_error($categories)) {
						$first_category = reset($categories);
						$first_category_name = $first_category->name;
					} else {
						$first_category_name = 'Uncategorized';
					}
					?>
					  <span class="pre"><?php echo $first_category_name; ?></span>
					<a href="<?php the_permalink()?>">
					<?php $length = !empty($settings['title_word_count']) ? $settings['title_word_count'] : '22'; ?>
						<h5 class="title"> <?php echo wp_trim_words(get_the_title(), $length, ''); ?></h5>
					</a>
				</div>
			</div>
		</div>
		<!-- single case air condition end -->
	</div>


<?php
endwhile;
wp_reset_query();
?>