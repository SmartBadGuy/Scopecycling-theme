<?php /* Template Name: Gear */ get_header(); 

$accessoires = array(
                        array(
                            'name' => "Double wheel bag",
                            "url" => "wheel-bag",
                            "img" => "8.png",
                            "type" => 1,
                            "points" => array(
                                array("top" => 26, "left" => 47, "name" => "wheelbag-strap"),
                                array("top" => 45, "left" => 38, "name" => "wheelbag-double", 'is_right' => true),
                                array("top" => 60, "left" => 55, "name" => "wheelbag-toolpocket")
                            )
                        ),array(
                            'name' => "Quick release",
                            "url" => "quick-release",
                            "img" => "1.png",
                            "type" => 1,
                            "points" => array(
                                array("top" => 52, "left" => 35, "name" => "release-weight", 'is_right' => true),
                                array("top" => 40, "left" => 64, "name" => "release-material"),
                                array("top" => 61.5, "left" => 69, "name" => "release-material2")
                            )
                        ),array(
                            'name' => "Brake pads",
                            "url" => "brake-pads-1",
                            "img" => "2.png",
                            "type" => 0,
                            "points" => array(
                                array("top" => 38, "left" => 45, "name" => "brake-1-scope-compound"),
                                array("top" => 61, "left" => 20, "name" => "brake-1-performance"),
                                array("top" => 55, "left" => 65, "name" => "brake-1-shimano-campagnolo")
                            )
                        ),array(
                            'name' => "Valve extenders",
                            "url" => "valve-extenders",
                            "img" => "3.png",
                            "type" => 1,
                            "points" => array(
                                array("top" => 42, "left" => 49, "name" => "valve-size"),
                                array("top" => 52, "left" => 63, "name" => "valve-tool")
                            )
                        ),array(
                            'name' => "Bearings",
                            "url" => "bearings",
                            "img" => "5.png",
                            "type" => 0,
                            "points" => array(
                                array("top" => 39, "left" => 53, "name" => "bearings"),
                            )
                        ),array(
                            'name' => "Rim-tape",
                            "url" => "rim-tape",
                            "img" => "6.png",
                            "type" => 1,
                            "points" => array(
                                array("top" => 32, "left" => 45, "name" => "rim-tape-snap"),
                                array("top" => 50, "left" => 27, "name" => "rim-tape-700c"),
                                array("top" => 60, "left" => 55, "name" => "rim-tape-20mm")
                            )
                        ),array(
                            'name' => "Free hub",
                            "url" => "free-hub",
                            "img" => "7.png",
                            "type" => 0,
                            "points" => array(
                                array("top" => 36, "left" => 40, "name" => "freehub-alloy"),
                                array("top" => 57, "left" => 55, "name" => "freehub-lightweight")
                            )
                        )
                    );
            $url = esc_url( apply_filters( 'the_permalink', get_permalink() ) );

?>

<main role="main">
    <!-- section -->
    <section>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1>
<?php 
$current_item = false;
$page = getLastPathSegment(full_url($_SERVER));
if (is_numeric($page) && isset($accessoires[$page])){
    $current_item = $accessoires[$page];
    echo ''.($current_item['type']?"Accessoires":"Spare-Parts").'<br /><b>'.$current_item['name'].'';
}
if (!$current_item) {
                    print get_the_block("Title, line 1",array(
    'type'          => 'one-liner',
    'apply_filters' => false
)); ?><br><b>
<?php print get_the_block("Title, line 2",array(
        'type'          => 'one-liner',
        'apply_filters' => false
    ));
}
?></b></h1>
            </div>
        </div>
        <?php if (!$current_item){ ?>
        <div class="centerwrapper"><div class="half-column" id="accessoires">
                <div class="redline">
                    <h2><?php _e("Accessoires"); ?></h2>
                </div>    
                <?php 
                    
                    foreach ($accessoires as $k => $part){
                        get_the_block($part['name']." detail Description");
                        if ($part['type'] != 1)
                            continue;
                        echo '<div class="infographic">';
                        echo '<h2 class="whitelable"><a style="color:#ffffff" href="'.$url.$k.'/?item='.$part['url'].'">'.$part['name'].'</a></h2>';
                        foreach($part['points'] as $point){ ?>
                            <?php get_the_block($point['name']." title",array('type' => 'one-liner','apply_filters' => false));?>
                            <?php get_the_block($point['name']." Description",array('type'=> 'one-liner','apply_filters' => false));?>
                            
                        <?php
                        }
                        echo '<a href="'.$url.$k.'/?item='.$part['url'].'"><img class="whitelable active" src="'.get_template_directory_uri().'/img/gear/'.$part['img'].'" alt="Scope Cycling '.$part['name'].'" /></a>';
                        echo '</div>';
                    }
                ?>
            </div><div class="half-column" id="spare-parts">
                <div class="redline">
                    <h2><?php _e("Spare parts"); ?></h2>
                </div>
                <?php 
                    
                    foreach ($accessoires as $k => $part){
                        if ($part['type'] != 0)
                            continue;
                        echo '<div class="infographic">';
                        echo '<h2 class="whitelable"><a style="color:#ffffff" href="'.$url.$k.'/?item='.$part['url'].'">'.$part['name'].'</a></h2>';
                        foreach($part['points'] as $point){ ?>
                            <?php get_the_block($point['name']." title",array('type' => 'one-liner','apply_filters' => false));?>
                            <?php get_the_block($point['name']." Description",array('type'=> 'one-liner','apply_filters' => false));?>
                        <?php
                        }
                        echo '<a href="'.$url.$k.'/?item='.$part['url'].'"><img class="whitelable active" src="'.get_template_directory_uri().'/img/gear/'.$part['img'].'" alt="Scope Cycling '.$part['name'].'" /></a>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
        <?php } else {
            echo '<div class="centerwrapper">';
            
            echo '<a  style="left:0;z-index:10000;color:#fff;display:inline-block;padding:5px 10px 5px 10px;position:absolute;margin-top:1%;background" class="back-button" href="../">&lt; Back</a>';

            echo '<div class="infographic gear">';
            foreach($current_item['points'] as $point){ ?>
            <div class="point <?php if (isset($point['is_right'])){ echo "right";} ?>" style="top:<?php echo $point['top'];?>%;left:<?php echo $point['left'];?>%">
            <h2><?php $b = get_the_block($point['name']." title",array('type' => 'one-liner','apply_filters' => false)); if (empty($b)){echo "&nbsp;";} else { echo $b;} ?></h2>
                <div class="line">
                    <div class="pointer"></div>
                </div>
                <span><?php print get_the_block($point['name']." Description",array('type'=> 'one-liner','apply_filters' => false));?>&nbsp;</span>
            </div>
            <?php
            }
            echo '<img style="width:90%" class="whitelable active" src="'.get_template_directory_uri().'/img/gear/'.$current_item['img'].'" alt="Scope Cycling '.$current_item['name'].'" />';
            echo '</div>';
            echo '<div class="detail-gear" class="gear-text"><p>'.get_the_block($current_item['name']." detail Description").'</p></div>';

            echo '</div>';
        } ?>
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

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
