<footer class="footer" role="contentinfo">
    <div id ="footer-top">
        <div id="footer-border">
            <div class="centerwrapper">
                <div id="border-top-link">
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="centerwrapper">
            <div class="column left" >
                <h2>Scope Cycling</h2>
                <p class="info">Hand built full carbon clincher wheels and components of Scope Cycling for road racing that are a true competitive advantage and have a sleek and elegant design. No Excuse.</p>
                    <!--<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">-->
<!--                    <p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br></p>
                    <a class="info-button" href="#scope">read more</a>-->
            </div><div class="column">
                <img style="margin-top:20px;width:80%;" id = "footerimg" src="<?php echo get_template_directory_uri(); ?>/img/logos/DitNeW.png"></img>
            </div><div class="column right">
			<!--
			<script>
			$(document).ready(function(){
					resizefooter();
					$(window).resize(resizefooter);
				});
				
				var resizefooter = function() {
					if($('.centerwrapper').width() < 400){
						$('#footerimg').css("width","80%");
					}
					
					else if($('.centerwrapper').width() >= 400 && $('.centerwrapper').width() < 850){
						$('#footerimg').css("width","30%");
					}
					else if($('.centerwrapper').width() >= 850){
						$('#footerimg').css("width","80%");
					}
				}
			</script>-->
			<h2>Social networks</h2>
                <p class="info">"Follow Scope Cycling in social situations"</p>
                <div id="social-icons">
                    <ul>
                        <li class="icon icon-twitter"><a href="https://twitter.com/ScopeCycling"></a>
                        </li><li class="icon icon-facebook"><a href="https://www.facebook.com/ScopeCycling"></a>
<!--                        </li><li class="icon icon-flickr"><a href="#"></a>
                        </li><li class="icon icon-dribble"><a href="#"></a>-->
                        </li><li class="icon icon-youtube"><a href="https://youtube.com/ScopeCycling"></a>
                        <!--</li><li class="icon icon-googleplus"><a href="https://plus.google.com/+ScopecyclingOfficial"></a>-->
                        <!--</li><li class="icon icon-vimeo"><a href="#"></a>-->
                        <!--</li><li class="icon icon-linkedin"><a href="#"></a>
                        </li><li class="icon icon-yelp"><a href="#"></a>
                        </li><li class="icon icon-blip"><a href="#"></a>-->
                        </li><li class="icon icon-instagram"><a href="http://instagram.com/scopecycling"></a>
                        <!--</li><li class="icon icon-disqus"><a href="#"></a>-->
                        </li>
                    </ul>
                </div>
			</div>
                
        </div>
    </div><div id ="footer-bottom">
        <div class="centerwrapper">
            
            <p class="copyright">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Scope Cycling logo" class="logo-footer">
                &copy; <?php echo date('Y'); ?> Copyright Scope Cycling. All rights reserved. Created by
                <a href="//oneguyandacat.com" title="WordPress">One guy and a cat</a>.
            </p>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>

</div>

<?php // wp_footer(); ?>

