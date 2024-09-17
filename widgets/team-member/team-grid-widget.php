<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class SVTheme_Elementor_Team_Grid_Widget extends \Elementor\Widget_Base
{

	/**
	 * Get widget name.
	 *
	 * Retrieve rsgallery widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'rt-team-member';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve rsgallery widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __('SV Team Grid', 'rsaddon');
	}

	public function get_style_depends()
	{

		wp_register_style('rtelements-team-gird', plugins_url('team-css/team-grid.css', __FILE__));

		return [
			'rtelements-team-gird'
		];
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve rsgallery widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'glyph-icon flaticon-network';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the rsgallery widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['pielements_category'];
	}



	/**
	 * Register team grid widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls()
	{


		$this->start_controls_section(
			'headingcontent',
			[
				'label' => esc_html__('Heading', 'plugin-name')
			]
		);

		$this->add_control(
			'iconsubtitle',
			[
				'label' => esc_html__('Choose Icon Subtitle', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,

			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' => esc_html__('Subtitle', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('People In Illinois Are', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->add_control(
			'title1',
			[
				'label' => esc_html__('Title One', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Meet Our', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->add_control(
			'title2',
			[
				'label' => esc_html__('Title Two', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Previous', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->add_control(
			'title3',
			[
				'label' => esc_html__('Title Three', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__(' Winners', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->add_control(
			'buttontext',
			[
				'label' => esc_html__('Button Text', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('View All Winners', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'buttonlink',
			[
				'label' => esc_html__('ButtonLink', 'plugin-name'),
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


		$this->end_controls_section();

		$this->start_controls_section(
			'winnercontent',
			[
				'label' => esc_html__('Winners', 'plugin-name')
			]
		);

		$this->add_control(
			'winnder1',
			[
				'label' => esc_html__('Winner One', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'winnerimage1',
			[
				'label' => esc_html__('Choose Winner Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'productimage1',
			[
				'label' => esc_html__('Choose Product Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'winnder2',
			[
				'label' => esc_html__('Winner Two', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


		$this->add_control(
			'winnerimage2',
			[
				'label' => esc_html__('Choose Winner Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'productimage2',
			[
				'label' => esc_html__('Choose Product Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);



		$this->add_control(
			'winnder3',
			[
				'label' => esc_html__('Winner Three', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


		$this->add_control(
			'winnerimage3',
			[
				'label' => esc_html__('Choose Winner Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'productimage3',
			[
				'label' => esc_html__('Choose Product Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'winnder4',
			[
				'label' => esc_html__('Winner Four', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


		$this->add_control(
			'winnerimage4',
			[
				'label' => esc_html__('Choose Winner Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'productimage4',
			[
				'label' => esc_html__('Choose Product Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'winnder5',
			[
				'label' => esc_html__('Winner Five', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);


		$this->add_control(
			'winnerimage5',
			[
				'label' => esc_html__('Choose Winner Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'productimage5',
			[
				'label' => esc_html__('Choose Product Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'winnder6',
			[
				'label' => esc_html__('Winner Six', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'winnerimage6',
			[
				'label' => esc_html__('Choose Winner Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'productimage6',
			[
				'label' => esc_html__('Choose Product Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		$this->end_controls_section();

		// ============================Style========================//

		$this->start_controls_section(
			 'subtitlestyle',
			 [
				'label' => esc_html__('Subtitle', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'subtitle_typ',
				'selector' => '{{WRAPPER}} .subtitle',
		
			]
		);
		
		$this->add_control(
			'subtitle_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .subtitle' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'subtitle_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		
		$this->add_responsive_control(
			'subtitle_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
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
				'name'     => 'titlestyle_typ',
				'selector' => '{{WRAPPER}} span.display-four.d-block.n4-clr.mb-xxl-10.mb-xl-7.mb-sm-5.mb-4',
		
			]
		);
		
		$this->add_control(
			'titlestyle_color1',
			[
				'label'     => esc_html__('Color One', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.display-four.d-block.n4-clr.mb-xxl-10.mb-xl-7.mb-sm-5.mb-4' => 'color: {{VALUE}} !important;',
				],
			]
		);

		$this->add_control(
			'titlestyle_color2',
			[
				'label'     => esc_html__('Color Two', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.act4-clr.act4-underline' => 'color: {{VALUE}} !important;',
					'{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
				],
			]
		);
		
		
		$this->end_controls_section();

		$this->start_controls_section(
			 'buttonstyle',
			 [
				'label' => esc_html__('Button', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		
		$this->add_control(
			'buttonstyle_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.kew-text.act3-bg.n4-clr' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} i.ti.ti-arrow-right.n4-clr' => 'color: {{VALUE}} !important',
				],
			]
		);
		
		$this->add_control(
			'buttonstyle_baccolor',
			[
				'label' => esc_html__( 'Background Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.kew-text.act3-bg.n4-clr' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .kewta-btn .kew-arrow' => 'background: {{VALUE}} !important',
				],
			]
		);
		
		
		$this->end_controls_section();

		$this->start_controls_section(
			 'winnerstyle',
			 [
				'label' => esc_html__('Winner', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			 ]
		);
		
		$this->add_control(
			'winnerstyle_color',
			[
				'label' => esc_html__( 'Hover BackgroundColor', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .meet-previous-item:hover .man-bike' => 'background: {{VALUE}} !important',
				],
			]
		);
		
		
		
		$this->end_controls_section();




	}

	/**
	 * Render rsgallery widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render()
	{

		$settings    = $this->get_settings_for_display();
		?>




		<section class="previous-winner pt-120 pb-120">
			<!--Section Header-->
			<div class="container">
				<div class="row g-xl-4 g-3 align-items-center justify-content-between mb-xxl-10 mb-xl-8 mb-6">
					<div class="col-xl-5 col-lg-6">
						<div class="section__title text-sm-start text-center mb-lg-0 mb-4">
							<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center justify-content-sm-start justify-content-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
								<?php if (!empty($settings['iconsubtitle']['url'])) :   ?>
									<img src="<?php echo esc_url($settings['iconsubtitle']['url']) ?>" alt="img">
								<?php endif ?>
								<?php if (!empty($settings['subtitle'])) :   ?>
									<h5 class="s1-clr fw_700 subtitle">
										<?php echo esc_html($settings['subtitle']) ?>
									</h5>
								<?php endif ?>
							</div>
							<span class="display-four d-block n4-clr mb-xxl-10 mb-xl-7 mb-sm-5 mb-4">
								<?php echo esc_html($settings['title1']) ?> <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000"><?php echo esc_html($settings['title2']) ?> </span>
								<span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
									<?php echo esc_html($settings['title3']) ?>
								</span>
							</span>
							<a href="<?php echo esc_url($settings['buttonlink']['url']) ?>" class="kewta-btn d-inline-flex align-items-center">
								<span class="kew-text act3-bg n4-clr">
									<?php echo esc_html($settings['buttontext']) ?>
								</span>
								<div class="kew-arrow act3-bg n4-clr">
									<div class="kt-one">
										<i class="ti ti-arrow-right n4-clr"></i>
									</div>
									<div class="kt-two">
										<i class="ti ti-arrow-right n4-clr"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="d-grid d-sm-flex align-items-center gap-xxl-6 gap-4">
							<div class="meet-previous-item" data-aos="zoom-in-down" data-aos-duration="1200">
								<div class="thumb-man">
									<?php if (!empty($settings['winnerimage1']['url'])) :   ?>
										<img src="<?php echo esc_url($settings['winnerimage1']['url']) ?>" alt="img" class="mimg">
									<?php endif ?>
									<?php if (!empty($settings['productimage1']['url'])) :   ?>
										<div class="man-bike">
											<img src="<?php echo esc_url($settings['productimage1']['url']) ?>" alt="img">
										</div>
									<?php endif ?>
								</div>
							</div>
							<div class="meet-previous-item" data-aos="zoom-in-down" data-aos-duration="1200">
								<div class="thumb-man">
									<?php if (!empty($settings['winnerimage2']['url'])) :   ?>
										<img src="<?php echo esc_url($settings['winnerimage2']['url']) ?>" alt="img" class="mimg">
									<?php endif ?>
									<?php if (!empty($settings['productimage2']['url'])) :   ?>
										<div class="man-bike">
											<img src="<?php echo esc_url($settings['productimage2']['url']) ?>" alt="img">
										</div>
									<?php endif ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Section Header-->

			<!--Previous Body-->
			<div class="container">
				<div class="row g-6 justify-content-center">
					<div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1200">
						<div class="meet-previous-item">
							<div class="thumb-man">
								<?php if (!empty($settings['winnerimage3']['url'])) :   ?>
									<img src="<?php echo esc_url($settings['winnerimage3']['url']) ?>" alt="img" class="mimg">
								<?php endif ?>
								<?php if (!empty($settings['productimage3']['url'])) :   ?>
									<div class="man-bike">
										<img src="<?php echo esc_url($settings['productimage3']['url']) ?>" alt="img">
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1400">
						<div class="meet-previous-item">
							<div class="thumb-man">
								<?php if (!empty($settings['winnerimage4']['url'])) :   ?>
									<img src="<?php echo esc_url($settings['winnerimage4']['url']) ?>" alt="img" class="mimg">
								<?php endif ?>
								<?php if (!empty($settings['productimage4']['url'])) :   ?>
									<div class="man-bike">
										<img src="<?php echo esc_url($settings['productimage4']['url']) ?>" alt="img">
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1600">
						<div class="meet-previous-item">
							<div class="thumb-man">
								<?php if (!empty($settings['winnerimage5']['url'])) :   ?>
									<img src="<?php echo esc_url($settings['winnerimage5']['url']) ?>" alt="img" class="mimg">
								<?php endif ?>
								<?php if (!empty($settings['productimage5']['url'])) :   ?>
									<div class="man-bike">
										<img src="<?php echo esc_url($settings['productimage5']['url']) ?>" alt="img">
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-left" data-aos-duration="1800">
						<div class="meet-previous-item">
							<div class="thumb-man">
								<?php if (!empty($settings['winnerimage6']['url'])) :   ?>
									<img src="<?php echo esc_url($settings['winnerimage6']['url']) ?>" alt="img" class="mimg">
								<?php endif ?>
								<?php if (!empty($settings['productimage6']['url'])) :   ?>
									<div class="man-bike">
										<img src="<?php echo esc_url($settings['productimage6']['url']) ?>" alt="img">
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Previous Body-->
		</section>









<?php
	}
} ?>