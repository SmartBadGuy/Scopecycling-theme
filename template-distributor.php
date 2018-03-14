<?php /* Template Name: distributor */ get_header(); ?>

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
                $dealers = $wpdb->get_results("select * from ".$wpdb->prefix."distributor".$query_add." order by `title`");
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

            <div id="dealers-result">
			<h1 style="text-align:center;color:white;font-size:3em;font-weight:unset; margin-bottom:30px;">OUR WORLDWIDE NETWORK</h1>
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

                ?><div class="column <?php echo $css;?>"><div class="dealer" >
				<meta name="format-detection" content="telephone=no">
                                <h1 style="margin-top:0;text-align: center;font-size:2.5em; color: #ffffff; font-weight: unset;"><?php echo $dealer->title; ?><br /></h1>
								<h2 style="margin-top:40px;font-size:1.4em; margin-bottom:0;">
								<?php echo $dealer->Oneway_Distribution; ?><br />
								</h2>
								<p style="margin-top:0;">
								<?php echo $dealer->address; ?>, <?php echo $dealer->zip; ?>, <?php echo $dealer->country; ?><br />
								<?php echo $dealer->email; ?><br />
								<?php echo $dealer->phone; ?><br />
								<a href="http://<?php echo $dealer->website ?>" rel="noopener noreferrer" target="_blank"><?php echo $dealer->website ?></a>
                                </p>
								</meta>
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

