<?php
/**
* Template Name: Home Template
* @package WordPress
*/
get_header();
/* Slider Section acf feilds */
$app_path = get_stylesheet_directory_uri();
$slider_image = get_field('slider_image');
$slider_title = get_field('slider_title');
$slider_subtitle = get_field('slider_subtitle');
$slider_button = get_field('slider_button');
/* Intro Section acf feilds */
$intro_section_title = get_field( 'intro_section_title' );
$intro_section_subtitle = get_field( 'intro_section_subtitle' );
/* Info about us Section acf feilds */
$info_section_image = get_field( 'info_section_image' );
$info_section_title = get_field( 'info_section_title' );
$info_section_subtitle = get_field( 'info_section_subtitle' );
$info_section_description = get_field( 'info_section_description' );
$info_section_link = get_field( 'info_section_link' );
/* Services Section acf feilds */
$services_section_title = get_field( 'services_section_title' );
$services_section_subtitle = get_field( 'services_section_subtitle' );
$services_section_button = get_field( 'services_section_button' );
/* Services Section acf feilds */
$video_section_thumbnail = get_field( 'video_section_thumbnail' );
$video_section_youtube_link = get_field( 'video_section_youtube_link' );
/* Portfolio section */
$portfolio_section_title = get_field( 'portfolio_section_title' );
$portfolio_section_subtitle = get_field( 'portfolio_section_subtitle' );
$portfolio_section_link = get_field( 'portfolio_section_link' );
/* Testimonial */
$testimonial_author_image = get_field( 'testimonial_author_image' );
$testimonial_author_name = get_field( 'testimonial_author_name' );
$testimonial_section_designation = get_field( 'testimonial_section_designation' );
$testimonial_author_message = get_field( 'testimonial_author_message' );
$testimonial_author_logo = get_field( 'testimonial_author_logo' );
/* CTA Section */
$call_to_action_title = get_field( 'call_to_action_title', 'options' );
$call_to_action_description = get_field( 'call_to_action_description', 'options' );
$call_to_action_button = get_field( 'call_to_action_button', 'options' );
?>
<!--Page Header-->
<!--class: image, round, hfixedlg, hfixedmd, hfixedsm  -->
<div class="page-header--image" data-padding data-overlay>
    <!--  you can set a background instead of an img: ex (<div class="imagebg" style="background-image: url(assets/img/header-home@2x.jpg);">)  -->
        <div class="imagebg">
            <img data-unveil src="" data-src="<?=($slider_image) ? $slider_image['url'] : $app_path."/assets/img/header-home.jpg";?>" data-src-retina="assets/img/header-home@2x.jpg" alt="<?php echo $slider_image['alt'];?>">
        </div>
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-12 col-lg-6 col-xl-5">
                    <div class="sectiontitle-element--light">
                        <h1 class="big"><?=($slider_title) ? esc_html($slider_title) : "The quickest way to create your website";?></h1>
                        <p><?=($slider_subtitle) ? esc_html($slider_subtitle) : "User experience business-to-business ramen pitch infrastructure seed money analytics channels burn rate";?></p>
                        <?php if ($slider_button):
                            echo "<a href='{$slider_button['url']}' class='btn--big--round--border--light'>{$slider_button['title']}</a>";
                        else:
                            echo "<a '#' class='btn--big--round--border--light'>Purchase</a>";
                        endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END Page Header  -->
    <!--  Page Content  -->
    <div class="page-content">
        <!--  Intro Section  -->
        <section data-padding>
            <div class="container">
                <div data-aos="fade-up" class="row" data-padding="xstop">
                    <div class="col-12">
                        <div class="sectiontitle-element--center">
                            <span class="toptitle"><?=($intro_section_subtitle) ? esc_html($intro_section_subtitle) : "What We Do";?></span>
                            <h2><?=($intro_section_title) ? esc_html($intro_section_title) : "We design & build brands, campaigns & digital projects for businesses";?></h2>
                        </div>
                    </div>
                </div>
                <div class="row" data-padding="xstop">
                    <?php
                    if ( have_rows( 'info_section' ) ) :
                        while ( have_rows( 'info_section' ) ) : the_row();
                           $info_box_icon = get_sub_field( 'info_box_icon' );
                           $info_box_title = get_sub_field( 'info_box_title' );
                           $info_box_description = get_sub_field( 'info_box_description' );
                           $info_box_link = get_sub_field( 'info_box_link' );
                           ?>
                           <div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-4">
                            <div class="icon-element--round--box--border">
                                <div class="info">
                                    <div class="icon">
                                        <?php if ($info_box_icon): 
                                            echo "<i class='ilight feather {$info_box_icon}'></i>";
                                        else:
                                            echo "<i class='ilight feather icon-edit-2'></i>";
                                        endif; 
                                        ?>
                                    </div>
                                    <div class="text">
                                        <h6><?=($info_box_title) ? esc_html($info_box_title) : "Branding";?></h6>
                                        <p><?=($info_box_description) ? esc_html($info_box_description) : "  Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quia culpa sed, ad libero, eius perferendis!";?></p>
                                        <?php if ($info_box_link):
                                            echo "<a href='{$info_box_link['url']}' class='simple--arrow'>{$info_box_link['title']}</a>";
                                        else: 
                                            echo '<a href="#" class="simple--arrow">learn more</a>';
                                        endif 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; 
                    else: ?>
                        <div data-aos="fade-up" data-aos-delay="100" class="col-12 col-md-4">
                            <div class="icon-element--round--box--border">
                                <div class="info">
                                    <div class="icon"><i class="ilight feather icon-edit-2"></i></div>
                                    <div class="text">
                                        <h6>Branding</h6>
                                        <p>Social media advisor validation infographic stock launch party customer supply chain product management</p>
                                        <a href="#" class="simple--arrow">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!--  END Intro Section  -->
        <!--  Separator  -->
        <section data-aos="zoom-in" data-padding="bottom">
            <div class="container">
                <div class="row" data-padding="xs">
                    <div class="col-12">
                        <div class="separator-element--lg--center"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--  END: Separator  -->
        <!--  Info Section  -->
        <section data-padding="bottom">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div data-aos="zoom-in" class="col-12 col-lg-5">
                        <div class="square-element">
                            <div class="info">
                                <div class="image">
                                    <img data-unveil src="#" data-src="<?=($info_section_image) ? $info_section_image['url'] : $app_path."/assets/img/homeagency-section-1.png";?>"  alt="<?php echo $info_section_image['alt'];?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-in" data-aos-delay="200" class="col-12 col-lg-6">
                        <div class="sectiontitle-element">
                            <span class="toptitle"><?=($info_section_subtitle) ? esc_html($info_section_subtitle) : "About Us";?></span>
                            <h2><?=($info_section_title) ? esc_html($info_section_title) : "We equip growing companies with outstanding digital products and experiences.";?></h2>
                            <p><?=($info_section_description) ? esc_html($info_section_description) : "Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dicta, et, nam. Et hic mollitia alias inventore magnam itaque beatae, atque dolores amet libero earum quos animi dolorum accusantium illo omnis?";?></p>
                            <?php if ($info_section_link):
                                echo "<a href='{$info_section_link['url']}' class='btn--big--arrow--round'>{$info_section_link['title']}</a>";
                            else:
                                echo "<a '#' class='btn--big--arrow--round'>Learn More</a>";
                            endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  END: Info Section  -->
        <!--  List Section  -->
        <section data-padding="top" data-bg="grey">
            <div class="container">
                <div data-aos="fade-up" class="row">
                    <div class="col-12">
                        <div class="sectiontitle-element--center">
                            <span class="toptitle"><?=($services_section_subtitle) ? esc_html($services_section_subtitle) : "Our Services";?></span>
                            <h2><?=($services_section_title) ? esc_html($services_section_title) : "We build digital products from idea to design, development to marketing";?></h2>
                            <?php if ($services_section_button):
                                echo "<a href='{$services_section_button['url']}' class='btn--big--arrow--round'>{$services_section_button['title']}</a>";
                            else: 
                                echo '<a href="#" class="btn--big--arrow--round">See more</a>';
                            endif 
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row" data-padding>
                    <?php
                    if ( have_rows( 'services_section_list_box' ) ) : ?>
                     <?php while ( have_rows( 'services_section_list_box' ) ) : the_row(); ?>
                        <?php 
                        $services_section_list_title = get_sub_field( 'services_section_list_title' ); 
                        ?>
                        <div data-aos="fade-in" data-aos-delay="100" class="col-12 col-xs-4 col-sm-4">
                            <div class="list-element--plus">
                                <p class="md f500"><?=($services_section_list_title) ? esc_html($services_section_list_title) : "Mobile App Development";?></p>
                                <?php
                                if ( have_rows( 'services_section_list' ) ) : ?>
                                 <ul>
                                     <?php while ( have_rows( 'services_section_list' ) ) : the_row(); ?>
                                         <li><?php the_sub_field( 'services_section_list_text' ); ?></li>
                                     <?php endwhile; ?>
                                 </ul>
                             <?php endif; 
                             ?>
                         </div>
                     </div>
                 <?php endwhile; ?>
                 <?php else: ?>
                    <div data-aos="fade-in" data-aos-delay="100" class="col-12 col-xs-4 col-sm-4">
                        <div class="list-element--plus">
                            <p class="md f500">Mobile App Development</p>
                            <ul>
                                <li>iOS</li>
                                <li>Android</li>
                                <li>React Native</li>
                                <li>3DR & VR</li>
                            </ul>
                        </div>
                    </div>
                <?php endif;  ?>
            </div>
        </div>
    </section>
    <!--  END: List Section  -->
    <!--  Video Section  -->
    <section data-bg-top="grey">
        <?php
        $url = $video_section_youtube_link;
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        $youtube_id = $match[1];
        ?>
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="100" class="col-12">
                    <div class="rectangle-element--caption--center--vertical--big">
                        <div class="info">
                            <div class="image">
                                <img data-unveil src="#" data-src="<?=($video_section_thumbnail) ? $video_section_thumbnail['url'] : $app_path."/assets/img/studio-placeholder.jpg";?>" data-src-retina="assets/img/studio-placeholder@2x.jpg" alt="">
                                <div class="icon--xl--white--shadow--round--white"><i class="fas fa-play"></i></div>
                            </div>
                        </div>
                        <a href="javscript:void(0)" class="link yt-video" data-videoID="<?=($youtube_id) ? $youtube_id : 'kW1U-CA5DEI'?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  END: Video Section  -->
    <!--  Portfolio  -->
    <section data-aos="fade" data-padding>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sectiontitle-element--inline align-items-md-end">
                        <div class="wrapper">
                            <span class="toptitle"><?=($portfolio_section_subtitle)?$portfolio_section_subtitle: 'Case Studies'?></span>
                            <h2><?=($portfolio_section_title)?$portfolio_section_title: 'Create and make your dream'?></h2>
                        </div>
                        <!--  Portfolio Nav  -->
                        <div class="wrapper portfolio-wrap">
                            <div class="navigation-element--border--round--light">
                                <div class="navigation justify-content-md-end">
                                    <div class="nav--prev">
                                        <i class="feather icon-arrow-left"></i>
                                    </div>
                                    <div class="nav--next">
                                        <i class="feather icon-arrow-right"></i>
                                    </div>
                                    <?php 
                                    if ($portfolio_section_link):
                                        echo "<a href='{$portfolio_section_link['url']}' class='btn--big--round'>{$portfolio_section_link['title']}</a>";
                                    else:
                                        echo "<a href='portfolio.html' class='btn--big--round'>View all</a>";
                                    endif 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--  END: Portfolio Nav  -->
                    </div>
                </div>
            </div>
            <div class="row" data-padding="xstop">
                <div class="col-12">
                    <div class="portfolio-carousel owl-carousel">
                        <?php
                        $args = array(  
                            'post_type' => 'portfolio',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            'order' => 'ASC',
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                           $featuerd_images_tumbnail = get_the_post_thumbnail_url();
                           ?>
                           <!--  Portfolio Item  -->
                           <div class="square-element--project">
                            <div class="info">
                                <div class="image">
                                    <img class="owl-lazy" src="#" data-src=" <?=($featuerd_images_tumbnail) ? $featuerd_images_tumbnail : $app_path."/assets/img/case-1.jpg";?>" data-src-retina="assets/img/case-1@2x.jpg" alt="">
                                    <div class="icon--br--square--secondary"><i class="feather icon-plus"></i></div>
                                </div>
                                <div class="text">
                                    <h6><?php the_title(); ?></h6>
                                    <p>Branding</p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="link"></a>
                        </div>
                        <!--  END: Portfolio Item  -->
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  END: Portfolio  -->
<!--  Testimonial Section  -->
<section data-padding data-bg="template">
    <div class="container">
        <div class="row align-items-md-center">
            <div data-aos="fade" class="col-md-6">
                <div class="icon-element--testimonial">
                    <div class="info">
                        <div class="text">
                            <p>
                                <?=($testimonial_author_message) ? $testimonial_author_message : "Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quos, fugit vero libero consectetur iusto,";?>
                            </p>
                            <span class="author"><?=($testimonial_author_name) ? $testimonial_author_name : "Author Name";?><em class="meta"><?=($testimonial_section_designation) ? $testimonial_section_designation : "Author Designation";?></em></span>
                            <img class="logo" data-unveil src="#" data-src="<?=($testimonial_author_logo) ? $testimonial_author_logo['url'] : $app_path."/assets/img/logo-placeholder-2.png";?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200" class="col-md-5 offset-md-1">
                <div class="wrapimage-element--square">
                    <img data-unveil src="#" data-src="<?=($testimonial_author_image) ? $testimonial_author_image['url'] : $app_path."/assets/img/author-big.jpg";?>"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--  END: Testimonial Section  -->
<!--  Blog Section  -->
<section data-padding>
    <div class="container">
        <div data-aos="fade" class="row">
            <div class="col-12">
                <div class="sectiontitle-element--inline align-items-md-end">
                    <div class="wrapper">
                        <span class="toptitle">Our blog</span>
                        <h2>Stay updated about all the digital news</h2>
                    </div>
                    <div class="wrapper">
                        <a href="blog.html" class="btn--big--round">View all</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-padding="xstop">
         <?php
        $args = array(  
             'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'order' => 'ASC',
                 );
    $loop = new WP_Query( $args );
     while ( $loop->have_posts() ) : $loop->the_post();
    $user = wp_get_current_user();
    $post_title = get_the_title($loop);
    $post_excerpt = get_the_excerpt();
    $featuerd_images_tumbnail = get_the_post_thumbnail_url();
                           ?>
            <div data-aos="fade" data-aos-delay="100" class="col-12 col-md-4">
                <!--  Single Article  -->
                <article class="rectangle-element--article--wide">
                    <div class="info">
                        <div class="image">
                            <img data-unveil src="#" data-src="<?=($featuerd_images_tumbnail) ? $featuerd_images_tumbnail : $app_path."/assets/img/post-1.jpg";?>" data-src-retina="assets/img/post-1@2x.jpg" alt="">
                        </div>
                        <div class="text">
                            <div class="meta--image">
                                <div class="author--round">
                                    <img data-unveil src="#" data-src="<?=($user) ? get_avatar_url( $user->ID ) : $app_path."/assets/img/author-1.jpg";?>" data-src-retina="assets/img/author-1@2x.jpg" alt="">
                                </div>
                                <div class="tags">
                                    <time class="e-date" datetime="2020-07-05T07:55:21+02:00">5 Luglio 2020</time>
                                    <ul class="categories">
                                        <li><a href="#">Category</a></li>
                                        <li><a href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3><?=($post_title) ? esc_html($post_title) : "User experience business-to-business pitc";?></h3>
                            <p><?=($post_excerpt) ? esc_html($post_excerpt) : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad…";?></p>
                            <a href="" class="simple--underline">Read all</a>
                        </div>
                    </div>
                    <a href="" class="link"></a>
                </article>
                <!--  END: Single Article  -->
            </div>
<?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<!--  END: Blog Section  -->
<!--  CTA Section  -->
<section data-aos="fade" data-padding="xstop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ctabox-element--center--round--light">
                    <div class="text">
                        <h2><?=($call_to_action_title)? esc_html($call_to_action_title):'Interested in working with us?'?></h2>
                        <p><?=($call_to_action_description)? esc_html($call_to_action_description):'Contact us now, and we are ready to do what you want'?></p>
                        <?php if ($call_to_action_button):
                            echo "<a href='{$call_to_action_button['url']}' class='btn--big--border--light--round' target='_self'>{$call_to_action_button['title']}</a>";
                            else: 
                                echo "<a href='#' class='btn--big--border--light--round' target='_self'>Contact Now</a>";
                        endif ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  END: CTA Section  -->
</div>
<!--  END: Page Content  -->
<?php get_footer();?>