<?php /* Template Name: OemBikes */ get_header(); ?>

<main role="main">
    <!-- section -->
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
        
                
<div class="centerwrapper">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php   the_content(); ?>

                    <?php //comments_template('', true); // Remove if you don't want comments ?>

                    <br class="clear">

                    <?php //edit_post_link(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

        <?php endif; ?>
 

</div>
        <div class="centerwrapper">
            <div id="multipart-slider">
                <div id="slider-controls"></div>
            <?php
                global $wpdb;
                $oems = $wpdb->get_results("select * from ".$wpdb->prefix."oem_slider".$query_add." order by `title`");
    
                foreach($oems as $oem) {
                    echo '<div class="multipart-slide column">';
                    echo '  <a data-lightbox="oem-bike" href="'.get_template_directory_uri().'/img/oem/'.$oem->bike.'"><img style="" src="'.get_template_directory_uri().'/img/oem/'.$oem->bike.'" alt="'.$oem->title.'">';
                    echo '  <a href="'.$oem->link.'" target="_blank" style="display:block;"><img style="display:block;max-height:60px;max-width:80% !important;margin:0 auto;" src="'.get_template_directory_uri().'/img/oem/'.$oem->logo.'" alt="logo" /></a>';
                    echo '</div>';
                }
            ?>
                
            </div>
            <div id="indicator2" class="iindicator" style="position:relative;height:30px;bottom:0;padding-top:10px;"></div>
        </div>
    </section>
</main>
<script type="text/javascript">
    $(document).ready(function(){
        resetMultiPartSlider();
        $(window).resize(resetMultiPartSlider);
    });
    var resetMultiPartSlider = function() {
            var amount = 3;
            var items = $("#multipart-slider").find(".multipart-slide");
            var totalWidth = $("#multipart-slider").css({overflow:"hidden",whiteSpace:"nowrap"}).innerWidth();
            items.css({width:totalWidth / amount, whiteSpace:"normal", textAlign:"center"});
            $("#multipart-slider").find(".multipart-slide a[data-lightbox] img");
            if (items.length > amount) {
                $("#multipart-slider").data("amount", items.length).data("current", 0);

                var controls = "<a href='javascript:void(0);' onclick='reviewLeft();' style='left:-20px;' id='prev'></a><a id='next'  onclick='reviewRight()'  style='right:0px;' href='javascript:void(0);'></a>"
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

            scrollTo = amount - (amount % 3);
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
<?php get_footer();

//In order to select your best fitting the tire width, here is some guidance:<br /><br />
//Triathlon/Time trial = - 21mm<br />
//Road racing = - 23mm<br />
//Training and/or daily riding = 23mm+<br />
//<br />
//Dry = 21mm at normal recommended pressure.<br />
//Wet = 23mm at a slightly lower pressure.<br />
//<br />
//Smooth roads = 21mm at normal recommended pressure.<br />
//Rough roads = 23mm at a slightly lower pressure.<br />

?>
