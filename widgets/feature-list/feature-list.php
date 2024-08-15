<?php

/**
 * Icon List
 *
 */

use Elementor\Repeater;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;
use Elementor\Control_Media;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

defined('ABSPATH') || die();

class RTS_Features_List_Widget extends \Elementor\Widget_Base
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
        return 'rtfeatureslist';
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
        return esc_html__('SV Features List', 'rsaddon');
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
        return 'glyph-icon flaticon-price';
    }


    public function get_categories()
    {
        return ['rsaddon_category'];
    }

    public function get_keywords()
    {
        return ['list', 'title', 'features', 'heading', 'plan'];
    }

    protected function register_controls()
    { 



        $this->start_controls_section(
            'headingcontent',
            [
                'label' => esc_html__('Heading', 'plugin-name')
            ]
        );

        $this->add_control(
            'iconimage',
            [
                'label' => esc_html__( 'Subtitle Icon', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'How it works', 'plugin-name' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title1',
            [
                'label' => esc_html__( 'Title One', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( ' Your Ultimate', 'plugin-name' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__( 'Title Two', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( ' Guide to', 'plugin-name' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title3',
            [
                'label' => esc_html__( 'Title Three', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Winning!', 'plugin-name' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'iconrightimage',
            [
                'label' => esc_html__( 'Choose Image', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        
        
        $this->end_controls_section();  


        $this->start_controls_section(
            'videocontent',
            [
                'label' => esc_html__('Video', 'plugin-name')
            ]
        );


        $this->add_control(
            'videoimage',
            [
                'label' => esc_html__( 'Choose Image', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'videolink',
            [
                'label' => esc_html__( 'Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
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
            'featurecontent',
            [
                'label' => esc_html__('Featues', 'plugin-name')
            ]
        );

        // Repeater
        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
            'list_title', [
                'label' => esc_html__( 'Title', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'List Title' , 'plugin-name' ),
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'list_content', [
                'label' => esc_html__( 'Content', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'List Content' , 'plugin-name' ),
                'show_label' => false,
            ]
        );
        
        $this->add_control(
            'list_repeater',
            [
                'label' => esc_html__( 'Repeater List', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
      
                'title_field' => '{{{ list_title }}}',
            ]
        );
        
        
        
        $this->end_controls_section();  



    }



    protected function render()
    {
        $settings = $this->get_settings_for_display(); ?>






        <section class="howit-work-sectionv5 position-relative  pt-120 pb-120">
            <!--Section Header-->
            <div class="container mb-xxl-11 mb-lg-10 mb-4">
                <div class="row g-xl-4 pt-5 pt-lg-0 g-4 justify-content-md-between align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-7">
                        <div class="section__title text-md-start text-center">
                            <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap justify-content-md-start justify-content-center align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/global/section-icon.png" alt="img">
                                <h5 class="s1-clr fw_700">
                                    How It Works
                                </h5>
                            </div>
                            <span class="display-four d-block n4-clr">
                                Your Ultimate
                                <span class="d-flex align-items-center justify-content-md-start justify-content-center gap-2">
                                    <span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
                                        Guide to
                                    </span>
                                    <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">
                                        Winning!
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-1 d-lg-block d-none">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/global/how1-arrow.png" alt="img" class="m-howarrow">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                        <div class="howit-video position-relative">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/howit/how-playv5.png" alt="img">
                            <a href="https://www.youtube.com/watch?v=668nUCeBHyY" class="bn-vid popup-video">
                                <i class="ti ti-player-play-filled act3-clr fs-five"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Section Header-->

            <!--Work Body-->
            <div class="container pt-15">
                <div class="row g-lg-6 g-sm-10 g-15 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="work-item1 work-stepv5 text-center position-relative">
                            <div class="tbox pb-3">
                                <span class="text-uppercase n4-clr fw_700 fs-seven d-block mb-xxl-6 mb-xl-4 mb-3">
                                    STEP_<span class="act4-clr fw_700 fs-six text-uppercase">01</span>
                                </span>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.9375 11.25C10.7141 11.25 11.3438 10.6204 11.3438 9.84375C11.3438 5.96672 14.498 2.8125 18.375 2.8125C22.252 2.8125 25.4062 5.96672 25.4062 9.84375C25.4062 10.6204 26.0359 11.25 26.8125 11.25C27.5891 11.25 28.2188 10.6204 28.2188 9.84375C28.2188 4.41591 23.8028 0 18.375 0C12.9472 0 8.53125 4.41591 8.53125 9.84375C8.53125 10.6204 9.16087 11.25 9.9375 11.25Z" fill="black" />
                                    <path d="M14.9336 47.8516C15.1289 47.9492 15.3442 48 15.5625 48H35.25C35.623 48 35.9806 47.8519 36.2444 47.5881C38.3237 45.5088 39.4688 42.7443 39.4688 39.8038V26.9062C39.4688 24.58 37.5762 22.6875 35.25 22.6875C34.7009 22.6875 34.1767 22.7941 33.6951 22.9857C33.2071 21.1955 31.5678 19.875 29.625 19.875C29.0759 19.875 28.5517 19.9816 28.0701 20.1732C27.5821 18.383 25.9428 17.0625 24 17.0625C23.5071 17.0625 23.0339 17.1483 22.5938 17.3044V9.84375C22.5938 7.51753 20.7012 5.625 18.375 5.625C16.0488 5.625 14.1562 7.51753 14.1562 9.84375V25.5H12.75C10.4238 25.5 8.53125 27.3925 8.53125 29.7188V37.4923C8.53125 39.6448 9.12937 41.7503 10.261 43.5813C11.3926 45.4123 13.0084 46.8889 14.9336 47.8516ZM11.3438 29.7188C11.3438 28.9433 11.9746 28.3125 12.75 28.3125H14.1562V34.3581C14.1562 35.1347 14.7859 35.7643 15.5625 35.7643C16.3391 35.7643 16.9688 35.1347 16.9688 34.3581V9.84375C16.9688 9.06834 17.5996 8.4375 18.375 8.4375C19.1504 8.4375 19.7812 9.06834 19.7812 9.84375V29.7188C19.7812 30.4954 20.4109 31.125 21.1875 31.125C21.9641 31.125 22.5938 30.4954 22.5938 29.7188V21.2812C22.5938 20.5058 23.2246 19.875 24 19.875C24.7754 19.875 25.4062 20.5058 25.4062 21.2812V29.7188C25.4062 30.4954 26.0359 31.125 26.8125 31.125C27.5891 31.125 28.2188 30.4954 28.2188 29.7188V24.0938C28.2188 23.3183 28.8496 22.6875 29.625 22.6875C30.4004 22.6875 31.0312 23.3183 31.0312 24.0938V29.7188C31.0312 30.4954 31.6609 31.125 32.4375 31.125C33.2141 31.125 33.8438 30.4954 33.8438 29.7188V26.9062C33.8438 26.1308 34.4746 25.5 35.25 25.5C36.0254 25.5 36.6562 26.1308 36.6562 26.9062V39.8038C36.6562 41.8042 35.9444 43.6952 34.6407 45.1875H15.9072C13.0839 43.6478 11.3438 40.7283 11.3438 37.4923V29.7188Z" fill="black" />
                                </svg>
                                <span class="number-shadow">
                                    1.
                                </span>
                            </div>
                            <div class="box pt-xxl-20 pt-10">
                                <h4 class="n4-clr mb-xxl-4 mb-3 fw_700">
                                    SELECT YOUR COMPETITION
                                </h4>
                                <p class="fs18 n3-clr">
                                    Choose a prize from our
                                    <span class="d-block">
                                        selection.
                                    </span>
                                </p>
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/global/step-dot.png" alt="img" class="step-donglobal">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1400">
                        <div class="work-item1 work-stepv5 text-center position-relative">
                            <div class="tbox pb-3">
                                <span class="text-uppercase n4-clr fw_700 fs-seven d-block mb-xxl-6 mb-xl-4 mb-3">
                                    STEP_<span class="act4-clr fw_700 fs-six text-uppercase">02</span>
                                </span>
                                <svg width="49" height="38" viewBox="0 0 49 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M47.8485 32.1244L44.0779 27.0594V5.79269C44.0779 2.95184 41.7666 0.640625 38.9258 0.640625H10.0742C7.23339 0.640625 4.92218 2.95184 4.92218 5.79269V27.0594L1.15152 32.1244C0.406723 33.125 0.291785 34.439 0.851674 35.5536C1.41147 36.6683 2.53415 37.3608 3.78142 37.3608H45.2185C46.4658 37.3608 47.5886 36.6684 48.1483 35.5536C48.7083 34.439 48.5933 33.125 47.8485 32.1244ZM7.7324 5.79269C7.7324 4.50139 8.78295 3.45084 10.0742 3.45084H38.9258C40.2171 3.45084 41.2676 4.50139 41.2676 5.79269V26.1199H7.7324V5.79269ZM45.6372 34.2924C45.5887 34.3888 45.47 34.5506 45.2186 34.5506H3.78142C3.53 34.5506 3.41131 34.3888 3.36288 34.2924C3.31436 34.196 3.25553 34.0041 3.40569 33.8025L7.03293 28.9301H41.9671L45.5943 33.8025C45.7444 34.0042 45.6856 34.196 45.6372 34.2924Z" fill="black" />
                                </svg>
                                <span class="number-shadow">
                                    2.
                                </span>
                            </div>
                            <div class="box pt-xxl-20 pt-10">
                                <h4 class="n4-clr mb-xxl-4 mb-3 fw_700">
                                    LOG IN OR REGISTER
                                </h4>
                                <p class="fs18 n3-clr">
                                    and add your tickets to
                                    <span class="d-block">
                                        your basket.
                                    </span>
                                </p>
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/global/step-dot.png" alt="img" class="step-donglobal">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1700">
                        <div class="work-item1 work-stepv5 text-center position-relative">
                            <div class="tbox pb-3">
                                <span class="text-uppercase n4-clr fw_700 fs-seven d-block mb-xxl-6 mb-xl-4 mb-3">
                                    STEP_<span class="act4-clr fw_700 fs-six text-uppercase">03</span>
                                </span>
                                <svg width="48" height="33" viewBox="0 0 48 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M47.4494 19.4729C47.4494 18.6449 46.7803 17.9865 45.9513 17.9865C45.1324 17.9865 44.4532 17.3181 44.4532 16.5001C44.4532 15.682 45.1224 15.0037 45.9413 15.0037C46.7703 15.0037 47.4294 14.3353 47.4294 13.5073L47.4194 4.55901C47.4194 3.73102 46.7503 3.07261 45.9213 3.07261C45.5219 3.07261 45.1423 2.92298 44.8627 2.63368C44.5831 2.35435 44.4233 1.97527 44.4233 1.57624C44.4233 0.758223 43.7541 0.0898438 42.9352 0.0898438L5.00358 0.0998196C4.60409 0.0998196 4.22458 0.259433 3.94494 0.538755C3.67528 0.818078 3.51548 1.19716 3.51548 1.59619C3.51548 2.41421 2.84634 3.09256 2.02738 3.09256C1.62789 3.09256 1.24838 3.25218 0.968736 3.5315C0.689093 3.81082 0.529297 4.1899 0.529297 4.58894L0.539284 13.5372C0.539284 14.3652 1.20843 15.0236 2.03737 15.0236C2.85633 15.0236 3.53546 15.692 3.53546 16.51C3.53546 17.3281 2.86631 18.0064 2.04736 18.0064C1.21842 18.0064 0.559259 18.6748 0.559259 19.5028L0.569246 28.4511C0.569246 29.2791 1.23839 29.9375 2.06733 29.9375C2.46682 29.9375 2.84634 30.0871 3.12598 30.3764C3.40562 30.6557 3.56542 31.0348 3.56542 31.4339C3.56542 32.2519 4.23457 32.9203 5.05352 32.9203L42.9851 32.9103C43.3846 32.9103 43.7641 32.7507 44.0437 32.4713C44.3234 32.192 44.4832 31.8129 44.4832 31.4139C44.4832 30.5959 45.1523 29.9175 45.9713 29.9175C46.3708 29.9175 46.7503 29.7579 47.0299 29.4786C47.3096 29.1993 47.4694 28.8202 47.4694 28.4212L47.4494 19.4729ZM42.7953 28.2416C42.316 28.7204 41.9564 29.2891 41.7367 29.9175H13.5227V28.3314C13.5227 27.5034 12.8536 26.845 12.0246 26.845C11.1957 26.845 10.5365 27.5134 10.5365 28.3414V29.9175H6.28195C6.06223 29.299 5.70269 28.7204 5.2233 28.2416C4.74392 27.7628 4.17464 27.4036 3.54545 27.1842L3.53546 20.7099C5.27324 20.0914 6.52165 18.4354 6.51166 16.4901C6.51166 14.5448 5.26325 12.8888 3.51548 12.2803L3.5055 5.80599C4.14468 5.58652 4.71395 5.23736 5.19334 4.74855C5.67273 4.26971 6.03227 3.70109 6.25199 3.07261H10.5365L10.5165 4.44928C10.5066 5.26729 11.1557 5.95562 11.9847 5.9656C12.8136 5.97557 13.4927 5.32715 13.5027 4.49915L13.5227 3.07261H41.7067C41.9264 3.69111 42.286 4.26971 42.7654 4.74855C43.2448 5.22739 43.814 5.58652 44.4432 5.80599L44.4532 12.2803C42.7154 12.8988 41.467 14.5548 41.477 16.5001C41.477 18.4453 42.7354 20.1013 44.4732 20.7099L44.4832 27.1842C43.844 27.4036 43.2747 27.7628 42.7953 28.2416Z" fill="black" />
                                    <path d="M12.0137 14.9245C12.8427 14.9245 13.5018 14.2561 13.5018 13.4282V10.4454C13.5018 9.61739 12.8327 8.95898 12.0037 8.95898C11.1748 8.95898 10.5156 9.62736 10.5156 10.4554V13.4381C10.5256 14.2561 11.1948 14.9245 12.0137 14.9245Z" fill="black" />
                                    <path d="M12.0252 17.8965C11.1963 17.8965 10.5371 18.5649 10.5371 19.3929V22.3756C10.5371 23.2036 11.2063 23.862 12.0352 23.862C12.8641 23.862 13.5233 23.1936 13.5233 22.3657V19.3829C13.5133 18.5649 12.8442 17.8965 12.0252 17.8965Z" fill="black" />
                                    <path d="M32.7182 9.68682C32.2688 9.60701 31.8293 9.92624 31.5497 10.1657C31.1901 10.4649 30.8705 10.8141 30.5909 11.1932C30.3312 11.5423 30.0017 11.9912 29.5922 12.52C29.1827 13.0586 28.7433 13.6771 28.3038 14.3355C28.2139 14.4752 28.134 14.5849 28.0641 14.6747C27.9643 14.4453 27.8544 14.2258 27.7246 14.0163C27.6347 13.8667 27.365 13.3978 26.636 11.9513C25.9868 10.6744 25.4674 9.91626 24.998 9.55713C24.5386 9.20798 24.1491 8.98851 23.7896 8.88875C23.1504 8.70919 22.8308 8.93863 22.681 9.1581L22.671 9.17805C22.5512 9.36759 22.4813 9.57708 22.4613 9.78658C22.4413 9.99607 22.4912 10.2554 22.6211 10.5846C22.7409 10.8939 22.9606 11.253 23.2902 11.7019C23.5898 12.091 24.0293 12.7195 24.6085 13.5674C25.1778 14.4054 25.5973 15.0538 25.847 15.4927C26.1066 15.9516 26.3563 16.3507 26.566 16.6599C26.7358 16.9093 26.7658 17.029 26.7658 17.0589C26.7458 17.1288 26.636 17.438 26.0467 18.5154C25.5374 19.4432 25.1778 20.1714 24.9581 20.6901C24.7484 21.1889 24.5886 21.578 24.4887 21.8473C24.3788 22.1366 24.2989 22.4459 24.249 22.7651C24.1791 23.1641 24.259 23.5831 24.4887 24.032C24.6485 24.3413 24.8382 24.6805 25.1978 24.7204C25.2178 24.7204 25.2377 24.7204 25.2677 24.7204C25.4375 24.7204 25.5973 24.6406 25.7071 24.5109C25.817 24.3812 25.9368 24.1817 26.0667 23.8924C26.1765 23.653 26.4961 22.9447 27.0155 21.7276C27.5148 20.5605 27.9043 19.7724 28.164 19.3833C28.4536 18.9444 28.7732 18.3558 29.1128 17.6076C29.4424 16.9093 29.8419 16.1911 30.3213 15.4628C30.7907 14.7446 31.3599 14.0263 32.0091 13.318C32.9279 12.3304 33.0977 12.1309 33.1576 12.0611C33.2775 11.9114 33.3873 11.692 33.5072 11.3528C33.647 10.9537 33.647 10.5846 33.4972 10.2754C33.2875 9.86638 32.9579 9.72672 32.7182 9.68682Z" fill="black" />
                                </svg>
                                <span class="number-shadow">
                                    3.
                                </span>
                            </div>
                            <div class="box pt-xxl-20 pt-10">
                                <h4 class="n4-clr mb-xxl-4 mb-3 fw_700">
                                    PROCEED TO CHECK OUT
                                </h4>
                                <p class="fs18 n3-clr">
                                    and wait for the winners to be
                                    <span class="d-block">
                                        announced to find out if you’ve won.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Work Body-->
        </section>











<?php
    }
}