<script type="text/javascript">
           var responsibleVisible = false;
           var sliderInterval = null;
           var isRunning = false;
		   
    $(window).load(function(){
//       $("#all-submenus ul").hide();
       $("#the-menu-button").click(function(){
           
           if (responsibleVisible){
               $("#the-actual-menu").stop().slideUp();
           } else {
               $("#the-actual-menu").stop().slideDown();
           }
           
           responsibleVisible = !responsibleVisible;
       });
       onWindowResize();
       slide();
       setSlider();
       showPoints();
       $( window ).resize(onWindowResize);
       $("img[data-original]").each(function(){
                    origimg = $(this).attr("data-original");
                    var c = new Image();
                    c.element = this;
                    c.src = origimg;
                    c.onload = function(){
                        $(c.element).attr("src",this.src);
                    }
                });
        var timeout;
        var timeoutClear;
        $('nav a').hover(
            function() {
        
                var e = $(this).parent();
                if (e.hasClass("menu-item") && e.parent().attr("id") == "top-nav"){
                    var submenuclass = menu[e.index()];
                    var eLeft = e.find("a").offset().left;
                    
                    $(".nav.subnav ul").hide();
//                    $("#"+submenuclass).css("marginLeft",eLeft);
                    $("#"+submenuclass).stop().show();
                }
        
                clearTimeout(timeoutClear);
                timeout = setTimeout(function(){
                    // do stuff on hover
                    showSubmenu();
                    
                }
                , 250); //1 seconds
            },
            function(){
                clearTimeout(timeout);
                timeoutClear = setTimeout(function(){
                    // do stuff on hover
                    hideSubmenu();
                    
                }
                , 1500); //3 seconds
            }
        );
    });
    function showSubmenu() {
//        $("#main_navigation").hide();
    
//        $("#all-submenus").animate({marginTop:75},500);
    }
    function hideSubmenu() {
        
        $(".nav.subnav ul").hide();
        $(".current-submenu").show();
//        $("#all-submenus").animate({marginTop:-25},500);
    }
    function onWindowResize(){
//        $(".fullscreenimage img").each(function(){
//           img = $(this);
//           parent = $(this).parent();
//
//           if (parent.height() < img.height()){
//                height = ((img.height() - parent.height()) / 2) * -1;
//                img.css("marginTop",height);
//           }
//       });
       $('#slider[data-iteration="true"] .slider-element').each(function(){
           $(this).css("top","0");
           if ($(this).parent().height() < $(this).height()){
                height = (($(this).height() - $(this).parent().height()) / 2) * -1;
                $(this).css("top",height);
           }
       });
        $(".slider-content").each(function(){
            var height = $(this).closest(".slider-element").outerHeight();
            var sliderHeight = $("#slider").outerHeight();
            var toPos = (height / 2) - (sliderHeight / 2);
            $(this).css("bottom", toPos);
        });
		
		$('#homevideo').parent().each(function(){
			   $(this).css("top","0");
			   
			   if ($('#slider').width() < 1220){
					
					$('.slider-element').css("width","1220px");
					
					var width = $(this).closest(".slider-element").outerWidth();
					var height = $(this).closest(".slider-element").outerHeight();
					var sliderWidth = $("#slider").outerWidth();
					var sliderHeight = $("#slider").outerHeight();
					var toPos =  (sliderWidth / 2) - (width / 2);
					var toPosH = (sliderHeight / 2) - (height / 2);
					var buttonpos = toPos/width;
					$('.slider-element').css("left",toPos);
					$('#mute-button').css("right",(-100 * buttonpos) + 2 + "%");
					$('#unmute-button').css("right",(-100 * buttonpos) + 2 + "%");
					$('#mute-button').css("top",("60%"));
					$('#unmute-button').css("top",("60%"));
					$('#indicator').css("bottom",("75px"));
					if($('#slider').width() < 450){
						$('.centerwrapperpics a:first-child').css("marginLeft","0%");
						$('.centerwrapperpics a:first-child').next().css("marginLeft","0%");
						$('#picfonts h2:first-child').css("font-size", ("2em"));
						$('#picfonts h2:first-child').css("padding-bottom", ("18px"));
						$('#picfonts h2:first-child').next().css("font-size", ("2em"));
						$('.mute-button').css("top",("62%"));
						$('.unmute-button').css("top",("62%"));
					}
					else if($('#slider').width() < 650 && $('#slider').width()>= 450){
						$('.centerwrapperpics a:first-child').css("marginLeft","25%");
						$('.centerwrapperpics a:first-child').next().css("marginLeft","25%");
						$('#picfonts h2:first-child').css("font-size", ("1.9em"));
						$('#picfonts h2:first-child').css("padding-bottom", ("29px"));
						$('#picfonts h2:first-child').next().css("font-size", ("1.9em"));
						$('.mute-button').css("top",("60%"));
						$('.unmute-button').css("top",("60%"));
					}
			   }
			   else{
				   $('.slider-element').css("width","100%");
				   $('.slider-element').css("left","0");
				   $('#mute-button').css("right","2%");
					$('#unmute-button').css("right","2%");
						$('.centerwrapperpics a:first-child').css("marginLeft","2%");
						$('.centerwrapperpics a:first-child').next().css("marginLeft","2%");
						$('#picfonts h2:first-child').css("font-size", ("3em"));
						$('#picfonts h2:first-child').css("padding-bottom", ("29px"));
						$('#picfonts h2:first-child').next().css("font-size", ("3em"));
					$('.mute-button').css("top",("74%"));
					$('.unmute-button').css("top",("74%"));
					$('#indicator').css("bottom",("30px"));
			   }
			   
			   
		   });
    }
    

    function setSlider(){
        $("#slider[data-iteration=\"true\"]").each(function(){
            if (!isRunning) {
                sliderInterval = setInterval(slide, 5000);
            }
            isRunning = true;
        });
    }
    
    function prevslide(){
		if($("#slider div:first-child").hasClass("active")){
			$('#homevideo').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*')
			});
		}
		if($("#slider div:first-child").next().hasClass("active")){
			$('#homevideo').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')
			});
		}
		
        stopSlide(sliderInterval);//stop fading for a bit, might switch after click.
        $("#slider .slider-element.active").css("zIndex",2).stop().animate({opacity:0},1500, hide);
        $("#slider .slider-element.active").prev().css({zIndex:1,opacity:1,visibility:"visible"});
        $("#slider .slider-element.active").removeClass("active").prev().addClass("active");

        if ($("#slider .slider-element.active").size() < 1 ){
            $("#slider .slider-element:last-child").addClass("active").css({opacity:1,visibility:"visible"});
        }
        $("#indicator a.active").removeClass("active").prev().addClass("active");
        if ($("#indicator a.active").size() < 1 ){
            $("#indicator a:last-child").addClass("active").css({opacity:1,visibility:"visible"});
        }
    }
    function nextslide(){
		if($("#slider div:first-child").hasClass("active")){
			//$('#homevideo').each(function(){
			//	this.contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*')
			//});
		}
		if($("#slider div:last-child").hasClass("active")){
			//$('#homevideo').each(function(){
			//	this.contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')
			//});
		}
		
        stopSlide(sliderInterval);//stop fading for a bit, might switch after click.
        $("#slider[data-iteration=\"true\"] .slider-element.active").css("zIndex",2).stop().animate({opacity:0},1500, hide);
        $("#slider[data-iteration=\"false\"] .slider-element.active").css("zIndex",2).stop().animate({opacity:0},100, hide);
        $("#slider .slider-element.active").next().css({zIndex:1,opacity:1,visibility:"visible"});
        $("#slider .slider-element.active").removeClass("active").next().addClass("active");
        if ($("#slider .slider-element.active").size() < 1 ){
            $("#slider .slider-element:first-child").addClass("active").css({opacity:1,visibility:"visible"});
        }
		if($("#slider .slider-element.active") == $("#slider div:first-child")){
			$("#slider.first-child").replaceWith("<div></div>");
		}
        $("#indicator a.active").removeClass("active").next().addClass("active");
        if ($("#indicator a.active").size() < 1 ){
            $("#indicator a:first-child").addClass("active").css({opacity:1,visibility:"visible"});
        }
        setSlider();
    }

    function starthomevideo(){      
        $('#homevideo').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*')
			});
    }
	function stophomevideo() {
		$('#homevideo').each(function(){
			this.contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*')
		});
	}
	
	function mute(){
		$("#mute-button").css({visibility:"hidden"});
		$("#unmute-button").css({visibility:"visible"});
		$('#homevideo').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"' + 'mute' + '","args":""}', '*')
			});
	}
	function unmute(){
		$("#mute-button").css({visibility:"visible"});
		$("#unmute-button").css({visibility:"hidden"});
		$('#homevideo').each(function(){
				this.contentWindow.postMessage('{"event":"command","func":"' + 'unMute' + '","args":""}', '*')
			});
	}
	
    function slideto(int){
        int++;
        stopSlide(sliderInterval);//stop fading for a bit, might switch after click.
        $("#slider[data-iteration=\"true\"] .slider-element.active").css("zIndex",2).stop().animate({opacity:0},1500, hide);
        $("#slider[data-iteration=\"false\"] .slider-element.active").css("zIndex",2).stop().animate({opacity:0},100, hide);
        $("#slider .slider-element:nth-child("+int+")").stop().css({zIndex:1,opacity:1,visibility:"visible"});
        $("#slider .slider-element.active").removeClass("active");
        $("#slider .slider-element:nth-child("+int+")").addClass("active");

        $("#indicator a.active").removeClass("active");
        $("#indicator a:nth-child("+int+")").addClass("active");
        setSlider();
		if($("#slider div:first-child").hasClass("active")){
			//starthomevideo();
		}
		if(!$("#slider div:first-child").hasClass("active")){
			//stophomevideo();
		}
    }
    
    function slide(){
		if(!$("#slider div:first-child").hasClass("active")){
			$("#slider[data-iteration=\"true\"] .slider-element.active").css("zIndex",2).stop().animate({opacity:0},1500, hide);
			$("#slider[data-iteration=\"false\"] .slider-element.active").css("zIndex",2).stop().animate({opacity:0},100, hide);
			//$("#slider .slider-element.active").next().css({zIndex:1,opacity:1,visibility:"visible"});
			$("#slider .slider-element.active").removeClass("active").next().addClass("active");
			if ($("#slider .slider-element.active").size() < 1 ){
				$("#slider .slider-element:first-child").addClass("active").css({opacity:1,visibility:"visible"});
			}
			$("#indicator a.active").removeClass("active").next().addClass("active");
			if ($("#indicator a.active").size() < 1 ){
				$("#indicator a:first-child").addClass("active").css({opacity:1,visibility:"visible"});
			}
			setTimeout(function(){
				if ($("#slider .slider-element.active .play-button").length > 0) {
					stopSlide(sliderInterval);
					setTimeout(setSlider, 5000);
				}
			},500);
			if($("#slider div:first-child").hasClass("active")){
				//starthomevideo();
			}
			if(!$("#slider div:first-child").hasClass("active")){
				//stophomevideo();
			}
			
		}
    }

    function stopSlide(sliderId) {
        clearInterval(sliderId);
        isRunning = false;
    }

    function showPoints() {
        $(".point").each(function(){
            var randomtime = Math.round(Math.random() * 500);
            $(this).delay(randomtime).fadeIn(500)
        });
    }

    function reveal() {
        $(this).css('visibility', 'visible');
    }
    function hide() {
        $(this).css('visibility', 'hidden');
    }
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50572611-1', 'scopecycling.com');
  ga('send', 'pageview');
    FastClick.attach(document.body);
