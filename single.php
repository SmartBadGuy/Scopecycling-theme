<?php $_GET['is_news'] = true; get_header(); ?>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1><span style="display:none;"><?php the_title(); ?></span>News <br /><b>Detail</b></h1>
            </div>
        </div>
	<main role="main">
            <div class="centerwrapper">
	<!-- section -->
	<section id="single">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->
			
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
        </div>
	</main>

<?php get_sidebar(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        var index = $('ul[data-parent="9"]').addClass('current-submenu').show().index();//hackingtosh
        $("#top-nav li:nth-child(3)").addClass('current-menu-item');
        $(".current-submenu li a").each(function(){
            if (this.innerHTML == "News"){
                $(this).parent().addClass("current_page_item");
            }
        });
    })
</script>
<?php get_footer(); ?>
