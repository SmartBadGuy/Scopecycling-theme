<?php /* Template Name: Google-maps */ get_header(); ?>

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


            <script type="text/javascript">
                var dealers = <?php
                $query_add = "";
                if (isset($_GET['country'])) {
                    $country = $_GET['country'];
                    $query_add.=" where country = '".addslashes($country)."'";
                } else {
                    $country = "";
                }
                global $wpdb;
                $dealers = $wpdb->get_results("select * from ".$wpdb->prefix."dealers".$query_add." order by `title`");
                    echo json_encode($dealers);?>;

                    $(document).ready(function(){

                        $("#country-select select").change(function(){
                                window.location.href="?country="+$(this).val();
                            }
                        );
                        <?php
    foreach($dealers as $dealer) {?>
                    setMarkerFromLatLang(<?php echo  str_replace(",",".",$dealer->lat+0);?>,<?php echo str_replace(",",".",$dealer->long+0); ?>,'<h2 style=\'color:#000;\'><?php echo addslashes($dealer->title); ?></h2><p style=\'font-size:14px;\'><?php echo addslashes($dealer->address); ?><br /><?php echo addslashes($dealer->zip); ?>,<?php echo addslashes($dealer->city) ?><br /><?php echo addslashes(countryToString($dealer->country)); ?><br /><?php echo addslashes($dealer->phone); ?><br/><a href=\'<?php echo $dealer->website; ?>\'><?php echo $dealer->website ?></a></p>');
                    <?php
                    }

                 if (!empty($country)){ ?>
                focusOnRegion("<?php echo $country; ?>");
                <?php } else { ?>
                    a(53, 2.8);
                <?php } ?>
                        });
            </script>
        <div class="centerwrapper">

            <?php
                $countriesObject = $wpdb->get_results("select country from ".$wpdb->prefix."dealers group by country");
                $countriesAvailable = array();
                foreach($countriesObject as $c) {
                    $countriesAvailable[] = $c->country;
                }
                if (count($countriesAvailable) > 1) {
                    echo "<p id=\"country-select\">".getDealerCountryList($country, $countriesAvailable)."</p>";
                }
            ?>
        </div>
        <div id="google-map"></div>
        <div class="centerwrapper">

            <div id="dealers-result">

            <?php
            $keyPart = 0;
            foreach($dealers as $key => $dealer) {
                $css = "";
                if ($keyPart == 0)
                $css = "left";
                if ($keyPart == 2) {
                    $css = "right";
                    $keyPart = -1;
                }

                ?><div class="column <?php echo $css;?>"><div class="dealer">
                                <h2 style="margin-top:0;"><?php echo $dealer->title; ?></h2>
                                <p>
                                <?php echo $dealer->address; ?><br />
                                <?php echo $dealer->zip; ?>,<?php echo $dealer->city; ?><br/>
                                <?php echo countryToString($dealer->country); ?><br />
                                <?php echo $dealer->phone; ?><br />
<!--                                <a href="mailto:--><?php //echo $dealer->email; ?><!--">--><?php //echo $dealer->email ?><!--</a><br />-->
                                <a href="<?php echo $dealer->website; ?>"><?php echo $dealer->website ?></a>
                                </p>
                                <a class="info-button" href="javascript:showMarker(<?php echo $key; ?>);">Show on map</a>
                </div></div><?php
                $keyPart++;
            } ?>
        </div>
</div>
    </section>
    <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer();


?>