</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
</body>
</html>
<?php 
$content = ob_get_contents();
require_once 'image.php';
require_once 'file.php';
function data_uri_callback($matchess) {
    $array = array();
    preg_match( '/src="([^"]*)"/i', $matchess[0], $array ) ;
    $original = $array[0];
    $ea = explode('"',$array[0]);
    $array[0] = $ea[1];
    $absolute = substr(ABSPATH,0,-1);

    $thumb = str_replace(site_url(),"",$array[0]);
    $thumb = str_replace("/","__THISISASLASH__",$thumb);
//    $thumb = str_replace("__THISISASLASH__img__THISISASLASH__","/tmp/",$thumb);
    $thumb = str_replace("__THISISASLASH__","_",$thumb);
    $thumb = site_url().$thumb;
    $realfile = str_replace("/",DIRECTORY_SEPARATOR,str_replace(site_url(),get_theme_root()."/".wp_get_theme()."/tmp/",$thumb));
    $thumb = str_replace(DIRECTORY_SEPARATOR,"/",str_replace(str_replace("/",DIRECTORY_SEPARATOR,get_theme_root()."/".wp_get_theme()),get_template_directory_uri(),$realfile));
    $realoriginal = str_replace("/",DIRECTORY_SEPARATOR,str_replace(site_url(),$absolute,$array[0]));
    if (strstr($array[0], ".jpg")){
        if (!file_exists($realfile)){
            Image::setQuality($realoriginal, $realfile, 5);
        }
        return str_replace(">","data-original=\"".$array[0]."\">",str_replace($array[0],$thumb,$matchess[0]));
    } else if (strstr($array[0], ".png")){
        if (!file_exists($realfile)){
            Image::setQuality($realoriginal, $realfile, 5);
        }
        return str_replace(">","data-original=\"".$array[0]."\">",str_replace($array[0],$thumb,$matchess[0]));
    }

    return  $matchess[0];
}
//$content = preg_replace_callback("%<img .*?src=['\"](.*?)['\"]%s", "data_uri_callback", $content);

$content = preg_replace_callback("(<img\s+[^>]+>)", "data_uri_callback", $content);
//die;
ob_end_clean(); 

print $content;
?>



