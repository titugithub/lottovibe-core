<?php

/**
 * Marquee widget class
 *
 */

use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Repeater;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class Rsaddon_Elementor_About_Widget extends \Elementor\Widget_Base
{
    //register css
    public function get_style_depends()
    {
        wp_register_style('rtelements-marquee-css', plugins_url('marquee-css/marquee.css', __FILE__));
        return [
            'rtelements-marquee-css'
        ];
    }

    /**
     * Get widget name.
     *    
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */

    public function get_name()
    {
        return 'rt-about';
    }

    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */

    public function get_title()
    {
        return esc_html__('SV About', 'rtelements');
    }

    /**
     * Get widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-gallery-grid';
    }


    public function get_categories()
    {
        return ['pielements_category'];
    }

    public function get_keywords()
    {
        return ['logo', 'clients', 'brand', 'parnter', 'image'];
    }

    protected function register_controls()
    { 


        $this->start_controls_section(
            'about_section_content',
            [
                'label' => esc_html__('Content', 'plugin-name')
            ]
        );
        $this->add_control(
            'about_section_select',
            [
                'label' => esc_html__( 'Select Style', 'rtelements' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'rtelements' ),
					'style2'  => esc_html__( 'Style 2', 'rtelements' ),
				],
            ]
        );

        $this->add_control(
            'about_marquee',
            [
                'label' => esc_html__( 'Marquee Text', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
                'default' => esc_html__( 'About Our Company', 'plugin-name' ),
                'placeholder' => esc_html__( 'Type your marquee text here', 'plugin-name' ),
                'condition' => [
                    'about_section_select' => 'style1',
                ]
            ]
        );


        $this->add_control(
            'about_image_one',
            [
                'label' => esc_html__( 'Choose Image One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'about_image_two',
            [
                'label' => esc_html__( 'Choose Image Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_responsive_control(
			'about_animation_image_bottom_position',
			[
				'label' => esc_html__( 'Bottom', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => -30,
				],
				'selectors' => [
					'{{WRAPPER}} .rt-images' => 'bottom: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'about_section_select' => 'style2',
                ]
			]
		);
        $this->add_responsive_control(
			'about_animation_image_left_position',
			[
				'label' => esc_html__( 'Left', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'custom' ],
				'range' => [
					'px' => [
						'min' => -1000,
						'max' => 1000,
					],
					'%' => [
						'min' => -100,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => -70,
				],
				'selectors' => [
					'{{WRAPPER}} .rt-images' => 'left: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'about_section_select' => 'style2',
                ]
			]
		);
        
        
        $this->end_controls_section();  


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $about_style = $settings['about_section_select'];

        if($about_style == 'style1'):
        ?>
        <div class="about-lefta-area-solari-2 pb--150">
                <div class="thumbnail-image-lg">
                    <img src="<?php echo esc_url($settings['about_image_one']['url'])?>" alt="<?php echo esc_attr('image')?>">
                </div>
                <div class="thumbnail-image-bottom images-2">
                    <img src="<?php echo esc_url($settings['about_image_two']['url'])?>" alt="<?php echo esc_attr('image')?>">
                </div>

                <div class="left-top-speen-style">
                    <div class="top-left-speen">
                        <?php if( !empty( $settings['about_marquee'] ) ) :   ?>
                            <a class="uni-circle-text" href="javascript:void(0);">
                            <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin" viewBox="0 0 100 100" width="170" height="170">
                                <defs>
                                    <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                    </path>
                                </defs>
                                <text font-size="11">
                                    <textPath xlink:href="#circle">
                                        <?php echo wp_kses($settings['about_marquee'], wp_kses_allowed_html('post'))  ?>
                                    </textPath>
                                </text>
                            </svg>
                            <i class="uk-position-center uk-text-secondary uk-icon-medium@m unicon-arrow-up-right uk-text-bold"></i>
                        </a>        
                        <?php endif ?>

                    </div>
                </div>

            </div>
        
        <?php elseif($about_style == 'style2'):?>
        <div class="thumbnail-about-six">
            <img src="<?php echo esc_url($settings['about_image_one']['url'])?>" alt="<?php echo esc_attr('about-area-image')?> ">
            <img class="about-move images rt-images" src="<?php echo esc_url($settings['about_image_two']['url'])?>" alt="<?php echo esc_attr('about')?>">
        </div>
        <?php else: ?>
            <div class="about-lefta-area-solari-2 pb--150">
                <div class="thumbnail-image-lg">
                    <img src="<?php echo esc_url($settings['about_image_one']['url'])?>" alt="<?php echo esc_attr('image')?>">
                </div>
                <div class="thumbnail-image-bottom images-2">
                    <img src="<?php echo esc_url($settings['about_image_two']['url'])?>" alt="<?php echo esc_attr('image')?>">
                </div>

                <div class="left-top-speen-style">
                    <div class="top-left-speen">
                        <?php if( !empty( $settings['about_marquee'] ) ) :   ?>
                            <a class="uni-circle-text" href="javascript:void(0);">
                            <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin" viewBox="0 0 100 100" width="170" height="170">
                                <defs>
                                    <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                    </path>
                                </defs>
                                <text font-size="11">
                                    <textPath xlink:href="#circle">
                                        <?php echo wp_kses($settings['about_marquee'], wp_kses_allowed_html('post'))  ?>
                                    </textPath>
                                </text>
                            </svg>
                            <i class="uk-position-center uk-text-secondary uk-icon-medium@m unicon-arrow-up-right uk-text-bold"></i>
                        </a>        
                        <?php endif ?>

                    </div>
                </div>

            </div>
        <?php  endif;?>
<?php
    }
}
