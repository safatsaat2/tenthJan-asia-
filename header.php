<?php
//Header File
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php
wp_head();
?>
</head>

<style>
      body {
        height: 500vh;
        box-sizing: border-box;
      }

      /* Styling for the navbar wrapper */
      .srs_nav_wrapper {
        position: fixed;
        z-index: 99;
        width: 100%;
        background: #e8e6e6;
      }

      /* Styling for the main navbar container */
      .srs_navbar_ptc {
        max-width: 1800px;
        width: 100%;
        margin: 0 auto;
      }
      .srs_navbar_ptc a {
        text-decoration: none;
      }

      .srs_container_navbar {
    gap: 80px;
    display: grid;
    grid-template-columns: 40% 40% 10%;
}
      /* Styling for the left side of the navbar */
      .srs_container_navbar .srs_first_part {
        display: flex;
        align-items: center;
        column-gap: 16px;
      }

      /* Styling for the heading in the left side */
      .srs_container_navbar .srs_first_part .srs_heading {
        font-size: 25px;
        line-height: 38px;
        color: #1c2a44;
        font-family: "poppins", sans-serif;
        margin: 0;
        font-weight: 700;
      }

      /* Styling for the subheading in the left side */
      .srs_container_navbar .srs_first_part .srs_sub_heading {
        font-size: 16px;
        line-height: 22px;
        color: #ff6d00;
        font-family: "poppins", sans-serif;
        margin: 10px 0 0 0;
        font-weight: 700;
      }

      /* Styling for the right side of the navbar */
      .srs_container_navbar .srs_second_part {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        row-gap: 20px;
      }
      /* Styling for the upper part of the right side */
      .srs_container_navbar .srs_second_part_upper {
        width: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 40px;
      }
      /* Styling for the links in the upper part */
      .srs_container_navbar .srs_second_part_upper a {
        padding: 8px;
        border-radius: 10px;
        color: #1c2a44;
        background: #fa852f;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
      }
      /* Styling for the paragraph in the upper part */
      .srs_container_navbar .srs_second_part_upper p {
        font-family: "suez one", serif;
        font-size: 16px;
        margin: 0;
        font-weight: 700;
      }
      /* Styling for the number wrapper */
      .srs_container_navbar .srs_number_wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
      }
      /* Styling for the SVG in the number wrapper */
      .srs_container_navbar .srs_number_wrapper svg {
        fill: #fa852f;
      }
      /* Styling for the paragraph in the number wrapper */
      .srs_container_navbar .srs_number_wrapper p {
        font-size: 16px;
        line-height: 22px;
        color: #1c2a44;
        font-family: "secular one", sans-serif;
        margin: 10px 0 0 0;
        font-weight: 700;
      }
      .srs_nav_wrapper .list-group-item input{
    display:block;
}
.srs_nav_wrapper .list-group-item label{
    background: #fff;
}
.srs_navbar_ptc ul.topmenu.drop-menu.drop-menu3 {
    width: 70%;
    left: 150px;
}

      /* right side css ends */

      /* Menu css  starts*/
      /* Media query for responsive design between 767px and 1150px */

      @media only screen and (max-width: 1150px) and (min-width: 767px) {
        .srs_container_navbar {
          padding: 0 20px;
        }
        .srs_container_navbar .srs_first_part img {
          max-width: 75%;
        }
        .srs_container_navbar .srs_first_part {
          column-gap: 0;
        }
        .srs_container_navbar .srs_first_part .srs_heading {
          font-size: 18px;
          line-height: 21px;
        }
        .srs_container_navbar .srs_first_part .srs_sub_heading {
          font-size: 14px;
          line-height: 21px;
        }
        .srs_container_navbar .srs_second_part_upper {
          flex-direction: column;
          gap: 20px;
        }
        .srs_navbar_ptc .menu-btn {
          position: fixed;
          z-index: 99;
          top: 50px;
          right: 30px;
        }
        .srs_navbar_ptc nav .wrapper {
          position: static !important;
        }
        .srs_container_navbar {
          position: relative;
          padding-right: 60px;
        }
        .srs_navbar_ptc .nav-links {
          margin-top: -20px;
        }
        .srs_nav_wrapper {
    position: relative;
    z-index: 111111111111111111111;
}
      }

      /* Styling for the main navbar container */

      .srs_navbar_ptc nav .wrapper {
        position: relative;
        padding: 10px 0px;
        line-height: 10px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      /* Styling for the link on hover */
      .srs_navbar_ptc nav li:hover > a {
        color: #242526 !important;
      }
      /* Styling for the logo link */
      .srs_navbar_ptc .wrapper .logo a {
        color: #fa852f;
        /* font-size: 30px; */
        font-weight: 600;
        text-decoration: none;
      }
      /* Styling for the navigation links */
      .srs_navbar_ptc .wrapper .nav-links {
        display: inline-flex;
      }
      /* Styling for the first navigation link */
      .srs_navbar_ptc .wrapper .first {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
      }
      /* Styling for the last navigation link */
      .srs_navbar_ptc .wrapper .last {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        border-right: 1px solid transparent;
      }
      /* Styling for the navigation links */
      .srs_navbar_ptc .nav-links {
        margin-left: -40px;
      }
      .srs_navbar_ptc .nav-links li {
        list-style: none;
      }
      /* Styling for the navigation link anchor */
      .srs_navbar_ptc .nav-links li a {
        border-right: 1px solid #242526;
        height: 30px;
        color: #344054;
        background: rgb(250, 133, 47);
        background: linear-gradient(
          180deg,
          rgba(250, 133, 47, 1) 0%,
          rgba(214, 96, 9, 1) 100%
        );
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: 800;
        padding: 5px 15px;
        /* border-radius: 5px; */
        transition: all 0.3s ease;
      }
      .srs_navbar_ptc .nav-links li ul a {
        border: none;
      }
      .srs_navbar_ptc .nav-links li label {
        height: 30px;
        color: #344054;
        background: rgb(250, 133, 47);
        background: linear-gradient(
          180deg,
          rgba(250, 133, 47, 1) 0%,
          rgba(214, 96, 9, 1) 100%
        );
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
        font-weight: 600;
        padding: 5px 15px;
        /* border-radius: 5px; */
        transition: all 0.3s ease;
      }
      .srs_navbar_ptc .nav-links li a:hover {
        background: linear-gradient(
          180deg,
          rgba(255, 255, 255, 1) 0%,
          rgba(238, 238, 238, 1) 100%
        );
      }
      .srs_navbar_ptc .nav-links .mobile-item {
        display: none;
      }
      .srs_navbar_ptc .nav-links .drop-menu {
        position: absolute;
        background: #fff;
        width: auto;
        line-height: 45px;
        opacity: 0;
        border-radius: 5px;
        visibility: hidden;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
      }
      .srs_navbar_ptc .nav-links li:hover .drop-menu {
        transition: all 0.3s ease;
        top: 35px;
        opacity: 1;
        visibility: visible;
      }
      .srs_navbar_ptc .drop-menu li a {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0px;
        padding: 0 5px;
        background: white;
      }

      .srs_navbar_ptc .wrapper .btn {
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        display: none;
      }
      .srs_navbar_ptc .wrapper .btn.close-btn {
        position: absolute;
        right: 30px;
        top: 10px;
      }

      /* Tab responsive css starts */

      @media screen and (max-width: 1024px) {
        .srs_navbar_ptc {
          position: absolute;
          /* left: -25px;
    top: -180px; */
        }

        .srs_navbar_ptc .close-btn {
          margin-top: 10px;
        }

        .srs_navbar_ptc .wrapper .btn {
          display: block;
        }
        .srs_navbar_ptc .wrapper .nav-links {
          position: fixed;
          height: 100vh;
          width: 100%;
          max-width: 350px;
          top: 0;
          left: -100%;
          background: #fff;
          display: block;
          padding: 80px 0px;
          line-height: 50px;
          overflow-y: auto;
          box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.18);
          transition: all 0.3s ease;
        }
        /* custom scroll bar */
        ::-webkit-scrollbar {
          width: 10px;
        }
        ::-webkit-scrollbar-track {
          background: #fff;
        }
        ::-webkit-scrollbar-thumb {
          background: linear-gradient(
            180deg,
            rgba(255, 255, 255, 1) 0%,
            rgba(238, 238, 238, 1) 100%
          );
        }
        .srs_navbar_ptc #menu-btn:checked ~ .nav-links {
          left: 0%;
        }
        .srs_navbar_ptc #menu-btn:checked ~ .btn.menu-btn {
          display: none;
        }
        .srs_navbar_ptc #close-btn:checked ~ .btn.menu-btn {
          display: block;
        }
        /* .nav-links li{
    margin: 15px 10px;
  } */
        .srs_navbar_ptc .nav-links {
          background: #fa852f !important;
        }
        .srs_navbar_ptc .nav-links li a {
          padding: 0 0px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 20px;
        }
        .srs_navbar_ptc .nav-links .drop-menu {
          position: static;
          text-align: center;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          opacity: 1;
          top: 65px;
          visibility: visible;
          padding-left: 20px;
          max-height: 0px;
          overflow: hidden;
          text-wrap: wrap;
          line-height: 31px;
          box-shadow: none;
          transition: all 0.3s ease;
        }
        .srs_navbar_ptc #showDropServices:checked ~ .drop-menu1 {
          max-height: 100%;
        }
        .srs_navbar_ptc #showDropCourses:checked ~ .drop-menu2 {
          max-height: 100%;
        }
        .srs_navbar_ptc #showDropMore:checked ~ .drop-menu3 {
          max-height: 100%;
        }
        .srs_navbar_ptc .nav-links .desktop-item {
          display: none;
        }
        .srs_navbar_ptc .nav-links .mobile-item {
          display: flex;
          align-items: center;
          justify-content: center;
          color: #242526;
          font-size: 20px;
          font-weight: 500;

          cursor: pointer;
          border-radius: 5px;
          transition: all 0.3s ease;
        }
        .srs_navbar_ptc .nav-links .mobile-item:hover {
          background: linear-gradient(
            180deg,
            rgba(255, 255, 255, 1) 0%,
            rgba(238, 238, 238, 1) 100%
          );
        }
        .srs_navbar_ptc .drop-menu li {
          margin: 0;
        }
        .srs_navbar_ptc .drop-menu li a {
          border-radius: 5px;
          font-size: 14px;
        }
        .srs_navbar_ptc .menu-btn {
          background: #ff6d00 !important;
        }
        .srs_navbar_ptc .btn {
          background: transparent;
        }
      }

      /* Tab responsive css ends */
      .srs_navbar_ptc nav input {
        display: none;
      }
      /* Mobile responsive css starts */
      @media (max-width: 767px) {
        .srs_container_navbar {
          flex-direction: column;
        }
        .srs_container_navbar .srs_first_part {
          flex-direction: column;
        }
        .srs_container_navbar .srs_first_part .srs_sub_heading {
          text-align: center;
        }
        .srs_container_navbar .srs_first_part img {
          max-width: 50%;
        }
        .srs_container_navbar .srs_first_part .srs_heading {
          font-size: 18px;
          line-height: 21px;
        }
        .srs_container_navbar .srs_first_part .srs_sub_heading {
          margin-top: 6px;
          font-size: 12px;
          line-height: 21px;
          text-align: center;
        }
        .srs_navbar_ptc .srs_first_part a {
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .srs_container_navbar .srs_second_part_upper {
          justify-content: space-between;
          gap: 0;
        }
        .srs_container_navbar .srs_second_part_upper a p {
          font-size: 12px;
        }
        .srs_container_navbar .srs_second_part_upper a {
          padding: 4px;
        }
        .srs_container_navbar .srs_number_wrapper p {
          font-size: 12px;
        }
        .srs_container_navbar {
          padding: 0 20px;
          align-items: normal;
        }
        .srs_container_navbar .srs_second_part {
          align-items: normal;
        }
        .srs_navbar_ptc .menu-btn {
          position: fixed;
          top: 10px;
          left: 30px;
        }
        .srs_navbar_ptc nav .wrapper {
          position: static !important;
        }
        .srs_container_navbar {
          position: relative;
        }
        .srs_navbar_ptc .nav-links {
          margin-top: -20px;
        }
        .srs_navbar_ptc .wrapper .nav-links {
          max-width: 100%;
        }
        .srs_navbar_ptc .nav-links li ul li a {
          width: auto;
          margin: 0 auto;
        }
        .srs_nav_wrapper {
    position: relative;
    z-index: 111111111111111111111;
}
      }

      /* Mobile responsive css ends */

      /* Menu css ends */
    </style>

<body <?php body_class(); ?>>
<div id="global" class="global">
    <?php
        get_template_part('mobile','sidebar');
    ?>
    <div class="pusher">
        <?php
            $fix=vibe_get_option('header_fix');
        ?>

<header class="srs_nav_wrapper">
      <div class="srs_navbar_ptc">
        <div class="srs_container_navbar">
          <div class="srs_first_part">
            <a
              class="img-link"
              href="https://iomhptc.wpenginepowered.com/ptc-home-srs"
            >
              <img
                src="https://iomhptc.wpenginepowered.com/wp-content/uploads/2024/01/7959b0_937ea81b514644488b86ea373c1089b3mv2.webp"
                alt="logo"
              />
            </a>
            <a href="https://iomhptc.wpenginepowered.com/ptc-home-srs">
              <div>
                <p class="srs_heading">Prudence Training & Exam Centre</p>
                <p class="srs_sub_heading">
                  Health, Safety & Environmental Consultants
                </p>
              </div>
            </a>
          </div>
          <div class="srs_second_part">
            <div class="srs_second_part_upper">
              <div class="srs_number_wrapper">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  data-bbox="28 20 144 160"
                  viewBox="0 0 200 200"
                  height="28"
                  width="28"
                  data-type="shape"
                >
                  <g>
                    <path
                      d="M172 172.105l-.065-83.094a7.89 7.89 0 0 0-2.635-5.88l-64.103-57.226a7.88 7.88 0 0 0-10.499.001L30.634 83.128A7.891 7.891 0 0 0 28 89.013v83.098A7.887 7.887 0 0 0 35.884 180h34a7.887 7.887 0 0 0 7.884-7.889v-44.828a7.887 7.887 0 0 1 7.884-7.889h28.667a7.887 7.887 0 0 1 7.884 7.889v44.828a7.887 7.887 0 0 0 7.884 7.889h34.029c4.357 0 7.887-3.536 7.884-7.895z"
                    ></path>
                    <path
                      d="M132.069 31.41l31.357 28.145V31.41c0-6.302-5.105-11.41-11.403-11.41h-8.551c-6.298 0-11.403 5.108-11.403 11.41z"
                    ></path>
                  </g>
                </svg>
                <p>Company number 13914828</p>
              </div>
              <a href="https://iomhptc.wpenginepowered.com/ptc-contact-us-srs/">
                <p>CONTACT US</p>
                <i aria-hidden="true" class="fas fa-chevron-right"></i>
              </a>
            </div>
            <nav>
              <div class="wrapper">
                <input type="radio" name="slider" id="menu-btn" />
                <input type="radio" name="slider" id="close-btn" />
                <ul class="nav-links">
                  <label for="close-btn" class="btn close-btn"
                    ><i class="fas fa-times"></i
                  ></label>
                  <li>
                    <a
                      class="first"
                      href="https://iomhptc.wpenginepowered.com/ptc-home-srs"
                      >Home</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.prudencetrainingcentre.com/faq"
                      class="desktop-item"
                      >Our Services</a
                    >
                    <input type="checkbox" id="showDropServices" />
                    <label for="showDropServices" class="mobile-item"
                      >Our Services</label
                    >
                    <ul class="drop-menu drop-menu1">
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/building-compliance-inspection-and-audit"
                          >Building Compliance Inspection and Audit</a
                        >
                      </li>
                      <li>
                        <a href="https://www.prudencetrainingcentre.com/about"
                          >Health Care Sector</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/health-and-safety-training"
                          >Health & Safety Training for Schools</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/contract"
                          >Health & Safety Training 4 Small Business
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a
                      href="https://iomhptc.wpenginepowered.com/courses/"
                      class="desktop-item"
                      >Courses</a
                    >
                    <input type="checkbox" id="showDropCourses" />
                    <label for="showDropCourses" class="mobile-item"
                      >Courses</label
                    >
                    <ul class="drop-menu drop-menu2">
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/business-skills"
                          >Business Skills</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/health-safety"
                          >Health & Safety</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/health-social-care"
                          >Health and Social Care</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="https://www.prudencetrainingcentre.com/blog-1"
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://iomhptc.wpenginepowered.com/ptc-contact-us-srs/"
                      >Contact</a
                    >
                  </li>
                  <li>
                    <a href="#" class="desktop-item last">More</a>
                    <input type="checkbox" id="showDropMore" />
                    <label for="showDropMore" class="mobile-item">More</label>
                    <ul class="drop-menu drop-menu3">
                    <li>
                        <a
                          href="https://iomhptc.wpenginepowered.com/ptc-about-us-srs/"
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://www.prudencetrainingcentre.com/testimony"
                          >Testimony</a
                        >
                      </li>
                    </ul>
                    

                    
                  </li>
                </ul>
                <label for="menu-btn" class="btn menu-btn"
                  ><i class="fas fa-bars"></i
                ></label>
              </div>
            </nav>
          </div>
          <div class="srs_third_part">
          <ul class="topmenu">
                        <?php do_action('wplms_header_top_login'); ?>
                        <?php
                        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed( 'woocommerce/woocommerce.php'))) { global $woocommerce;
                        ?>
                            <li>
                                <a class=" vbpcart">
                                    <img src="https://iomh.co.uk/wp-content/uploads/2023/10/bag-2.png" alt=""> 
                                    <span class="arm-cart-text">Cart</span>
                                    <!-- <span class="fa fa-shopping-basket"> -->
                                        <?php echo (($woocommerce->cart->cart_contents_count)?'<em>'.$woocommerce->cart->cart_contents_count.'</em>':''); ?>
                                    <!-- </span> -->
                                </a>
                            <div class="woocart"><div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div></div>
                            </li>
                        <?php
                        }
                        if ( function_exists('bp_loggedin_user_link') && is_user_logged_in() ) :
                        ?>
                        <li><a href="<?php bp_loggedin_user_link(); ?>" class="smallimg vbplogin"><?php $n=vbp_current_user_notification_count(); echo ((isset($n) && $n)?'<em></em>':''); bp_loggedin_user_avatar( 'type=full' ); ?><span><?php bp_loggedin_user_fullname(); ?></span></a></li>
                        <?php
                        else:
                        ?>
                        <li><a href="#login" rel="nofollow" class="arm-login vbplogin">
                            <span class="arm-login-text"><?php _e('LOGIN','vibe'); ?></span>
                            <i class="fa fa-user-o arm-user-icon-mob" aria-hidden="true"></i>
                        </a>
                            
                        </li>
                        <?php
                        endif;    
                        ?>
                        
                    </ul>
                    <?php
                        $style = vibe_get_login_style();
                        if(empty($style)){
                            $style='default_login';
                        }
                    ?>
                <div id="vibe_bp_login" class="<?php echo vibe_sanitizer($style,'text'); ?>">
                <?php
                    vibe_include_template("login/$style.php");
                 ?>
          </div>
        </div>
      </div>
    </header>