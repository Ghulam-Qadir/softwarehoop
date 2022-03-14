<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softwarehoop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php 
$homepagelink = get_option("siteurl");
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--  Main Wrap  -->
    <div id="main-wrap">
        <!--  Header & Menu  -->
        <!--  class: fixed, bg, white, transparent  -->
        <header id="header">
            <!--  padding-sm, padding-md, padding-lg  -->
            <div class="wrap-header--padding-md">
                <nav class="main-navigation">
                    <!--  Header Logo  -->
                    <!--  class: height-sm, height-md, height-lg  -->
                    <div id="logo" class="height-lg">
                        <?php
                        if ( has_custom_logo() ) {
                          echo ' <a class="navbar-brand" href="'.$homepagelink.'">
                          <picture class="colored">
                          <img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">
                          </picture>
                          </a>';
                      } else {
                          echo '<a class="navbar-brand" href="'.$homepagelink.'">
                          <h1>' . get_bloginfo('name') . '</h1>
                          </a>';
                      } 
                      ?>

                  </div>
                  <!--  END Header Logo  -->
<?php 
 wp_nav_menu( 
               array( 
                  'menu'  => 'ul',
                  'container'            => '',
                  'container_class'      => '',
                  'container_id'         => '',
                  'container_aria_label' => '',
                  'menu_class'           => 'menu',
                  'menu_id'              => 'main-menu',
                  'echo'                 => true,
                  'fallback_cb'          => 'wp_page_menu',
                  'before'               => '<li>',
                  'after'                => '</li>',
                  'link_before'          => '',
                  'link_after'           => '',
                  'items_wrap'           => '<div id="%1$s" class="%2$s" aria-expanded="false" role="navigation"><div class="menu-holder" data-hidden="lg"><ul>%3$s</ul></div></div>',
                  'item_spacing'         => 'preserve',
                  'depth'                => 0,
                  'walker'               => new softwarehoop_desktop_menu_walker(),
                  'theme_location'       => 'main-menu',
              )
          );
 ?>

                  <!--  Menu  -->
                  <div id="main-menu" aria-expanded="false" role="navigation">
                    <div class="menu-holder" data-hidden="lg">
                        <ul>
                            <!--  Dropdown Menu  -->
                            <!--  class: shadow, round, icon, bgitems  -->
                            <li class="dropdown-parent--shadow--round--icon--bgitems">
                                <!--  class: active  -->
                                <a href="javascript:void(0)" class="active">Home</a>
                                <div class="dropdown-inner">
                                    <ul>
                                        <li><a href="index.html">Home Agency</a></li>
                                        <li><a href="index-saas.html">Home Saas</a></li>
                                        <li><a href="index-corporate.html">Home Corporate</a></li>
                                        <li><a href="index-minimal.html">Home Minimal</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!--  END: Dropdown Menu  -->
                            
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                    <!--  Menu Cta  -->
                    <div class="cta">
                        <a href="#" class="btn--medium--round--border">buy now</a>
                    </div>
                    <!--  END Menu Cta  -->
                    <!--  Hamburger Menu  -->
                    <div class="menu-button" data-visible="lg">
                        <div class="icons">
                            <span class="bar bar-1"></span>
                            <span class="bar bar-2"></span>
                            <span class="bar bar-3"></span>
                        </div>
                    </div>
                    <!--  END: Hamburger Menu  -->
                </div>
                <!--  Mobile Menu  -->
                <div id="mobile-menu" data-visible="lg" aria-expanded="false" role="navigation">
                    <!-- class: -bg -->
                    <div class="mobile-wrap">
                        <!-- class: -dotted, -border -->
                        <div class="main-links--border col-12">
                            <ul>
                                <li class="dropdown-parent--icon" aria-expanded="false">
                                    <a href="javascript:void(0)">Home</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="index.html">Home Agency</a></li>
                                            <li><a href="index-saas.html">Home Saas</a></li>
                                            <li><a href="index-corporate.html">Home Corporate</a></li>
                                            <li><a href="index-minimal.html">Home Minimal</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-parent--icon" aria-expanded="false">
                                    <a href="javascript:void(0)">About</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="about.html">About Classic</a></li>
                                            <li><a href="about-corporate.html">About Corporate</a></li>
                                            <li><a href="about-agency.html">About Agency</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-parent--icon" aria-expanded="false">
                                    <a href="javascript:void(0)">Pages</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="plans.html">Plans</a></li>
                                            <li><a href="project.html">Project 1</a></li>
                                            <li><a href="project-2.html">Project 2</a></li>
                                            <li><a href="post.html">Post</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="privacy.html">Privacy Policy</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                            <li><a href="style-guide.html">Style Guide</a></li>
                                            <li><a href="plugins.html">Plugins</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown-parent--icon" aria-expanded="false">
                                    <a href="javascript:void(0)">Blog</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="blog.html">Blog Classic</a></li>
                                            <li><a href="blog-featured.html">Blog Featured</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                </li>
                                <li class="dropdown-parent--icon" aria-expanded="false">
                                    <a href="javascript:void(0)">Contacts</a>
                                    <div class="dropdown-inner">
                                        <ul>
                                            <li><a href="contact.html">Contacts Classic</a></li>
                                            <li><a href="contact-maps.html">Contacts Maps</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  END Mobile Menu  -->
            </nav>
        </div>
    </header>
        <!--  END Header & Menu  -->