<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1><?php _e( 'Page not<br /> <b>found</b>', 'scope' ); ?></h1>
            </div>
        </div>
			<!-- article -->
			<article id="post-404">
                            <div class="centerwrapper">
				<p>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</p>
</div>
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
