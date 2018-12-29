
<!DOCTYPE html>

<html {!! get_language_attributes() !!}>
   <!--<![endif]-->
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />

      <!-- Set the viewport width to device width for mobile -->
      <meta property="og:image" content="../../assets/images/facebook_pic.jpg"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" id="google-fonts-css"  href="http://fonts.googleapis.com/css?family=Roboto%3A400%2C100%2C300%2C500%2C700%2C500italic%2C400italic%2C300italic%2C100italic&#038;ver=4.5.16" type="text/css" media="all" />
      <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/scripts/modernizr.js"></script>

      <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico">
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/assets/images/apple-touch-icon-152x152.png">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon-196x196.png" sizes="196x196">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon-160x160.png" sizes="160x160">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon-96x96.png" sizes="96x96">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon-16x16.png" sizes="16x16">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon-32x32.png" sizes="32x32">
    @php wp_head() @endphp
   </head>

   <body <?php body_class(); ?> >

      <a id="nav-toggle"><span></span></a>
      <!--[if lt IE 9 ]> 
      <div id="IE">Your browser is not capable of viewing this web experience. Please upgrade to Chrome, Firefox, or the latest version of Internet Explorer to view this site.</div>
      <![endif]-->
      <section id="site-wrapper">
         <header id="site-header">
            <div class="row">
               <div id="header-content">
                  <section id="header-phone" class="header-left"><a class="show-for-large-up" href="tel:12483369600"><span class="show-for-large-up">Call Us: <?php echo get_theme_mod('phone_number');?></span></a><a class="hide-for-large-up" href="tel:<?php echo get_theme_mod('phone_number_link');?>"><span class="hide-for-large-up">Call Us</span></a></section>
                  <section id="header-appt" class="header-right"><a class="show-for-large-up" href="#" data-reveal-id="modal-appt"><span class="show-for-large-up">Request a showing</span></a><a class="hide-for-large-up" href="#" data-reveal-id="modal-appt"><span class="hide-for-large-up">Tour</span></a></section>
                  <div id="modal-appt" class="reveal-modal" data-reveal>
                     <h2>Contact Lofts On 9</h2>
                        <?php echo do_shortcode('[contact-form-7 id="247" title="Request Form"]'); ?>
                        <a class="close-reveal-modal">&#215;</a>
                     </div>
                     
                  </div>
            </div>
         </header>
