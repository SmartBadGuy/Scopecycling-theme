<?php /* Template Name: Products */ get_header(); ?>

    <!-- section -->
    <section>
	<section>
        
		<div id="page-title-container">
            <div class="centerwrapper">
                <h1><?php print get_the_block("Title, line 1",array(
    'type'          => 'one-liner',
    'apply_filters' => false
)); ?><br><b>
    <?php print get_the_block("Title, line 2",array(
        'type'          => 'one-liner',
        'apply_filters' => false
    ));

?></b></h1>
            </div>
        </div>
        <div class="centerwrapper" id="centerwrappermid">
            <div class="column product left" style="margin-bottom:100px;margin-top:30px;">

                    <img class="product-name" src="<?php echo get_template_directory_uri(); ?>/img/logos/R3PNG.png" alt="r3" style="width:120px;"/>
					<div id="breakIcon1" class="breakIcon" style="position:absolute;display:block;top:10%;left:24%;visibility: hidden;">
					<a href="javascript:break1Click();" style="float:left;visibility:hidden;display:block;z-index: 4; margin-top:-13px" id="break1"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/RIM BRAKE ICON.PNG" style="width:30px;z-index: 4;"></img></a>
					<a href="javascript:break2Click();" style="float:left;visibility:visible;display:block;z-index: 4;margin-top:-5px" id="break2"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/ICON DISC.png" style="width:30px;z-index: 4;"></img></a>
					<br>
					</div>
					<div id="breakIcon2" class="breakIcon" style="position:absolute;display:block;top:10%;left:24%;visibility: hidden;">
					<a href="javascript:break1redClick();" style="float:left;visibility:visible;display:block;z-index: 4;margin-top:-13px" id="break1red"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/RIM BRAKE ICON RED.PNG" style="width:30px;z-index: 4;"></img></a>
					<a href="javascript:break2redClick();" style="float:left;visibility:hidden;display:block;z-index: 4;margin-top:-5px" id="break2red"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/ICON DISC RED.png" style="width:30px;z-index: 4;"></img></a>
					<br>
					</div>

                <a href="<?php echo the_permalink(); ?>r3/"><img class="product-image" id="r3img" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R3 - white 2.0.png" alt="product" /></a>
				<h2 id="title1" style = "color : #FFF;position:inherit; font-weight: 300;font-size:1.8em; top: 280px;">COMFORTABLE</h2><h2  class="white hint" style = "color : #FFF;position:absolute;margin-top: -20px;font-size: 1.8em;">CLIMBER</h2></a>
				
				<a href="http://store.scopecycling.com/wheels/r3c.html">
				<img id="priceLable1img" style="width: 30px;margin-right: 30%;margin-top: -25px;float:right" src="<?php echo get_template_directory_uri(); ?>/img/empty-cart-light.png"></image>
				<h2 id="priceLable1" style="margin-top: -22px; font-size: 2em; visibility: visible;color : #FFF;position:relative;left:70%; width: 40%" class="white hint">€ 1398,-</h2>
				</a>
            </div>			
			
			
			
            <div class="column product" style="margin-top:30px;">

                    <img class="product-name" src="<?php echo get_template_directory_uri(); ?>/img/logos/R4PNG.png" alt="r4" style="width:120px;"/>
					<div id="breakIcon3" class="breakIcon" style="position:absolute;display:block;top:10%;left:54%;visibility: hidden;">
					<a href="javascript:break3Click();" style="float:left;visibility:hidden;display:block;z-index: 4; margin-top:-13px" id="break3"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/RIM BRAKE ICON.PNG" style="width:30px;z-index: 4;"></img></a>
					<a href="javascript:break4Click();" style="float:left;visibility:visible;display:block;z-index: 4;margin-top:-5px" id="break4"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/ICON DISC.png" style="width:30px;z-index: 4;"></img></a>
					<br>
					</div>
					<div id="breakIcon4" class="breakIcon" style="position:absolute;display:block;top:10%;left:54%;visibility: hidden;">
					<a href="javascript:break3redClick();" style="float:left;visibility:visible;display:block;z-index: 4;margin-top:-13px" id="break3red"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/RIM BRAKE ICON RED.PNG" style="width:30px;z-index: 4;"></img></a>
					<a href="javascript:break4redClick();" style="float:left;visibility:hidden;display:block;z-index: 4;margin-top:-5px" id="break4red"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/ICON DISC RED.png" style="width:30px;z-index: 4;"></img></a>
					<br>
					</div>

                <a href="<?php echo the_permalink(); ?>r4/"><img class="product-image" id="r4img" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R4 - white 2.0.png" alt="product" /></a>
				<h2 id="title2" style = "color : #FFF;position:inherit; font-weight: 300;font-size:1.8em; top: 280px;">OUTSTANDING</h2><h2  class="white hint" style = "color : #FFF;position:absolute;     margin-top: -20px;font-size: 1.8em;">ALLROUNDER</h2></a>
				<a href="http://store.scopecycling.com/wheels/r4c.html">
				<img id="priceLable2img" style="width: 30px;margin-right: 30%;margin-top: -25px;float:right" src="<?php echo get_template_directory_uri(); ?>/img/empty-cart-light.png"></image>
				<h2 id="priceLable2" style="margin-top: -22px; font-size: 2em; visibility: visible;color : #FFF;position:relative;left:70%; width 40%" class="white hint">€ 1398,-</h2>
				</a>
            </div>
			
            <div class="column product right" style="margin-top:30px;">

                    <img class="product-name" src="<?php echo get_template_directory_uri(); ?>/img/logos/R5PNG.png" alt="r5" style="width:120px;"/>
					<div id="breakIcon5" class="breakIcon" style="position:absolute;display:block;top:10%;left:89%;visibility: hidden;">
					<a href="javascript:break5Click();" style="float:left;visibility:hidden;display:block;z-index: 4; margin-top:-13px" id="break5"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/RIM BRAKE ICON.PNG" style="width:30px;z-index: 4;"></img></a>
					<a href="javascript:break6Click();" style="float:left;visibility:visible;display:block;z-index: 4;margin-top:-5px" id="break6"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/ICON DISC.png" style="width:30px;z-index: 4;"></img></a>
					<br>
					</div>
					<div id="breakIcon6" class="breakIcon" style="position:absolute;display:block;top:10%;left:89%;visibility: hidden;">
					<a href="javascript:break5redClick();" style="float:left;visibility:visible;display:block;z-index: 4;margin-top:-13px" id="break5red"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/RIM BRAKE ICON RED.PNG" style="width:30px;z-index: 4;"></img></a>
					<a href="javascript:break6redClick();" style="float:left;visibility:hidden;display:block;z-index: 4;margin-top:-5px" id="break6red"><img src="<?php echo get_template_directory_uri(); ?>/img/pictures/ICON DISC RED.png" style="width:30px;z-index: 4;"></img></a>
					<br>
					</div>

                <a href="<?php echo the_permalink(); ?>r5/"><img class="product-image" id="r5img" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R5 - white 2.0.png" alt="product" /></a>
				<h2 id="title3" style = "color : #FFF;position:inherit; font-weight: 300;font-size:1.8em; top: 280px;">AERO</h2><h2  class="white hint" style = "color : #FFF;position:absolute;margin-top: -20px;font-size: 1.8em;">SPECIALIST</h2></a>
				<a href="http://store.scopecycling.com/wheels/r5c.html">
				<img id="priceLable3img" style="width: 30px;margin-right: 30%;margin-top: -25px;float:right" src="<?php echo get_template_directory_uri(); ?>/img/empty-cart-light.png"></image>
				<h2 id="priceLable3" style="margin-top: -22px; font-size: 2em; visibility: visible;color : #FFF;position:relative;left:70%; width 40%" class="white hint">€ 1398,-</h2>
				</a>
            </div>
			<div class="column product left" style="margin-bottom:100px;margin-top:-50px;"></div>
			<div class="column product" style="margin-top:-50px;">

                    <img class="product-name" src="<?php echo get_template_directory_uri(); ?>/img/O2.png" alt="r4" style="width:120px;"/>

                <a href="<?php echo the_permalink(); ?>o2/"><img class="product-image" id="o2" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/O2-white.png" alt="product" /></a>
				<h2 id="title2" style = "color : #FFF;position:inherit; font-weight: 300;font-size:1.8em; top: 280px;">OFF-ROAD</h2><h2  class="white hint" style = "color : #FFF;position:absolute;     margin-top: -20px;font-size: 1.8em;">EXPERT</h2></a>
				<a href="http://store.scopecycling.com/wheels/o2.html">
				<img id="priceLable2img" style="width: 30px;margin-right: 30%;margin-top: -25px;float:right" src="<?php echo get_template_directory_uri(); ?>/img/empty-cart-light.png"></image>
				<h2 id="priceLable2" style="margin-top: -22px; font-size: 2em; visibility: visible;color : #FFF;position:relative;left:70%; width 40%" class="white hint">€ 1398,-</h2>
				</a>
            </div>
        </div>
        <div class="centerwrapper" style="height:400px;overflow:hidden;">
		<iframe id="productVid" frameborder="0" style="width:80%;height:100%;margin-top:0%;margin-left:10%;padding-left:10%;padding-right:10%;" src="https://www.youtube.com/embed/UZOeawYxjkA?api=1&enablejsapi=1&autoplay=1&showinfo=0&controls=0&playlist=UZOeawYxjkA&loop=1">&nbsp;</iframe>
		<script>
				  var tag = document.createElement('script');

				  tag.src = "https://www.youtube.com/iframe_api";
				  var firstScriptTag = document.getElementsByTagName('script')[0];
				  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

				  var player;
				  function onYouTubeIframeAPIReady() {
					player = new YT.Player('productVid', {
					  height: '128%',
					  width: '100%',
					  videoId: 'UZOeawYxjkA',
					  events: {
						'onReady': onPlayerReady,
					  }
					});
				  }
				  


				  function stopVideo() {
					player.stopVideo();
				  }
				  
				function onPlayerReady(event) {
					player.playVideo();
					player.mute();
					
					var muteButton = document.getElementById("mute-button");
									  muteButton.addEventListener("click", function() {
										player.mute();
									  });
									  
					var unmuteButton = document.getElementById("unmute-button");
									  unmuteButton.addEventListener("click", function() {
										player.unMute();
									  });
				}

				
				
				</script>
				<div class="centerwrapper" onclick="window.open('https://www.youtube.com/watch?v=UZOeawYxjkA','mywindow');" style="height:400px;overflow:hidden;position:absolute;top:0px;"></div>
		</div>
		
		<div class="centerwrapper" style="overflow:hidden;">
			<img style="padding-top:50px; margin-bottom:50px;width:30%;margin-left:35%;" src="http://www.scopecycling.com/wp-content/themes/scope/img/logos/DitNeW.png"></img>
		</div>
		
		
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

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

