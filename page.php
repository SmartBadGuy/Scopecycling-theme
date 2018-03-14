<?php get_header(); ?>

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
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php //comments_template('', true); // Remove if you don't want comments ?>

                    <br class="clear">

                    <?php //edit_post_link(); ?>

                </article>
                <!-- /article -->
            </div>
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
