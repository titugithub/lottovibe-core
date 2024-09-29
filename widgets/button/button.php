<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;

defined('ABSPATH') || die();

class SVTheme_Button_Widget extends \Elementor\Widget_Base
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
		return 'sv-button';
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
		return esc_html__('SV Button', 'rtelements');
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve counter widget icon.
	 *
	 * @since 1.0.
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'glyph-icon flaticon-menu';
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
		return ['rtelements_category'];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords()
	{
		return ['button'];
	}

	/**
	 * Register counter widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls()
	{


		//Content Section Start
		$this->start_controls_section(
			'lottovibebutton_content_general_section',
			[
				'label' => esc_html__('General', 'lottovibe-core')
			]
		);

		$this->add_control(
			'style_selection',
			[
				'label'   => esc_html__('Select Style', 'lottovibe-core'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'style_one' => esc_html__('Style One', 'lottovibe-core'),
					'style_two' => esc_html__('Style Two', 'lottovibe-core'),
					'style_three' => esc_html__('Style Three', 'lottovibe-core'),
				],
				'default' => 'style_one',
			]
		);


		$this->add_responsive_control(
			'lottovibebutton_content_button_align',
			[
				'label'         => esc_html__('Button Align', 'lottovibe-core'),
				'type'             => \Elementor\Controls_Manager::CHOOSE,
				'options'         => [
					'start'         => [
						'title' => esc_html__('Left', 'lottovibe-core'),
						'icon'     => 'eicon-text-align-left',
					],
					'center'     => [
						'title' => esc_html__('Center', 'lottovibe-core'),
						'icon'     => 'eicon-text-align-center',
					],
					'end'     => [
						'title' => esc_html__('Right', 'lottovibe-core'),
						'icon'     => 'eicon-text-align-right',
					],

				],
				'default'         => 'start',
				'selectors'     => [
					'{{WRAPPER}} .browse-more' => 'justify-content: {{VALUE}} !important;',
				],
				'condition' => [
					'style_selection' => ['style_two']
				]
			]
		);


		$this->add_control(
			'lottovibebutton_content_button_text',
			[
				'label' => esc_html__('Button Text', 'avalle-core'),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Click Here', 'avalle-core'),
				'label_block' => true,

			]
		);
		$this->add_control(
			'lottovibebutton_content_button_url',
			[
				'label' => esc_html__('Button URL', 'avalle-core'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('https://your-link.com', 'avalle-core'),
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);




		$this->end_controls_section();

		// =======================Style==========================//

		$this->start_controls_section(
			'style',
			[
				'label' => esc_html__('Button', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'button_color',
			[
				'label' => esc_html__('Color', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .kewta-btn .kew-text' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .kew-arrow i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} i.ph-bold.ph-arrow-up-right.n0-clr.fs-three' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} span.d-block.n0-clr.fw_700' => 'color: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'button_bac_color',
			[
				'label' => esc_html__('Background Color', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .kewta-btn .kew-text' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .kew-arrow' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .browse-more .cmn__collection' => 'background: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'button_hover_bac_color',
			[
				'label' => esc_html__('Hover Background Color', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cmn__collection::after' => 'background: {{VALUE}} !important',
				],
			]
		);


		$this->add_control(
			'button_border_color',
			[
				'label' => esc_html__( 'Button BorderColor', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} span.kew-text.p1-border.n0-clr' => 'border-color: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'icon_bac_color',
			[
				'label' => esc_html__( 'Icon BackgroundColor', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .kew-arrow.p1-bg' => 'background: {{VALUE}} !important',
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




		<?php if ($settings['style_selection'] == 'style_one') : ?>
			<?php if (!empty($settings['lottovibebutton_content_button_text'])) :   ?>
				<a href="<?php echo esc_url($settings['lottovibebutton_content_button_url']['url']) ?>" class="kewta-btn kewta-alt d-inline-flex align-items-center">
					<span class="kew-text s1-bg n0-clr" data-aos="zoom-in-left" data-aos-duration="900">
						<?php echo esc_html($settings['lottovibebutton_content_button_text']) ?>
					</span>
					<div class="kew-arrow s1-bg" data-aos="zoom-in-left" data-aos-duration="1600">
						<div class="kt-one">
							<i class="ti ti-arrow-right n0-clr"></i>
						</div>
						<div class="kt-two">
							<i class="ti ti-arrow-right n0-clr"></i>
						</div>
					</div>
				</a>
			<?php endif ?>
		<?php endif; ?>



		<?php if ($settings['style_selection'] == 'style_two') : ?>
			<?php if (!empty($settings['lottovibebutton_content_button_text'])) :   ?>
				<div class="browse-more d-flex" data-aos="zoom-in" data-aos-duration="2000">
					<a href="<?php echo esc_url($settings['lottovibebutton_content_button_url']['url']) ?>" class="cmn__collection radius-circle s1-bg d-center position-relative ">
						<span class="cmn-cont-box text-center position-relative">
							<span class="icon mb-1">
								<i class="ph-bold ph-arrow-up-right n0-clr fs-three"></i>
							</span>
							<span class="d-block n0-clr fw_700">
								<?php echo esc_html($settings['lottovibebutton_content_button_text']) ?>
							</span>
						</span>
					</a>
				</div>
			<?php endif ?>
		<?php endif; ?>


		<?php if ($settings['style_selection'] == 'style_three') : ?>
			<?php if (!empty($settings['lottovibebutton_content_button_text'])) :   ?>
				<a href="<?php echo esc_url($settings['lottovibebutton_content_button_url']['url']) ?>" class="kewta-btn d-inline-flex align-items-center">
					<span class="kew-text p1-border n0-clr">
						<?php echo esc_html($settings['lottovibebutton_content_button_text']) ?>
					</span>
					<div class="kew-arrow p1-bg">
						<div class="kt-one">
							<i class="ti ti-arrow-right n4-clr"></i>
						</div>
						<div class="kt-two">
							<i class="ti ti-arrow-right n4-clr"></i>
						</div>
					</div>
				</a>
			<?php endif; ?>
		<?php endif; ?>












<?php
	}
}