<script>
	var break1Click = function(){
		$("#break1").css("visibility","hidden");
		$("#break2").css("visibility","visible");
		$("#break1red").css("visibility","visible");
		$("#break2red").css("visibility","hidden");
		
		document.getElementById("r3img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R3 - white 2.0.png")
	}
	var break2Click = function(){
		$("#break1").css("visibility","visible");
		$("#break2").css("visibility","hidden");
		$("#break1red").css("visibility","hidden");
		$("#break2red").css("visibility","visible");
		document.getElementById("r3img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R3d - white 2.0.png")
	}
	var break1redClick = function(){
		$("#break1").css("visibility","hidden");
		$("#break2").css("visibility","visible");
		$("#break1red").css("visibility","visible");
		$("#break2red").css("visibility","hidden");
		document.getElementById("r3img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R3 - white 2.0.png")
	}
	var break2redClick = function(){
		$("#break1").css("visibility","visible");
		$("#break2").css("visibility","hidden");
		$("#break1red").css("visibility","hidden");
		$("#break2red").css("visibility","visible");
		document.getElementById("r3img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R3d - white 2.0.png")
	}
	
		var break3Click = function(){
		$("#break3").css("visibility","hidden");
		$("#break4").css("visibility","visible");
		$("#break3red").css("visibility","visible");
		$("#break4red").css("visibility","hidden");
		document.getElementById("r4img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R4 - white 2.0.png")
	}
	var break4Click = function(){
		$("#break3").css("visibility","visible");
		$("#break4").css("visibility","hidden");
		$("#break3red").css("visibility","hidden");
		$("#break4red").css("visibility","visible");
		document.getElementById("r4img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R4d - white 2.0.png")
	}
	var break3redClick = function(){
		$("#break3").css("visibility","hidden");
		$("#break4").css("visibility","visible");
		$("#break3red").css("visibility","visible");
		$("#break4red").css("visibility","hidden");
		document.getElementById("r4img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R4 - white 2.0.png")
	}
	var break4redClick = function(){
		$("#break3").css("visibility","visible");
		$("#break4").css("visibility","hidden");
		$("#break3red").css("visibility","hidden");
		$("#break4red").css("visibility","visible");
		document.getElementById("r4img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R4d - white 2.0.png")
	}
	
		var break5Click = function(){
		$("#break5").css("visibility","hidden");
		$("#break6").css("visibility","visible");
		$("#break5red").css("visibility","visible");
		$("#break6red").css("visibility","hidden");
		document.getElementById("r5img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R5 - white 2.0.png")
	}
	var break6Click = function(){
		$("#break5").css("visibility","visible");
		$("#break6").css("visibility","hidden");
		$("#break5red").css("visibility","hidden");
		$("#break6red").css("visibility","visible");
		document.getElementById("r5img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R5d - white 2.0.png")
	}
	var break5redClick = function(){
		$("#break5").css("visibility","hidden");
		$("#break6").css("visibility","visible");
		$("#break5red").css("visibility","visible");
		$("#break6red").css("visibility","hidden");
		document.getElementById("r5img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R5 - white 2.0.png")
	}
	var break6redClick = function(){
		$("#break5").css("visibility","visible");
		$("#break6").css("visibility","hidden");
		$("#break5red").css("visibility","hidden");
		$("#break6red").css("visibility","visible");
		document.getElementById("r5img").setAttribute("src","<?php echo get_template_directory_uri(); ?>/img/productdetails/small/R5d - white 2.0.png")
	}
