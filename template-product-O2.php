<?php /* Template Name: ProductsO2 */ get_header(); ?>

<main role="main" class="smallerwrapper">
    <!-- section -->
    <section>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1><?php the_title(); ?><br /><b>Features & Specs</b></h1>
            </div>
        </div>
        
        <div class="centerwrapper">
            <div id="infographic" class="infographic" style="margin-bottom:35px;">
                <img id ="typeC" class="product-name" src="<?php echo get_template_directory_uri(); ?>/img/O2.png" style="width:180px;position:absolute;visibility: visible;margin:50px 0 0 0;" />
                <div class="point right" style="top:32%;left:20%">
					<h2 class="Ctype"><?php print get_the_block("Spoke title ",array('type' => 'one-liner','apply_filters' => false));?></h2>
                    <div class="line">
                        <div class="pointer"></div>
                    </div>
					<span class="Ctype" ><?php print get_the_block("Spoke Description ",array('type'=> 'one-liner','apply_filters' => false));?></span>
                </div>
                <div class="point right" style="top:46.5%;left:33.5%">
					<h2 class="Ctype" ><?php print get_the_block("Flange title ",array('type' => 'one-liner','apply_filters' => false));?></h2>
                    <div class="line">
                        <div class="pointer"></div>
                    </div>
					<span class="Ctype" ><?php print get_the_block("Flange Description ",array('type'=> 'one-liner','apply_filters' => false));?></span>
                </div>
                <div class="point right" style="top:74%;left:21%">
					<h2 class="Ctype" ><?php print get_the_block("Clincher title ",array('type' => 'one-liner','apply_filters' => false));?></h2>
                    <div class="line">
                        <div class="pointer"></div>
                    </div>
					<span class="Ctype" ><?php print get_the_block("Clincher Description ",array('type'=> 'one-liner','apply_filters' => false));?></span>
                </div>
                <div class="point" style="top:27%;right:5%">
					<h2 class="Ctype"><?php print get_the_block("Weight title ",array('type' => 'one-liner','apply_filters' => false));?></h2>
                    <div class="line">
                        <div class="pointer"></div>
                    </div>
					<span class="Ctype" ><?php print get_the_block("Weight Description ",array('type'=> 'one-liner','apply_filters' => false));?></span>
                </div>
                <div class="point" style="top:71%;right:8%">
					<h2 class="Ctype"><?php print get_the_block("Brake title ",array('type' => 'one-liner','apply_filters' => false));?></h2>
					<div class="line">
                        <div class="pointer"></div>
                    </div>
					<span class="Ctype" ><?php print get_the_block("Brake Description ",array('type'=> 'one-liner','apply_filters' => false));?></span>
					</div>
				<img id="imgBlock" style="visibility:hidden" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/EMPTY BLOCK.PNG"></img>
                <img id="imagerGC" class="grey" stye="" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/O2-grey.png" alt='Scope Cycling, <?php echo strtolower(the_title("","",false)); ?>Grey'/>              
				<img id="imagerBC" class="black" stye="" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/O2-black.png" alt='Scope Cycling, <?php echo strtolower(the_title("","",false)); ?>black'/>				
				<img id="imagerWC" class="white active" stye="margin-top: -60%" src="<?php echo get_template_directory_uri(); ?>/img/productdetails/O2-white.png" alt='Scope Cycling, <?php echo strtolower(the_title("","",false)); ?>White'/>
				
				
				<?php
				$this_title = strtolower(the_title("","",false));
				$directory_address_store = "http://store.scopecycling.com/wheels/".$this_title.".html";
				$directory_address_dealer = "http://www.scopecycling.com/scope/dealers/";
				?>
					<!--
					<a type="button" href="#" class="PD-button" style="left:17%;top:105%;font-family: 'Helvetica Neue';";" onclick="scrollLearnmore();">LEARN MORE <img id="btnimg" style="z-index:1; margin-top:-8px;margin-left:85px;position:absolute" src = "<?php echo get_template_directory_uri(); ?>/img/next.png"></img>
					</a>
				
					<a type="button" href="#" class="PD-button2" style="left:43.5%;top:105%;font-family: 'Helvetica Neue';" onclick="location.href='<?=$directory_address_store?>';">SHOP NOW<img id="btnimg2" style="margin-top:-8px;margin-left:20px;position:absolute" src = "<?php echo get_template_directory_uri(); ?>/img/next.png"></img>
					</a>
				
					<a type="button" href="#" class="PD-button3" style="left:70%;top:105%;font-family: 'Helvetica Neue';" onclick="location.href='<?=$directory_address_dealer?>';">VISIT DEALER<img id="btnimg3" style="margin-top:-8px;margin-left:20px;position:absolute" src = "<?php echo get_template_directory_uri(); ?>/img/next.png"></img>
					</a>-->

				<div id="priceLableDiv" style="position:absolute;display:block;top:87%;right:2%;">
				<a type="button" href="#" onclick="location.href='<?=$directory_address_store?>';"><img style="width:50px;margin-right:70px;top:-12px;" src="<?php echo get_template_directory_uri(); ?>/img/empty-cart-light.png"></img></a>
				<a id="lable" type="button" href="#" class="PD-button2" style="left:43.5%;top:0%;font-family: 'Helvetica Neue';" onclick="location.href='<?=$directory_address_store?>';">
					
					<h2 id="priceLable" style="margin-top:-55px; font-size: 1.5em;" class="white hint">€1398,-</h2>
					<h2 style="margin-top:25px;font-size:0.7em;width:161px;left:-25%;position:absolute;" class="white hint">BUY NOW</h2>
				</a>
				</div>

				
                <h2><?php _e("Features"); $this_title = strtolower(the_title("","",false)); ?></h2>
                
            </div>

            <div class="specs specs-default" id = "animationContainer">
                <div class="text">
                    <h2 class="title" style="font-size:4em"><?php print get_the_block("About weight title",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("About weight title line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("About weight", array() ); ?>
                </div>
                <div id ="animation" style="left:50%;top:30%"><iframe id="iframeO2" style="width:500px;height:300px" src="https://www.youtube.com/embed/_r6d_4wVcOU?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></div>
		   </div>
            <div class="specs specs-default inverted" style="margin-top:30px">
                    
                <div class="text">
                    <h2 class="title"><?php print get_the_block("About clincher title",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("About clincher title line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("About clincher", array() ); ?>
                </div>
                <img class="clincher"  id ="animation2" style="margin-top: 1%;margin-left:-5%;width:500px" src="http://www.scopecycling.com/wp-content/themes/scope/img/O2/Scope2.png" alt="Scope Cycling <?php echo $this_title ?> Full carbon clincher rim" >
            </div>
            <div class="cite-outer" style="padding-left:25%;padding-right:25%;">
                    <img style="padding-top:30px;" src="<?php echo get_template_directory_uri(); ?>/img/logos/Developed in the Netherlands WHITE.png"></img>
            </div>
            <div class="specs specs-default" style="margin-top:10px">
                <div class="text">
                    <h2 class="title"><?php print get_the_block("About durability title",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("About durability title line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("About durability", array() ); ?>
                </div>
                <img id ="animation3" style="margin-top: 3%;" src="http://www.scopecycling.com/wp-content/themes/scope/img/O2/Scope3.png" alt="Scope Cycling, <?php echo $this_title ?> Rear hub" >
            </div>
            <div class="specs specs-default inverted">
                <div class="text">
                    <h2 class="title"><?php print get_the_block("About service title",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("About service title line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("About service", array() ); ?>
                </div>
                <img class="clincher" id ="animation4" style="margin-top: 5.5%;" src="http://www.scopecycling.com/wp-content/themes/scope/img/O2/Scope4.png" alt="Scope Cycling <?php echo $this_title ?> Full carbon clincher rim" >
            </div>
			
			
           <div class="specs specs-default"  style="margin-top:360px;">
                <div class="text">
                    <h2 class="title"><?php print get_the_block("Ceramic Speed Title",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Ceramic Speed Title line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("About Ceramic Speed", array() ); ?>
                </div>
                <img style="width:350px" src="<?php echo get_template_directory_uri(); ?>/img/ceramic.png" alt="Scope Cycling, <?php echo $this_title ?> Ceramic Speed" >
            </div>
			
			<!---->
        </div>
        <div class="centerwrapper">
        <div class="specs" style="padding-bottom:20px;">
            <h2 class="title">SCOPE<br>REVIEWED</h2>
        </div>
            <div id="multipart-slider" style="padding-top:30px;padding-bottom:0px;">
            <div id="slider-controls"></div>
				<div id="multipart-slider" style ="padding-top:0px;padding-bottom:0px;vertical-align: middle;">
                
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
            
        </div>
        <div class="centerwrapper">
            <?php 
            global $wpdb;
            $cat = 4;
$row = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "specifications WHERE category = '".$cat."' order by `order`");

$features = array();
    foreach ( $row as $row ) 
    { 
        $features[] = array($row->title, $row->front, $row->rear);
    }
                
            ?>
        </div>
        <div class="centerwrapper">
            <div class="redline">
                <h2><?php _e("Specifications") ?></h2>
            </div>
            <style>
			table {
				border-collapse: collapse;
				text-align: center;
				margin-left:12.5%;
				width:75%;
			}
			td, th {
				border: 3px solid black;
				color:inherit;
				font-size:2em;
			}
			tr:nth-child(even) {background-color: #666666;color:black;}
			tr:nth-child(odd) {color:#ffffff;
			}
			td.spec {
				width:auto;
			}
			</style>

            <table style="font-size:8px;" width="50%">
                <tr>
                    <th>Specifications</th>
                    <th>Front</th>
                    <th>Rear</th>
                </tr>
				<?php
                    foreach ($features as $feature){
                        echo '<tr><td class="spec">'.$feature[0].'</td><td data-title="Front '.$feature[0].'" >'.$feature[1].'</td><td data-title="Rear '.$feature[0].'" >'.$feature[2].'</td></tr>';
                    }
                ?>
				
            </table>
        </div>
        <div class="centerwrapper">
            <?php get_O2_slider(strtolower("O2"),true,2,"style=\"max-width:1600px;margin:0 auto;position:relative;\""); ?>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php // post_class(); ?>>

                    <?php   the_content(); ?>

                    <?php comments_template('', true); // Remove if you don't want comments ?>

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
    $(document).ready(function(){		
        $(".choice").click(function(e){
			$("#imagerGC").css("visibility","hidden");
			$("#imagerBC").css("visibility","hidden");
			$("#imagerWC").css("visibility","hidden");
			$("#imagerGD").css("visibility","hidden");
			$("#imagerBD").css("visibility","hidden");
			$("#imagerWD").css("visibility","hidden");
            var id = $(this).attr("id");
			if(hasClass(document.getElementById("imagerGC"),"active") || hasClass(document.getElementById("imagerBC"),"active") || hasClass(document.getElementById("imagerWC"),"active")){
				$(".choice").removeClass("active");
				$(this).addClass("active");
				$("#infographic").find("img").removeClass("active");
				$("#infographic img."+id).addClass("active");
			}
			else if(hasClass(document.getElementById("imagerGD"),"active") || hasClass(document.getElementById("imagerBD"),"active") || hasClass(document.getElementById("imagerWD"),"active")){
				$(".choice").removeClass("active");
				$(this).next().addClass("active");
				$("#infographic").find("img").removeClass("active");
				$("#infographic img."+id).next().addClass("active");
			}
			$(".hint").css("visibility","visible");
			resetMultiPartSlider();
			updateImg();
        });
		showText();
		$(".hint").css("visibility","visible");
    })
	
	function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	}
	
	function showText(){
		if(hasClass(document.getElementById("imagerGC"),"active") || hasClass(document.getElementById("imagerBC"),"active") || hasClass(document.getElementById("imagerWC"),"active")){
			$(".Ctype").css("visibility","visible");
			$(".Dtype").css("visibility","hidden");
		}
		else if(hasClass(document.getElementById("imagerGD"),"active") || hasClass(document.getElementById("imagerBD"),"active") || hasClass(document.getElementById("imagerWD"),"active")){
			$(".Dtype").css("visibility","visible");
			$(".Ctype").css("visibility","hidden");
		}
	}
	
	function showPointsAni() {
        $(".point").each(function(){
			$(this).delay(randomtime).fadeOut();
            var randomtime = Math.round(Math.random() * 500);
            $(this).delay(randomtime).fadeIn(500)
			});
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        resetMultiPartSlider();
		var myVideo =  iframe.getElementById('iframeO2'); 
				myVideo.mute();
        $(window).resize(resetMultiPartSlider);
		arrowToRed();
    });
	
		var arrowToRed = function(){
		$('.PDbuttontsest').on('mouseover', function() {
				  $(this).find('#btnimgtest').attr('src', 'http://www.scopecycling.com/wp-content/themes/scope/img/next red.png');
		});
		$('.PDbuttontsest').on('mouseleave', function() {
				  $(this).find('#btnimgtest').attr('src', 'http://www.scopecycling.com/wp-content/themes/scope/img/next.png');
		});
		
		$('.PD-button2').on('mouseover', function() {
				  $(this).find('#btnimg2').attr('src', 'http://www.scopecycling.com/wp-content/themes/scope/img/next red.png');
		});
		$('.PD-button2').on('mouseleave', function() {
				  $(this).find('#btnimg2').attr('src', 'http://www.scopecycling.com/wp-content/themes/scope/img/next.png');
		});
		
		$('.PD-button3').on('mouseover', function() {
				  $(this).find('#btnimg3').attr('src', 'http://www.scopecycling.com/wp-content/themes/scope/img/next red.png');
		});
		$('.PD-button3').on('mouseleave', function() {
				  $(this).find('#btnimg3').attr('src', 'http://www.scopecycling.com/wp-content/themes/scope/img/next.png');
		});
	}
	
    var resetMultiPartSlider = function() {
		var amount;
		if($('#infographic').width() < 500){
			amount = 1;
			stopanimation4();
			animationAero();
		
			$('.PDbuttontsest').css("left","35%");
			$('.PDbuttontsest').css("top","105%");
			$('.PDbuttontsest').css("font-size","16px");
			$('#btnimg').css("margin-top","-10px");
			$('#btnimg').css("margin-left","50px");
			
			$('.PD-button2').css("left","35%");
			$('.PD-button2').css("top","115%");
			$('.PD-button2').css("font-size","16px");
			$('#btnimg2').css("margin-top","-10px");
			$('#btnimg2').css("margin-left","6px");
			
			$('.PD-button3').css("left","35%");
			$('.PD-button3').css("top","125%");
			$('.PD-button3').css("font-size","16px");
			$('#btnimg3').css("margin-top","-10px");
			$('#btnimg3').css("margin-left","9px");

			$('#priceLable').css("font-size","17px");
			$('#priceLableDiv').css("top","65%");
			$('.breakIcon').css({top:"65%"});
			$('.breakIcon').css({left:"2%"});
			$('.breakIconh2').css("font-size","15px");
			
			$('.cite-outer').css("padding-left","0%");
			$('.cite-outer').css("padding-right","0%");
			$('#whitehint').css("font-size","15px");
			
			$('#lable').css("top","0%");
		}
		else if($('#infographic').width() >= 500 && $('#infographic').width() < 800 ){
			amount = 3;

			$('.PDbuttontsest').css("left","15%");
			$('.PDbuttontsest').css("top","100%");
			$('.PDbuttontsest').css("font-size","22px");
			$('#btnimg').css("margin-top","-8px");
			$('#btnimg').css("margin-left","5px");
			
			$('.PD-button2').css("left","41.5%");
			$('.PD-button2').css("top","100%");
			$('.PD-button2').css("font-size","22px");
			$('#btnimg2').css("margin-top","-8px");
			$('#btnimg2').css("margin-left","5px");
			
			$('.PD-button3').css("left","68%");
			$('.PD-button3').css("top","100%");
			$('.PD-button3').css("font-size","22px");
			$('#btnimg3').css("margin-top","-8px");
			$('#btnimg3').css("margin-left","5px");

			$('#priceLable').css("font-size","1.5em");
			$('#priceLableDiv').css("top","78%");
			$('.breakIcon').css({width:"120px"});
			$('.breakIcon').css({top:"72%"});
			$('.breakIcon').css({left:"2%"});
			if($('#infographic').width() < 800){
				$('.breakIconh2').css("font-size","14px");
			}
			else{
			$('.breakIconh2').css("font-size","1.5em");
			}
			
			$('.cite-outer').css("padding-left","25%");
			$('.cite-outer').css("padding-right","25%");
			$('#whitehint').css("font-size","1.5em");
		}
		else if($('#infographic').width() >= 800 && $('#infographic').width() < 1000 ){
			amount = 3;
			stopanimation4();
			animationAero();
			$('.PDbuttontsest').css("left","15%");
			$('.PDbuttontsest').css("top","105%");
			$('.PDbuttontsest').css("font-size","22px");
			$('#btnimg').css("margin-top","-8px");
			$('#btnimg').css("margin-left","5px");
			
			$('.PD-button2').css("left","41.5%");
			$('.PD-button2').css("top","0%");
			$('.PD-button2').css("font-size","22px");
			$('#btnimg2').css("margin-top","-8px");
			$('#btnimg2').css("margin-left","5px");
			
			$('.PD-button3').css("left","68%");
			$('.PD-button3').css("top","105%");
			$('.PD-button3').css("font-size","22px");
			$('#btnimg3').css("margin-top","-8px");
			$('#btnimg3').css("margin-left","5px");

			$('#priceLable').css("font-size","1.5em");
			$('#priceLableDiv').css("top","87%");
			$('.breakIcon').css({width:"120px"});
			$('.breakIcon').css({top:"84%"});
			$('.breakIcon').css({left:"2%"});
			if($('#infographic').width() < 800){
				$('.breakIconh2').css("font-size","14px");
			}
			else{
			$('.breakIconh2').css("font-size","1.5em");
			}
			
			$('.cite-outer').css("padding-left","25%");
			$('.cite-outer').css("padding-right","25%");
			$('#whitehint').css("font-size","1.5em");
		}
		else{
			amount = 3;
			$('.PDbuttontsest').css("left","15%");
			$('.PDbuttontsest').css("top","105%");
			$('.PDbuttontsest').css("font-size","22px");
			$('#btnimg').css("margin-top","-8px");
			$('#btnimg').css("margin-left","5px");
			
			$('.PD-button2').css("left","41.5%");
			$('.PD-button2').css("top","0%");
			$('.PD-button2').css("font-size","22px");
			$('#btnimg2').css("margin-top","-8px");
			$('#btnimg2').css("margin-left","5px");
			
			$('.PD-button3').css("left","68%");
			$('.PD-button3').css("top","105%");
			$('.PD-button3').css("font-size","22px");
			$('#btnimg3').css("margin-top","-8px");
			$('#btnimg3').css("margin-left","5px");

			$('#priceLable').css("font-size","1.5em");
			$('#priceLableDiv').css("top","87%");
			$('.breakIcon').css({width:"120px"});
			$('.breakIcon').css({top:"84%"});
			$('.breakIcon').css({left:"2%"});
			if($('#infographic').width() < 800){
				$('.breakIconh2').css("font-size","14px");
			}
			else{
			$('.breakIconh2').css("font-size","1.5em");
			}
			
			$('.cite-outer').css("padding-left","25%");
			$('.cite-outer').css("padding-right","25%");
			$('#whitehint').css("font-size","1.5em");
		}
		
            //var amount = 3;
            var items = $("#multipart-slider").find(".multipart-slide");
            var totalWidth = $("#multipart-slider").css({overflow:"hidden",whiteSpace:"nowrap",paddingTop:"10px"}).innerWidth();
            items.css({width:totalWidth / amount, whiteSpace:"normal", textAlign:"center"});
            $("#multipart-slider").find(".multipart-slide img").css({width:"60%"});
            if (items.length > amount) {
                $("#multipart-slider").data("amount", items.length).data("current", 0);

                var controls = "<a href='javascript:void(0);' onclick='reviewLeft();' style='left:-20px; top:73%;' id='prev'></a><a id='next'  onclick='reviewRight()'  style='right:0px; top:73%;' href='javascript:void(0);'></a>"
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
        var scrollTo = current - 3;
        if (scrollTo < 0) {

            scrollTo = amount - (amount % 3) - 3;
        }
        var totalWidth = $("#multipart-slider").css({overflow:"hidden",whiteSpace:"nowrap"}).innerWidth();
        var scrollWidth = (totalWidth / 3 ) * scrollTo * -1;
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
        var scrollTo = current + 3;
        if (scrollTo > (amount - 2)) {
            scrollTo = 0;
        }
        var totalWidth = $("#multipart-slider").innerWidth();
        var scrollWidth = (totalWidth / 3 ) * scrollTo * -1;
        $("#multipart-slider").data("current", scrollTo).find(".multipart-slide").first().animate({marginLeft: scrollWidth});
        updateIndicator();
    }
    var updateIndicator = function() {
        var current = parseInt($("#multipart-slider").data("current")) / 3;
        $("#indicator2").find(".indicator").removeClass("active").get(current).className += " active";
    }
</script>

<script>
	function scrollLearnmore(){
		//window.scrollTo(0, 1110);
		scrollToY(1110, 1500, 'easeInOutQuint');
		}
		
	window.requestAnimFrame = (function(){
	  return  window.requestAnimationFrame       ||
			  window.webkitRequestAnimationFrame ||
			  window.mozRequestAnimationFrame    ||
			  function( callback ){
				window.setTimeout(callback, 1000 / 60);
			  };
	})();

	// main function
	function scrollToY(scrollTargetY, speed, easing) {
		// scrollTargetY: the target scrollY property of the window
		// speed: time in pixels per second
		// easing: easing equation to use

		var scrollY = window.scrollY,
			scrollTargetY = scrollTargetY || 0,
			speed = speed || 2000,
			easing = easing || 'easeOutSine',
			currentTime = 0;

		// min time .1, max time .8 seconds
		var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

		// easing equations from https://github.com/danro/easing-js/blob/master/easing.js
		var PI_D2 = Math.PI / 2,
			easingEquations = {
				easeOutSine: function (pos) {
					return Math.sin(pos * (Math.PI / 2));
				},
				easeInOutSine: function (pos) {
					return (-0.5 * (Math.cos(Math.PI * pos) - 1));
				},
				easeInOutQuint: function (pos) {
					if ((pos /= 0.5) < 1) {
						return 0.5 * Math.pow(pos, 5);
					}
					return 0.5 * (Math.pow((pos - 2), 5) + 2);
				}
			};

		// add animation loop
		function tick() {
			currentTime += 1 / 60;

			var p = currentTime / time;
			var t = easingEquations[easing](p);

			if (p < 1) {
				requestAnimFrame(tick);

				window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
			} else {
				console.log('scroll done');
				window.scrollTo(0, scrollTargetY);
			}
		}

		// call it once to get started
		tick();
}
</script>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
