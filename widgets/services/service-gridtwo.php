<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;

defined('ABSPATH') || die();

class Reactheme_Elementor_Sservices_Gridtwo_Widget extends \Elementor\Widget_Base
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
		return 'rt-service-gridtwo';
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
		return esc_html__('SV Services Two', 'rtelements');
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
				'label' => esc_html__('Content', 'plugin-name')
			]
		);


		$this->add_control(
			'image',
			[
				'label' => esc_html__('Choose Image', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' => esc_html__('Subtitle', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Why Participant Our Program', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title1',
			[
				'label' => esc_html__('Title One', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Explore', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title2',
			[
				'label' => esc_html__('Title Two', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Our Exclusive', 'plugin-name'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title3',
			[
				'label' => esc_html__('Title Three', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Bike Lottery Services', 'plugin-name'),
				'label_block' => true,
			]
		);


		// Repeater
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_icon',
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
			'list_title',
			[
				'label' => esc_html__('Title', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('List Title', 'plugin-name'),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_description',
			[
				'label' => esc_html__('Description', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__('Default description', 'plugin-name'),
			]
		);

		$this->add_control(
			'list_repeater',
			[
				'label' => esc_html__('Service List', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),

				'title_field' => '{{{ list_title }}}',
			]
		);


		$this->add_control(
			'buttontext',
			[
				'label' => esc_html__('Button Text', 'plugin-name'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('All Featured', 'plugin-name'),
				'label_block' => true,
			]
		);


		$this->add_control(
			'button_link',
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

		</script>





		<section class="bike-program mb-120 bike-program-before position-relative winbg">
			<div class="pt-120 pb-120">
				<div class="container">
					<div class="row g-6 align-items-center">
						<div class="col-lg-6 order-1 order-lg-0">
							<div class="program-thumb" data-aos="zoom-in-right" data-aos-duration="1400">
								<?php if (!empty($settings['image']['url'])) :   ?>
									<div class="thumb">
										<img src="<?php echo esc_url($settings['image']['url']) ?>" alt="img">
									</div>
								<?php endif ?>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="program-content">
								<div class="section__title mb-xxl-10 mb-8">
									<div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/global/section-icon.png" alt="img">
										<?php if (!empty($settings['subtitle'])) :   ?>
											<h5 class="s1-clr fw_700">
												<?php echo esc_html($settings['subtitle']) ?>
											</h5>
										<?php endif ?>

									</div>
									<span class="display-four d-block n4-clr">
										<?php echo esc_html($settings['title1']) ?> <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000"><?php echo esc_html($settings['title2']) ?> </span>
										<span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
											<?php echo esc_html($settings['title3']) ?>
										</span>
									</span>
								</div>
								<div class="program-planwrap">

									<?php foreach ($settings['list_repeater'] as $item) : ?>
										<div class="program-plan-item d-flex gap-xxl-10 gap-xl-7 gap-lg-5 gap-sm-4 gap-2">
											<div class="pro-check d-center s1-bg position-relative">
												<i class="ph-bold ph-check"></i>
											</div>
											<div class="program-plan-inner d-flex gap-xxl-6 gap-xl-5 gap-lg-3 gap-2" data-aos="zoom-in-down" data-aos-duration="1000">

												<div class="icon d-center p1-bg">
													<?php \Elementor\Icons_Manager::render_icon($item['list_icon'], ['aria-hidden' => 'true']); ?>
												</div>
												<div class="content">
													<?php if (!empty($item['list_title'])) :   ?>
														<span class="fs20 mb-xxl-3 mb-2 fw_700 n4-clr d-block">
															<?php echo esc_html($item['list_title']) ?>
														</span>
													<?php endif ?>
													<?php if (!empty($item['list_description'])) :   ?>
														<p class="n3-clr">
															<?php echo esc_html($item['list_description']) ?>
														</p>
													<?php endif ?>
												</div>
											</div>
										</div>
									<?php endforeach; ?>



								</div>
								<?php if (!empty($settings['buttontext'])) :   ?>
									<div class="car-tybtn" data-aos="zoom-in-up" data-aos-duration="1600">
										<a href="<?php echo esc_url($settings['button_link']['url'])?>" class="kewta-btn kewta-alt d-inline-flex align-items-center">
											<span class="kew-text s1-bg n0-clr">
												<?php echo esc_html($settings['buttontext']) ?>
											</span>
											<div class="kew-arrow s1-bg">
												<div class="kt-one">
													<i class="ti ti-arrow-right n0-clr"></i>
												</div>
												<div class="kt-two">
													<i class="ti ti-arrow-right n0-clr"></i>
												</div>
											</div>
										</a>
									</div>
								<?php endif ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>









<?php

	}
}

?>