</script>
<script>
$(document).ready(function(){
        resetMultiPartSlider();
        $(window).resize(resetMultiPartSlider);
    });
	
	var resetMultiPartSlider = function() {
		if($('.centerwrapper').width() < 400){
			$('#centerwrappermid').css("left","0%");
			
			//$('#priceLable1').css("margin-top","-9%");
			//$('#priceLable2').css("margin-top","-9%");
			//$('#priceLable3').css("margin-top","-9%");
			//$('#priceLable1').css("left","65%");
			//$('#priceLable2').css("left","65%");
			//$('#priceLable3').css("left","65%");
			//$('#priceLable1img').css("margin-left","58%");
			//$('#priceLable2img').css("margin-left","58%");
			//$('#priceLable3img').css("margin-left","58%");
			
			$('#footerimg').css("width","80%");
			$('.product-name').css("margin-bottom","0px");
			
			$('#breakIcon1').css("top","7%");
			$('#breakIcon1').css("left","2%");
			$('#breakIcon2').css("top","7%");
			$('#breakIcon2').css("left","2%");
			$('#breakIcon3').css("top","46%");
			$('#breakIcon3').css("left","2%");
			$('#breakIcon4').css("top","46%");
			$('#breakIcon4').css("left","2%");
			$('#breakIcon5').css("top","77%");
			$('#breakIcon5').css("left","2%");
			$('#breakIcon6').css("top","77%");
			$('#breakIcon6').css("left","2%");
			
			$('#title1').css("top","240px");
			$('#title2').css("top","660px");
			$('#title3').css("top","1010px");
		}
		
		else if($('.centerwrapper').width() >= 400 && $('.centerwrapper').width() < 750){
			$('#centerwrappermid').css("left","10%");
			
			//$('#priceLable1').css("margin-top","-3.5%");
			//$('#priceLable2').css("margin-top","-3.5%");
			//$('#priceLable3').css("margin-top","-3.5%");
			//$('#priceLable1').css("left","65%");
			//$('#priceLable2').css("left","65%");
			//$('#priceLable3').css("left","65%");
			//$('#priceLable1img').css("margin-left","62%");
			//$('#priceLable2img').css("margin-left","62%");
			//$('#priceLable3img').css("margin-left","62%");
			
			$('#breakIcon1').css("top","5%");
			$('#breakIcon1').css("left","70%");
			$('#breakIcon2').css("top","5%");
			$('#breakIcon2').css("left","70%");
			$('#breakIcon3').css("top","43%");
			$('#breakIcon3').css("left","70%");
			$('#breakIcon4').css("top","43%");
			$('#breakIcon4').css("left","70%");
			$('#breakIcon5').css("top","74%");
			$('#breakIcon5').css("left","70%");
			$('#breakIcon6').css("top","74%");
			$('#breakIcon6').css("left","70%");
			
			$('#footerimg').css("width","30%");
			$('.product-name').css("margin-bottom","200px");
			
			
			$('#title1').css("top","250px");
			$('#title2').css("top","655px");
			$('#title3').css("top","980px");
		}
		else if($('.centerwrapper').width() >= 750 && $('.centerwrapper').width() < 790){
			$('#centerwrappermid').css("left","0%");
			
			//$('#priceLable1').css("margin-top","-2.5%");
			//$('#priceLable2').css("margin-top","-2.5%");
			//$('#priceLable3').css("margin-top","-2.5%");
			//$('#priceLable1').css("left","23%");
			//$('#priceLable2').css("left","55.5%");
			//$('#priceLable3').css("left","88.5%");
			//$('#priceLable1img').css("margin-left","60%");
			//$('#priceLable2img').css("margin-left","60%");
			//$('#priceLable3img').css("margin-left","60%");
			
			$('#breakIcon1').css("top","10%");
			$('#breakIcon1').css("left","24%");
			$('#breakIcon2').css("top","10%");
			$('#breakIcon2').css("left","24%");
			$('#breakIcon3').css("top","10%");
			$('#breakIcon3').css("left","54%");
			$('#breakIcon4').css("top","10%");
			$('#breakIcon4').css("left","54%");
			$('#breakIcon5').css("top","10%");
			$('#breakIcon5').css("left","89%");
			$('#breakIcon6').css("top","10%");
			$('#breakIcon6').css("left","89%");
			
			$('#footerimg').css("width","80%");
			$('.product-name').css("margin-bottom","0px");
			
			$('#title1').css("top","275px");
			$('#title2').css("top","275px");
			$('#title3').css("top","275px");
		}
		else if($('.centerwrapper').width() >= 790){
			$('#centerwrappermid').css("left","0%");
			
			//$('#priceLable1').css("margin-top","-2.5%");
			//$('#priceLable2').css("margin-top","-2.5%");
			//$('#priceLable3').css("margin-top","-2.5%");
		//	$('#priceLable1').css("left","23%");
		//	$('#priceLable2').css("left","55.5%");
			//$('#priceLable3').css("left","88.5%");
			//$('#priceLable1img').css("margin-left","60%");
			//$('#priceLable2img').css("margin-left","60%");
			//$('#priceLable3img').css("margin-left","60%");
			
			$('#breakIcon1').css("top","10%");
			$('#breakIcon1').css("left","24%");
			$('#breakIcon2').css("top","10%");
			$('#breakIcon2').css("left","24%");
			$('#breakIcon3').css("top","10%");
			$('#breakIcon3').css("left","54%");
			$('#breakIcon4').css("top","10%");
			$('#breakIcon4').css("left","54%");
			$('#breakIcon5').css("top","10%");
			$('#breakIcon5').css("left","89%");
			$('#breakIcon6').css("top","10%");
			$('#breakIcon6').css("left","89%");
			
			$('#footerimg').css("width","80%");
			$('.product-name').css("margin-bottom","0px");
			
			$('#title1').css("top","275px");
			$('#title2').css("top","275px");
			$('#title3').css("top","275px");
		}
		//location.reload();
	}
</script>
