<div class="grid-item <?php echo esc_html($col);?> <?php echo esc_attr($termsString);?>">
<div class="align-items-center no-gutter blog-item reactheme-blog-grid1 col-md-12 swiper-slide">
		<div class="rts-blog-h-2-wrapper">
			<div class="col-top">
				<div class="image-part">
					<a href="<?php the_permalink();?>">
						<?php the_post_thumbnail($settings['thumbnail_size']); ?>
					</a> 
				</div>
			</div>

            <?php if( !empty($settings['blog_avatar_show_hide'])){?>
            <div class="blog-meta-area">
                <ul class="blog-meta">
                    <li>
                        <?php if(!empty($full_date)){ ?>
                        <div class="blog-badge"> <i class="rt-calendar-days"></i> <?php echo esc_html($full_date);?></div>
                        <?php } ?>
                    </li>
                    

                    <?php if(($settings['blog_cat_show_hide'] == 'yes') ){ ?>
                        <li class="cat_list">
                            <i class="fa fa-tags"></i> <?php the_category(', '); ?>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div>
            <?php } ?>

            <div class="blog-content">
                <h3 class="title dd"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            </div>		
		</div>
        
    </div>
</div>