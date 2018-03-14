
<?php /* Template Name: our-athletes */ get_header(); 


?>
<main role="main">
    <!-- section -->
	<style>
	#page-title-container h1 {
	
    padding-top: 40px;
	}
	</style>
    <section>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1><br>OUR<br>ATHLETES</h1>
            </div>
        </div>
		<div id = "scroll">
		<?php 
		$window_width= '1200px';
		?>
		
		<?php
                global $wpdb;
                $image = $wpdb->get_results("select * from ".$wpdb->prefix."page_slider".$query_add." order by `id`");
                foreach($image as $images) {
					echo '<div id= "athletes'.$images->order.'" style="background-image: url(http://www.scopecycling.com/wp-content/themes/scope/img/athletes/'.$images->image.');';
					echo 'height: '.$window_width.';';
					echo 'background-attachment: fixed;';
					echo 'background-size: cover;';
					echo '-o-background-size: cover;';
					echo '-moz-background-size: contain;';
					//echo '-webkit-background-size: contain;';
					echo 'background-position : relative;';
					echo 'background-repeat : no-repeat;';
					echo 'box-sizing: border-box;">';
					echo '</div>';
                }
            ?>
		

		<script>
				$(document).ready(function(){
					$(window).scroll(function() {
						//$('#athletes1').css("background-attachment","fixed");
						if( $(document).scrollTop() > 1400 ) {
								$('#athletes2').css("background-attachment","fixed");
								$('#athletes2').css("background-size","cover");
						} else {
								$('#athletes2').css("background-attachment","initial");
								$('#athletes2').css("background-size","contain");
						}
						if( $(document).scrollTop() > 2600 ) {
								$('#athletes3').css("background-attachment","fixed");
								$('#athletes3').css("background-size","cover");
						} else {
								$('#athletes3').css("background-attachment","initial");
								$('#athletes3').css("background-size","contain");
						}
						if( $(document).scrollTop() > 3800 ) {
								$('#athletes4').css("background-attachment","fixed");
								$('#athletes4').css("background-size","cover");
						} else {
								$('#athletes4').css("background-attachment","initial");
								$('#athletes4').css("background-size","contain");
						}
						if( $(document).scrollTop() > 5000 ) {
								$('#athletes5').css("background-attachment","fixed");
								$('#athletes5').css("background-size","cover");
						} else {
								$('#athletes5').css("background-attachment","initial");
								$('#athletes5').css("background-size","contain");
						}
						if( $(document).scrollTop() > 6200 ) {
								$('#athletes6').css("background-attachment","fixed");
								$('#athletes6').css("background-size","cover");
						} else {
								$('#athletes6').css("background-attachment","initial");
								$('#athletes6').css("background-size","contain");
						}
						if( $(document).scrollTop() > 7400 ) {
								$('#athletes7').css("background-attachment","fixed");
								$('#athletes7').css("background-size","cover");
						} else {
								$('#athletes7').css("background-attachment","initial");
								$('#athletes7').css("background-size","contain");
						}
						
					});
						$('.header').css("position","fixed");
						$('.header').css("left","50%");
						$('.header').css("width","100%");
						$('.header').css("margin-left","-50%");
						$('#page-title-container').css("position","fixed");
						$('#page-title-container').css("height","215px");
						$('#page-title-container').css("padding-top","75px");
						$('#page-title-container').css("background-position-y","75px");
						$('#page-title-container').css("background-size","contain");
						$('#page-title-container').css("position","inherit");
				});
		</script>
		
		
		
       </section>

    <!-- /section -->
</main>

<?php get_footer(); ?>

<script>
$(document).ready(function(){
        resetMultiPartSlider();
        $(window).resize(resetMultiPartSlider);
    });
	
	var resetMultiPartSlider = function() {
		if($('#scroll').width() < 500){
			$('#athletes1').css("background-size","contain");
			$('#athletes1').css("background-attachment","initial");
			$('#athletes1').css("height","200px");
			$('#athletes2').css("height","200px");
			$('#athletes3').css("height","200px");
			$('#athletes4').css("height","200px");
			$('#athletes5').css("height","200px");
			$('#athletes6').css("height","200px");
			$('#athletes7').css("height","200px");

		}
		if($('#scroll').width() >= 500 && $('#scroll').width() < 760){
			$('#athletes1').css("background-size","contain");
			$('#athletes1').css("background-attachment","initial");
			$('#athletes1').css("height","475px");
			$('#athletes2').css("height","475px");
			$('#athletes3').css("height","475px");
			$('#athletes4').css("height","475px");
			$('#athletes5').css("height","475px");
			$('#athletes6').css("height","475px");
			$('#athletes7').css("height","475px");

		}
		if($('#scroll').width() >= 760 && $('#scroll').width() < 1200){
			$('#athletes1').css("background-size","contain");
			$('#athletes1').css("background-attachment","initial");
			$('#athletes1').css("height","635px");
			$('#athletes2').css("height","635px");
			$('#athletes3').css("height","635px");
			$('#athletes4').css("height","635px");
			$('#athletes5').css("height","635px");
			$('#athletes6').css("height","635px");
			$('#athletes7').css("height","635px");

		}
		
	}
</script>
