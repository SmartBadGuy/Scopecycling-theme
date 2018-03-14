<?php
$menu_name = "header-menu";
if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] )) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
}

ob_start();?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>
	<!--
	<style id="antiClickjack">body{display:none !important;}</style>
	
	<script type="text/javascript">
    if (self === top) {
        var antiClickjack = document.getElementById("antiClickjack");
        antiClickjack.parentNode.removeChild(antiClickjack);
    } else {
        top.location = self.location;
    }
	</script>
	-->
	<script language="javascript" type="text/javascript">
     var style = document.createElement('style');
     style.type = "text/css";
     style.id = "antiClickjack";
     style.innerHTML = "body{display:none !important;}";
     document.head.appendChild(style);

     if (self === top) {
         var antiClickjack = document.getElementById("antiClickjack");
         antiClickjack.parentNode.removeChild(antiClickjack);
     } else {
         top.location = self.location;
     }
</script>
	
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
                <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
                <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
                <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Roboto:100,400' rel='stylesheet' type='text/css'>
                <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="<?php echo get_template_directory_uri(); ?>/js/featherlight.js"></script>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTUOWOIncF1EQvMdlpBCaP29YXHwiubfY&sensor=false"></script>
                <!-- <script type="text/javascript" src="https://s3.amazonaws.com/nutrislice-menus/js/lib/fastclick.min.js"></script> -->
                <script type="text/javascript">
var templateUrl = '<?php bloginfo('template_directory'); ?>';
                </script>
                <script type="text/javascript">
                            
                    var menu = [];
                    <?php
                       foreach ( $menu_items as $menu_item ) {
                            echo 'menu.push("submenu_' .$menu_item->object_id. '");';
                       }
                    ?>
                </script>
        <link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" rel="stylesheet">
        <style>.lb-outerContainer { background: transparent; }</style>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
                            <div class="languageselect">
                                            </div>
                            <div id="header_top">
                                
					<!-- logo -->
					<div class="logo">
                                            
                                            <a href="<?php echo home_url(); ?>">
                                                    <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Scope Cycling logo" class="logo-img">
                                            </a>
                                            
					</div>
					<!-- /logo -->

					<!-- nav -->
					<?php html5blank_nav(); ?>
                                        <div id="responsive-menu">
                                            <a id="the-menu-button" href="javascript:void(0);">Menu</a>
                                            <ul id="the-actual-menu">
                                                <?php wp_list_pages('depth=2&sort_column=menu_order&title_li='); ?>
                                                <li>
                                                    <a href="http://store.scopecycling.com/">Store</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="search-form-container">
                                            <?php get_template_part('searchform'); ?>
                                        </div>
                            </div>
                            <nav class="nav subnav" role="navigation">
                                    <?php
//                                    if (isset($_GET['is_news'])) {
//                                        $id = url_to_postid( site_url()."/scope/" ); 
//                                    } elseif ($post->post_parent > 0){
//                                        $parent = get_post($post->post_parent);
//                                        $id = $parent->ID;
//                                    } else {
//                                        $id = $post->ID;
//                                    }
//                                    
//                                    if($post != NULL)
//$children = wp_list_pages("title_li=&sort_column=menu_order&child_of=".$id."&echo=0");
//echo $children; ?><?php print_sub_menus(); ?>
                            </nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
