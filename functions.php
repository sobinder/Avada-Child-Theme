<?php

function theme_enqueue_styles() {

  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function avada_lang_setup() {

  $lang = get_stylesheet_directory() . '/languages';

  load_child_theme_textdomain( 'Avada', $lang );

}

add_action( 'after_setup_theme', 'avada_lang_setup' );


//JC: ADDS LEGAL DISCLAIMER AT THE BOTTOM OF EVERY PAGE AFTER THE MAIN BODY CONTENT AND JUST BEFORE THE FOOTER CONTENT.
add_action( 'avada_after_main_container', 'add_yct_disclaimer' );

function add_yct_disclaimer() {
  echo '<!-- Footer Disclaimer - Content managed in child theme -->
  <div class="fusion-row" style="border-top: solid 1px #e9eaee" id="yct-disclaimer">
  <section id="content" style="width: 100%;">
      <div class="post-content">
        <div class="fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: #ffffff;background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
          <div class="fusion-builder-row fusion-row ">
            <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1 fusion-builder-column-1 fusion-one-full fusion-column-first fusion-column-last 1_1" style="margin-top:0px;margin-bottom:20px; margin-top:20px">
              <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
                <div class="fusion-text"><span>YouCanTrade is an online media publication service which provides investment educational content, ideas and demonstrations, and does not provide investment or trading advice, research or recommendations. <a href="/important-information">Click here</a> to read important disclosure, disclaimer and assumption of risk information. Active trading generally, and options, futures and digital assets trading in particular, may not be suitable for all investors. Past performance, whether actual or simulated, does not guarantee or predict future results.</span> </div>
                <div class="fusion-clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>

<div class="fusion-row" style="border-top: solid 1px #e9eaee; display:none" id="ts-disclaimer">
  <section id="content" style="width: 100%;">
      <div class="post-content">
        <div class="fusion-fullwidth fullwidth-box nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: #ffffff;background-position: center center;background-repeat: no-repeat;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
          <div class="fusion-builder-row fusion-row ">
            <div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_1 fusion-builder-column-1 fusion-one-full fusion-column-first fusion-column-last 1_1" style="margin-top:0px;margin-bottom:20px; margin-top:20px">
              <div class="fusion-column-wrapper" style="padding: 0px 0px 0px 0px;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;" data-bg-url="">
                <div class="fusion-text"><span>TradeStation Securities disclaimer goes here.</span> </div>
                <div class="fusion-clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>



';
}


//JC: ADDS LEGAL DISCLAIMER AT THE BOTTOM OF THE WORDPRESS LOGIN PAGE
add_action( 'login_footer', 'add_yct_disclaimer_login' );

function add_yct_disclaimer_login( $message ) {
	echo '</div><div style="margin: auto; margin-top: 35px; width: 320px;"><div style="color: #747474;">YouCanTrade is an online media publication service which provides investment educational content, ideas and demonstrations, and does not provide investment or trading advice, research or recommendations. <a href="/important-information">Click here</a> to read important disclosure, disclaimer and assumption of risk information.  Active trading generally, and options, futures and digital assets trading in particular, may not be suitable for all investors. Past performance, whether actual or simulated, does not guarantee or predict future results.</div></div>';
}
function register_yct_menus() {
  register_nav_menus(
    array(
      'top-nav-menu' => __( 'yct-zero-nav' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_yct_menus' );

