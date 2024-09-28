<?php
$cat   = $settings['portfolio_category'];

if (empty($cat)) {
	$best_wp = new wp_Query(array(
		'post_type'      => 'post',
		'posts_per_page' => $settings['per_page'],
	));
} else {
	$best_wp = new wp_Query(array(
		'post_type'      => 'post',
		'posts_per_page' => $settings['per_page'],
		'tax_query'      => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug', //can be set to ID
				'terms'    => $cat //if field is ID you can reference by cat/term number
			),
		)
	));
}
while ($best_wp->have_posts()) : $best_wp->the_post();
	$cats_show = get_the_term_list($best_wp->ID, 'category', ' ', '<span class="separator">,</span> ');

	$full_date      = get_the_date();
	$blog_date      = get_the_date('M d y');
	$post_admin     = get_the_author();
	?>
	<div class="align-items-center no-gutter blog-item svtheme-blog-grid1 col-md-12 swiper-slide">
		<div class="rts-blog-h-2-wrapper">
			<div class="col-top">
				<div class="image-part">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail($settings['thumbnail_size']); ?>
					</a>
				</div>
			</div>

			<?php if (!empty($settings['blog_meta_show_hide']) || !empty($settings['blog_avatar_show_hide'])) { ?>
				<div class="blog-meta-area">
					<ul class="blog-meta">

						<?php if (($settings['blog_meta_show_hide'] == 'yes')) { ?>
							<li>
								<?php if (!empty($full_date)) { ?>
									<div class="blog-badge"> <i class="rt-calendar-days"></i> <?php echo esc_html($full_date); ?></div>
								<?php } ?>
							</li>
						<?php } ?>

						<?php if (($settings['blog_cat_show_hide'] == 'yes')) { ?>
							<li class="cat_list">
								<i class="fa fa-tags"></i> <?php the_category(', '); ?>
							</li>
						<?php } ?>

					</ul>
				</div>
			<?php } ?>

			<div class="blog_content">
				<h3 class="title dd"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if ($settings['blog_readmore_text']) : ?>
					<div class="blog-btn sv-button secondary_btn">
						<a class="rts-btn btn-border radious-0" href="<?php the_permalink(); ?>">
							<?php echo $settings['blog_readmore_text']; ?> </a>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
<?php
endwhile;
wp_reset_query();
?>