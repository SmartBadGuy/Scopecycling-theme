<?php /* Template Name: Home */ get_header(); ?>

<main role="main">
    <!-- section -->
    <section>
        <h1 style="display:none;"><?php //the_title(); ?></h1>
        <?php get_slider_homepage("home"); ?>
		<!-- New part -->
		<div class="centerwrapper centerwrapperpics" style="overflow:hidden;text-align:center;margin-top:75px;">

		<?php
            global $wpdb;
            $HomeImages = $wpdb->get_results("select * from ".$wpdb->prefix."homepage_picture".$query_add." order by `id`");
   
            foreach($HomeImages as $HomeImage) {	
                echo '<a id ="homepic" href="'.$HomeImage->link.'" style="left:50%;right:50%;display:block;width:48%;margin-left:2%;float:left;min-width:300px" >';
                echo '<span style="display:block;" class = "home-picButton">';
                echo '<img src="http://www.scopecycling.com/wp-content/themes/scope/img/pictures/'.$HomeImage->image.'">';
                echo '<div id="picfonts" style="position:absolute;display:block;">';
				echo '<h2 id="font1" color="white" style="position:absolute;bottom:44%;padding-left:28px;padding-bottom:29px";>'.$HomeImage->line1.'</h2>';
				echo '<h2 id="font2" color="white" style="position:absolute;bottom:38%;padding-left:28px;padding-bottom:-15px;";>'.$HomeImage->line2.'</h2>';
				echo '</div>';
				echo '</img>';
				echo '</span>';
				echo '</a>';
            }
        ?>
		</div>
		
		<div class="centerwrapper" >
			<div class="redline2" style ="text-align:center;margin-top:75px;padding-bottom:22px;">
			<h2 style = ";color:white;font-size: 1.9em;font-weight:normal;font-family:'Helvetica Neue'";>REVIEWED BY</h2>
			</div>
		</div>
		<div class="centerwrapper" style="min-width:300px">
			<div id="slider-controls"></div>
            <div id="multipart-slider" style ="padding-top:0px;vertical-align: middle;">
                
            <?php
                global $wpdb;
                $logos = $wpdb->get_results("select * from ".$wpdb->prefix."logo_slider".$query_add." order by `id`");
    
                foreach($logos as $logo) {
                    echo '<div class="multipart-slide column" style="vertical-align: middle;">';
                    echo '<img style="vertical-align: middle;" src="'.get_template_directory_uri().'/img/logos/'.$logo->logo.'" alt="'.$logo->title.'">';
                    //echo '  <a href="'.$oem->link.'" style="display:block;"><img style="display:block;max-height:40px;max-width:80%;margin:0 auto;" src="'.get_template_directory_uri().'/img/review/'.$oem->logo.'" alt="logo" />';
                    echo '</div>';
                }
            ?>
			</div>
        </div>
		<!-------------->
        <?php $args = array(
            'numberposts' => 3,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'include' => '',
            'exclude' => '',
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'post_status' => 'draft, publish, future, pending, private',
            'suppress_filters' => true );

            $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
            
            if ($recent_posts > 0) {
                echo '<div class="centerwrapper">';
                echo '<section id="news-teaser">';
            }
            foreach($recent_posts as $post){
                                
                echo '<article class="news-teaser-wrap">';
                $feat_image = get_the_post_thumbnail($post['ID'],'small-square', 'class=grayscale');
                if ($feat_image != ""){
                    echo '<a href="'.$post['guid'].'">';
                    echo $feat_image;
                    echo '</a>';
                };
                echo '<div class="news-details">';
                echo '<a href="'.$post['guid'].'"><h2>'.$post['post_title'].'</h2>';
                echo '<p>'.cut_at_characters($post['post_content'], 120).'</p></a>';
				//<br><a href="'.$post['guid'].'" class="read-more">'.translate("Show more detail", 'news').'</a>
                
				echo '</div>';
                echo '</article>';
            }
            if ($recent_posts > 0) {
                echo '</section></div>';
            }
        ?>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php //  the_content(); ?>

                    <?php //comments_template('', true); // Remove if you don't want comments ?>

                    <br class="clear">

                    <?php //edit_post_link(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>
		<script type="text/javascript">
		var num;
		var left = true;
			$(document).ready(function(){
				resetMultiPartSlider();
				$(window).resize(resetMultiPartSlider);
			});			
			var resetMultiPartSlider = function() {
				if ($('#slider').width() > 650){
					var amount = 5;
				}
				else if($('#slider').width() <= 650 && $('#slider').width()>= 450){
					var amount = 3;
				}
				else if($('#slider').width() < 450){
					var amount = 1;
				}
				num = amount;
					var items = $("#multipart-slider").find(".multipart-slide");
					var totalWidth = $("#multipart-slider").css({overflow:"hidden",whiteSpace:"nowrap"}).innerWidth();
					items.css({width:totalWidth / amount, whiteSpace:"normal", textAlign:"center"});
					$("#multipart-slider").find(".multipart-slide img").css({width:"60%"});
					if (items.length > amount) {
						$("#multipart-slider").data("amount", items.length).data("current", 0);

						var controls = "<a href='javascript:void(0);' onclick='reviewLeft2();' style='left:-20px; top:27%;' id='prev'></a><a id='next'  onclick='reviewRight()'  style='right:0px; top:27%;' href='javascript:void(0);'></a>"
						$("#slider-controls").html(controls);
						var indicators = '';
						for(var i = 0; i < Math.ceil(items.length / amount); i++ ) {
							indicators += "<a href='javascript:void(0);' onclick='indicatorMultiPartClick("+i+")' class='" + (i===0?"active ":"") + "indicator'></a>";
						}
						$("#indicator2").html(indicators);
					}
			};
			var reviewLeft = function() {
				
				var current = parseInt($("#multipart-slider").data("current"));
				var amount = parseInt($("#multipart-slider").data("amount"));
				var scrollTo = current - 1;
				if (scrollTo < 0) {
					$left = false;
					reviewRight();
					//scrollTo = amount - 5;
				}
				if($left == true){
					var totalWidth = $("#multipart-slider").css({overflow:"hidden",whiteSpace:"nowrap"}).innerWidth();
					var scrollWidth = (totalWidth / num ) * scrollTo * -1;
					$("#multipart-slider").data("current", scrollTo).find(".multipart-slide").first().animate({marginLeft: scrollWidth});
					updateIndicator();
				}
				else{
					$left = false;
					reviewRight();
				}
			}
			
			var reviewLeft2 = function() {
				
				var current = parseInt($("#multipart-slider").data("current"));
				var amount = parseInt($("#multipart-slider").data("amount"));
				var scrollTo = current - 1;
				if (scrollTo < 0) {
					$left = false;
					reviewRight();
					//scrollTo = amount - 5;
				}
					var totalWidth = $("#multipart-slider").css({overflow:"hidden",whiteSpace:"nowrap"}).innerWidth();
					var scrollWidth = (totalWidth / num ) * scrollTo * -1;
					$("#multipart-slider").data("current", scrollTo).find(".multipart-slide").first().animate({marginLeft: scrollWidth});
					updateIndicator();
			}
			
			var indicatorMultiPartClick = function(to) {
				var amount = parseInt($("#multipart-slider").data("amount"));
				var current = (to * 3) - 3;
				$("#multipart-slider").data("current", current)
				reviewRight();
			}
			var reviewRight = function() {
				var current = parseInt($("#multipart-slider").data("current"));
				var amount = parseInt($("#multipart-slider").data("amount"));
				var scrollTo = current + 1;
				if (scrollTo > (amount - num)) {
					$left = true;
					reviewLeft();
					//scrollTo = 0;
				}
				if($left == false){
					var totalWidth = $("#multipart-slider").innerWidth();
					var scrollWidth = (totalWidth / num ) * scrollTo * -1;
					$("#multipart-slider").data("current", scrollTo).find(".multipart-slide").first().animate({marginLeft: scrollWidth});
					updateIndicator();
				}
				else{
					$left = true;
					reviewRight();
				}
			}
			var updateIndicator = function() {
				var current = parseInt($("#multipart-slider").data("current")) / 3;
				$("#indicator2").find(".indicator").removeClass("active").get("current").className += " active";
			}
			
			setInterval(reviewLeft,5000);
		</script>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
