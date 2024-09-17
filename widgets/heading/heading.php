<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class SVTheme_Elementor_Heading_Widget extends \Elementor\Widget_Base
{

	/*
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'react-heading';
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
		return esc_html__('SV Heading', 'rtelements');
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
		return 'glyph-icon flaticon-letter';
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
	 * Register rsgallery widget controls.
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
				'label' => esc_html__('Content', 'plugin-name')
			]
		);

		$this->add_control(
			'content_style',
			[
				'type' => \Elementor\Controls_Manager::SELECT,
				'label' => esc_html__('Select Style', 'finview-core'),
				'options' => [
					'style_one' => esc_html__('Style One', 'finview-core'),
					'style_two' => esc_html__('Style Two', 'finview-core'),
					'style_three' => esc_html__('Style Three', 'finview-core'),
					'style_four' => esc_html__('Style Four', 'finview-core'),
				],
				'default' => 'style_one',
			]
		);

		$this->add_control(
			'icon',
			[
				'label' => esc_html__('Choose Icon', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,

			]
		);


		$this->add_control(
			'subtitle',
			[
				'label' => esc_html__('Subtitle', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default subtitle', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__('Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default title', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'titletwo',
			[
				'label' => esc_html__('Title Two', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default title two', 'plugin-name'),
				'label_block' => true,

			]
		);

		$this->add_control(
			'titlethree',
			[
				'label' => esc_html__('Title Three', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default title three', 'plugin-name'),
				'label_block' => true,

			]
		);



		$this->add_control(
			'user1',
			[
				'label' => esc_html__('User One', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);

		$this->add_control(
			'user2',
			[
				'label' => esc_html__('User Two', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);

		$this->add_control(
			'user3',
			[
				'label' => esc_html__('User Three', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);

		$this->add_control(
			'usernumber',
			[
				'label' => esc_html__('User Number', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('10k+', 'plugin-name'),
				'label_block' => true,
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);

		$this->add_control(
			'ratingtitle',
			[
				'label' => esc_html__('Rating Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Default title', 'plugin-name'),
				'label_block' => true,
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);

		$this->add_control(
			'ratingicon',
			[
				'label' => esc_html__('Rating Icon', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);

		$this->add_control(
			'review',
			[
				'label' => esc_html__('Review', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__('Default description', 'plugin-name'),
				'condition' => [
					'content_style' => 'style_four'
				]
			]
		);



		$this->add_control(
			'description',
			[
				'label' => esc_html__('Description', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__('Default description', 'plugin-name'),
			]
		);


		$this->end_controls_section();





		// ==================================Style==================================//


		$this->start_controls_section(
			'subtitle_style',
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

		$this->add_control(
			'subtitle_color_hover',
			[
				'label'     => esc_html__('Hover Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .subtitle:hover' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'subtitle_margin',
			[
				'label' => esc_html__('Margin', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
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
			'title_style',
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

		$this->add_control(
			'title_color2',
			[
				'label'     => esc_html__('Color Two', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .titletwo' => 'color: {{VALUE}} !important;',
				],
			]
		);

		$this->add_control(
			'title_color3',
			[
				'label'     => esc_html__('Color Three', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .titlethree' => 'color: {{VALUE}} !important;',
					'{{WRAPPER}} .section__title .act4-underline::before' => 'background: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'title_margin',
			[
				'label' => esc_html__('Margin', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
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
			'des_style',
			[
				'label' => esc_html__('Description', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'description_typ',
				'selector' => '{{WRAPPER}} .description',

			]
		);

		$this->add_control(
			'description_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .description' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'description_margin',
			[
				'label' => esc_html__('Margin', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors' => [
					'{{WRAPPER}} .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);

		$this->add_responsive_control(
			'description_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);



		$this->end_controls_section();



		// =========================Heading Four Control======================================//


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

		$settings = $this->get_settings_for_display();

		?>

		<?php if ($settings['content_style'] == 'style_one') : ?>


			<div class="about-content-core">
				<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down">
					<?php if (!empty($settings['icon']['url'])) :   ?>
						<img src="<?php echo esc_url($settings['icon']['url']) ?>" alt="<?php echo esc_attr("image") ?>">
					<?php endif ?>
					<?php if (!empty($settings['subtitle'])) :   ?>
						<h5 class="subtitle s1-clr fw_700">
							<?php echo wp_kses($settings['subtitle'], wp_kses_allowed_html('post'))  ?>
						</h5>
					<?php endif ?>
				</div>
				<div class="section__title mb-xxl-8 mb-6">
					<?php if (!empty($settings['title'])) :   ?>
						<span class="title display-four d-block n4-clr mb-xxl-4 mb-xl-3 mb-2" data-aos="zoom-in-right" data-aos-duration="1200">
							<?php echo wp_kses($settings['title'], wp_kses_allowed_html('post'))  ?>
						</span>
					<?php endif ?>
					<?php if (!empty($settings['description'])) :   ?>
						<p class="description fs20 n3-clr" data-aos="zoom-in-right" data-aos-duration="1600">
							<?php echo wp_kses($settings['description'], wp_kses_allowed_html('post'))  ?>
						</p>
					<?php endif ?>
				</div>
			</div>

		<?php endif ?>


		<?php if ($settings['content_style'] == 'style_two') : ?>



			<div class="about-content-core text-center">
				<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3 justify-content-center" data-aos="zoom-in-down">
					<?php if (!empty($settings['icon']['url'])) :   ?>
						<img src="<?php echo esc_url($settings['icon']['url']) ?>" alt="<?php echo esc_attr("image") ?>">
					<?php endif ?>
					<?php if (!empty($settings['subtitle'])) :   ?>
						<h5 class="subtitle s1-clr fw_700">
							<?php echo wp_kses($settings['subtitle'], wp_kses_allowed_html('post'))  ?>
						</h5>
					<?php endif ?>
				</div>
				<div class="section__title mb-xxl-8 mb-6">
					<?php if (!empty($settings['title'])) :   ?>
						<span class="title display-four d-block n4-clr mb-xxl-4 mb-xl-3 mb-2" data-aos="zoom-in-right" data-aos-duration="1200">
							<?php echo wp_kses($settings['title'], wp_kses_allowed_html('post'))  ?>
						</span>
					<?php endif ?>
					<?php if (!empty($settings['description'])) :   ?>
						<p class="description fs20 n3-clr" data-aos="zoom-in-right" data-aos-duration="1600">
							<?php echo wp_kses($settings['description'], wp_kses_allowed_html('post'))  ?>
						</p>
					<?php endif ?>
				</div>
			</div>


		<?php endif ?>



		<?php if ($settings['content_style'] == 'style_three') : ?>

			<div class="container">
				<div class="row g-md-6 g-0 align-items-center justify-content-between">
					<div class="col-lg-6 col-md-7">
						<div class="section__title  mb-xxl-10 mb-8">
							<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
								<?php if (!empty($settings['icon']['url'])) :   ?>
									<img src="<?php echo esc_url($settings['icon']['url']) ?>" alt="<?php echo esc_attr("image") ?>">
								<?php endif ?>
								<?php if (!empty($settings['subtitle'])) :   ?>
									<h5 class="s1-clr fw_700">
										<?php echo wp_kses($settings['subtitle'], wp_kses_allowed_html('post'))  ?>
									</h5>
								<?php endif ?>

							</div>
							<span class="display-four d-block n4-clr">
								<?php if (!empty($settings['title'])) :   ?>
									<span class="d-block title" data-aos="zoom-in-right" data-aos-duration="1200">
										<?php echo wp_kses($settings['title'], wp_kses_allowed_html('post'))  ?>
									</span>
								<?php endif ?>
								<?php if (!empty($settings['titletwo'])) : ?>
									<?php echo '<span class="titletwo">' . wp_kses($settings['titletwo'], wp_kses_allowed_html('post')) . '</span>'; ?>
								<?php endif; ?>
								<?php if (!empty($settings['titlethree'])) :   ?>
									<span class="titlethree act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000"><?php echo wp_kses($settings['titlethree'], wp_kses_allowed_html('post'))  ?> </span>
								<?php endif ?>
							</span>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<?php if (!empty($settings['description'])) :   ?>
							<p class="n3-clr fs20 description">
								<?php echo wp_kses($settings['description'], wp_kses_allowed_html('post'))  ?>
							</p>
						<?php endif ?>
					</div>
				</div>
			</div>

		<?php endif ?>






		<?php if ($settings['content_style'] == 'style_four') : ?>
			<section class="section-title-section">
				<!--Section Header-->
				<div class="container">
					<div class="row g-xl-4 g-3 align-items-center justify-content-between mb-xxl-15 mb-xl-10 mb-8">
						<div class="col-lg-6 col-md-8 col-sm-9">
							<div class="section__title">
								<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
									<?php if (!empty($settings['icon']['url'])) :   ?>
										<img src="<?php echo esc_url($settings['icon']['url']) ?>" alt="img">
									<?php endif ?>
									<?php if (!empty($settings['subtitle'])) :   ?>
										<h5 class="s1-clr fw_700">
											<?php echo esc_html($settings['subtitle']) ?>
										</h5>
									<?php endif ?>
								</div>
								<div class="display-four testimonial-heading d-block n4-clr">
									<?php if (!empty($settings['title'])) :   ?>
										<?php echo esc_html($settings['title']) ?>
									<?php endif ?>
									<?php if (!empty($settings['titletwo'])) :   ?>
										<span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">
											<?php echo esc_html($settings['titletwo']) ?>
										</span>
									<?php endif ?>

									<div class="d-flex flex-wrap align-items-center g-4">
										<ul class="customer-review testi-people-title cmn-style-flex list-unstyled">
											<?php if (!empty($settings['user1']['url'])) :   ?>
												<li>
													<a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
														<img src="<?php echo esc_url($settings['user1']['url']) ?>" alt="img">
													</a>
												</li>
											<?php endif ?>
											<?php if (!empty($settings['user2']['url'])) :   ?>
												<li>
													<a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
														<img src="<?php echo esc_url($settings['user2']['url']) ?>" alt="img">
													</a>
												</li>
											<?php endif ?>
											<?php if (!empty($settings['user3']['url'])) :   ?>
												<li>
													<a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
														<img src="<?php echo esc_url($settings['user3']['url']) ?>" alt="img">
													</a>
												</li>
											<?php endif ?>
											<li>
												<a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
													<span class="d-grid customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
														<?php if (!empty($settings['usernumber'])) :   ?>
															<span class="d-block fs-eight fw_700 n4-clr">
																<?php echo esc_html($settings['usernumber']) ?>
															</span>
														<?php endif ?>
													</span>
												</a>
											</li>
										</ul>
										<?php if (!empty($settings['titlethree'])) :   ?>
											<span class="d-block ar-talking" data-aos="zoom-in-right" data-aos-duration="1200">
												<?php echo esc_html($settings['titlethree']) ?>
											</span>
										<?php endif ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
							<div class="testimonial-ratting" data-aos="zoom-in-down" data-aos-duration="1600">
								<?php if (!empty($settings['ratingtitle'])) :   ?>
									<span class="n4-clr fw_700 mb-xxl-6 mb-xl-4 mb-3">
										<?php echo wp_kses($settings['ratingtitle'], wp_kses_allowed_html('post'))  ?>
									</span>
								<?php endif ?>
								<ul class="ratting d-flex align-items-center gap-1 mb-xxl-3 mb-2 list-unstyled">
									<?php echo wp_kses($settings['ratingicon'], wp_kses_allowed_html('post'))  ?>
								</ul>
								<h4 class="n2-clr">
									<?php echo wp_kses($settings['review'], wp_kses_allowed_html('post'))  ?>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<!--Section Header-->

			</section>
		<?php endif; ?>








<?php
	}
} ?>