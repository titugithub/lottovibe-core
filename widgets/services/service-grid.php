<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;

defined('ABSPATH') || die();

class Reactheme_Elementor_Sservices_Grid_Widget extends \Elementor\Widget_Base
{


	/**
	 * Get widget name.
	 *
	 * Retrieve counter widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'rt-service-grid';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve counter widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return esc_html__('SV Services', 'rtelements');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve counter widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'glyph-icon flaticon-support';
	}

	/**
	 * Retrieve the list of scripts the counter widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.3.0
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_categories()
	{
		return ['pielements_category'];
	}


	/**
	 * Register services widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls()
	{


		$this->start_controls_section(
			'content',
			[
				'label' => esc_html__('General', 'plugin-name')
			]
		);




		// Repeater
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'image',
			[
				'label' => esc_html__('Choose Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'icon',
			[
				'label' => esc_html__('Icon', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'number',
			[
				'label' => esc_html__('Number', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('01', 'plugin-name'),
				'label_block' => true,
			]
		);


		$repeater->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Transparent Draw Process', 'plugin-name'),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => esc_html__('Link', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'plugin-name'),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'list_repeater',
			[
				'label' => esc_html__('Services List', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ title }}}',
			]
		);



		$this->end_controls_section();


		// ===========================Style=============================//



		$this->start_controls_section(
			 'iconstyle',
			 [
				'label' => esc_html__('Icon', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);

		$this->add_control(
			'spinnfder_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.lbadge.p1-bg.mb-xxl-4.mb-xl-5.mb-5 svg path' => 'stroke: {{VALUE}} !important',
				],
			]
		);
		
		
		$this->add_control(
			'icon_bacc_color',
			[
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .lotter-service-item .lbadge' => 'background: {{VALUE}} !important; border:1px solid {{VALUE}} !important',
	
				],
			]
		);
		
		
		$this->end_controls_section();

		$this->start_controls_section(
			 'numberstyle',
			 [
				'label' => esc_html__('Number', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		$this->add_control(
			'spifdfnner_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.serial-badge.fs-five.radius-circle.d-flex.align-items-center.justify-content-center.act3-bg' => 'color: {{VALUE}} !important',
				],
			]
		);
		
		$this->add_control(
			'spifdfnner_cfolor',
			[
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.serial-badge.fs-five.radius-circle.d-flex.align-items-center.justify-content-center.act3-bg' => 'background: {{VALUE}} !important',
				],
			]
		);
		
		
		
		$this->end_controls_section();

		$this->start_controls_section(
			 'titlestyle',
			 [
				'label' => esc_html__('Title', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'title_typ',
				'selector' => '{{WRAPPER}} .title',
		
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'title_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		
		$this->add_responsive_control(
			'title_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);
		
		
		$this->end_controls_section();


		$this->start_controls_section(
			 'nav_style',
			 [
				'label' => esc_html__('Navigation', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		
		$this->add_control(
			'spidfdfnner_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider-btn.d-inline-flex.gap-xxl-5.gap-3 button' => 'border-color: {{VALUE}} !important',
					'{{WRAPPER}} .slider-btn.d-inline-flex.gap-xxl-5.gap-3 button i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .lotto-services-container .swiper-pagination' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background: {{VALUE}} !important',
				],
			]
		);
		
		
		$this->end_controls_section();








	}

	/**
	 * Render counter widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	/**
	 * Render counter widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render()
	{
		$settings = $this->get_settings_for_display();


		?>

		<script>
			jQuery(document).ready(function($) {
				var swiper = new Swiper(".lottery-service-wrap", {
					loop: true,
					slidesPerView: 1,
					slidesToShow: 1,
					spaceBetween: 24,
					speed: 1500,
					navigation: {
						nextEl: ".swiper-button-prevteam",
						prevEl: ".swiper-button-nextteam",
					},
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
					},
					breakpoints: {
						1400: {
							slidesPerView: 3,
							spaceBetween: 24,
						},
						992: {
							slidesPerView: 3,
							spaceBetween: 14,
						},
						768: {
							slidesPerView: 2,
							spaceBetween: 14,
						},
						576: {
							slidesPerView: 2,
							spaceBetween: 14,
						},
						500: {
							slidesPerView: 1,
							spaceBetween: 14,
						},
					},
				});
			})
		</script>





		<div class="lotto-services-container">
			<div class="container-fluid">
				<div class="lottery-service-wrap swiper">
					<div class="swiper-wrapper">
						<?php foreach ($settings['list_repeater'] as $item) : ?>
							<div class="swiper-slide">
								<a href="<?php echo esc_url($item['link']['url']) ?>" class="lotter-service-item d-block position-relative overflow-hidden">
									<?php if (!empty($item['image']['url'])) :   ?>
										<img src="<?php echo esc_url($item['image']['url']) ?>" alt="img" class="lotto-img">
									<?php endif ?>
									<span class="lottory-sercar tl__posi">
										<?php if (!empty($item['icon'])) :   ?>
											<span class="lbadge p1-bg mb-xxl-4 mb-xl-5 mb-5">
												<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
											</span>
										<?php endif ?>
										<?php if (!empty($item['title'])) :   ?>
											<span class="n4-clr">
												<span class="fs-four title">
													<?php echo esc_html($item['title']) ?>
												</span>
											</span>
										<?php endif ?>

									</span>
									<?php if (!empty($item['number'])) :   ?>
										<span class="serial-badge fs-five radius-circle d-flex align-items-center justify-content-center act3-bg">
											<?php echo esc_html($item['number']) ?>
										</span>
									<?php endif ?>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="mt-xxl-15 mt-xl-8 mt-6 d-flex align-items-center gap-xxl-6 gap-xl-5 gap-3">
					<div class="slider-btn d-inline-flex gap-xxl-5 gap-3">
						<button type="button" class="swiper-button-nextteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
							<i class="ph-light ph-caret-left act4-clr"></i>
						</button>
						<button type="button" class="swiper-button-prevteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
							<i class="ph-light ph-caret-right act4-clr"></i>
						</button>
					</div>
					<div class="swiper-pagination d-center"></div>
				</div>
			</div>
		</div>









<?php

	}
}

?>