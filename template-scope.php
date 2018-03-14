<?php /* Template Name: Scope */ get_header(); ?>

<main role="main">
    <!-- section -->
    <section>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1><?php print get_the_block("Title, line 1",array(
    'type'          => 'one-liner',
    'apply_filters' => false
)); ?><br /><b><?php print get_the_block("Title, line 2",array(
    'type'          => 'one-liner',
    'apply_filters' => false
)); ?></b></h1>
            </div>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="centerwrapper">
                <!-- article -->
					<img style="width:100%;" class="alignright wp-image-262 size-large" src="../wp-content/themes/scope/img/pictures/Nieck_Rik retouched_cropped.jpg" alt="Nieck &amp; Rik Founders Scope Cycling" />
				<div class="half-column" style="width:49.5%;">
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Left paragraph 1 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Left paragraph 1 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Left paragraph 1", array() ); ?>
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Left paragraph 2 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Left paragraph 2 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Left paragraph 2", array() ); ?>
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Left paragraph 3 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Left paragraph 3 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Left paragraph 3", array() ); ?>
				</div>
				<div class="half-column" style="width:49.5%;">
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Right paragraph 1 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Right paragraph 1 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Right paragraph 1", array() ); ?>
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Right paragraph 2 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Right paragraph 2 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Right paragraph 2", array() ); ?>
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Right paragraph 3 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Right paragraph 3 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Right paragraph 3", array() ); ?>
				</div>
				
                <!-- /article -->
				<img src="../wp-content/themes/scope/img/no_excuse.png" style="height:80px;margin-left:40%;margin-bottom:15px;"></img>
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Middle paragraph line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Middle paragraph 3 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Middle paragraph 3", array() ); ?>
				<style>
				#anim{
					transition: width 4s;
					transition-timing-function: ease-out;
					background-repeat: no-repeat;
					background-size: 1200px 520px;
					background-image: url(../wp-content/themes/scope/img/pictures/Time_line_grey.png); width:5px; height:520px;
				}
				</style>
				<div id="anim" style="height:520px">
				</div>
				<div style="margin-bottom:50px;">
				<h2 class="title" style="margin-bottom:0px;"><?php print get_the_block("Middle paragraph 4 line 1",array('type'=> 'one-liner','apply_filters' => false));?>
					<b><br><?php print get_the_block("Middle paragraph 4 line 2",array('type'=> 'one-liner','apply_filters' => false));?></b></h2>
                    <?php print get_the_block("Middle paragraph 4", array() ); ?>
				</div>
				
				
				
            </div>
			
			
            <?php endwhile; ?>
        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>

		<script>
			$(document).ready(function(){
								$(window).scroll(function() {
									if( $(document).scrollTop() > 900 ) {
											$('#anim').css("width","100%");
									} 
									else
									{
										$('#anim').css("width","50px");
									}
								});
								});
			</script>
    </section>
    <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>


