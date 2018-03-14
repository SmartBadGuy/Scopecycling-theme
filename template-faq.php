<?php /* Template Name: Faq */ get_header(); ?>

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

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>
 
            <?php $faq = array();
            global $wpdb;
            $rows = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "faq order by `order`");
            
                $faq[] = array("Is there a weight limit for Scope Cycling wheels?","The Scope Cycling wheels have been thoroughly tested in all areas of road cycling. With field-testing on different terrains and lab tests for brake performance, the maximum rider weight for all Scope Cycling wheels has been defined on 95 kg.
");
                $faq[] = array("Why are Scope Cycling wheels build with exposed nipples?","Hiding the nipple on our rims makes no less drag than having the nipple exposed at all wind angles. This, as it turns out, is due to the unique U-shape section of our rim. As a result, the final 14mm of the spoke is shielded, allowing us to keep the nipples exposed for ease of wheel maintenance without increasing drag.");
                $faq[] = array("Are the wheels of Scope Cycling 11 speed compatible?","Yes, all wheels of Scope Cycling have been developed from an 11 speed compatibility approach.  However, the wheels of Scope Cycling are also 9 and 10 speed backwards compatible.");
                $faq[] = array("Does Scope Cycling offer Campagnolo compatible free-hubs?","Yes, Scope Cycling offers for all of the wheel sets compatibility with Campagnolo 9, 10 and 11 speed cassettes.");
                $faq[] = array("Can I also use other than the Scope Cycling brake pads on my Scope Cycling wheels?","No, you can't. The brake pads supplied with the Scope Cycling wheels are specially develop in combination with our carbon rims. The Scope Cycling brake pads will ensure maximum braking power and heat resistance under extreme conditions. Not using the recommended Scope Cycling brake pads will void the Scope Cycling warranty of the wheels.<br /><br />
In addition, it’s recommended to keep the brake pads used for alloy rims separate from the ones used on carbon rims to avoid alloy splinters which scratch the carbon and possibly may damage the fibers.");
                $faq[] = array("How do I choose the correct tire width?","The tire width highly depends on user preference and conditions. In general, a 21mm has superior aerodynamics in combination with our rims. A 23mm width tire subsequently has a better ride quality and rim protection, but at a slight aero penalty.<br />
");
                if (empty($rows)){
                    foreach ($faq as $key=>$f){
                        $wpdb->query('INSERT INTO '.$wpdb->prefix . 'faq (`id`,`order`,`title`,`text`) values ("'.($key+1).'","'.$key.'","'.$f[0].'","'.$f[1].'");');
                        $rows = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "faq order by `order`");
                    }
                }
                echo '<div id="faq">';
                foreach($rows as $f){
                    echo '<div class="faq"><h2 class="white">'.$f->title.'</h2></div>';
                    echo '<div class="faq-description"><p>'.$f->text.'</p></div>';
                }
                echo '</div>';
                
            ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#faq .faq").click(function(){
            
            if (!$(this).next().is(":visible")){
                $("#faq .faq-description").hide();
                $(this).next().show();
            } else {
                $(this).next().hide();
            }
        })
    });
</script>
</div>
    </section>
</main>
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
