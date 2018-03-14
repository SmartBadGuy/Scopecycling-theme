<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section>

        <div id="page-title-container">
            <div class="centerwrapper">
                <h1>Search<br><b>Results</b></h1>
            </div>
        </div>
        <div class="centerwrapper search">
        <?php get_template_part('loop'); ?>

<?php get_template_part('pagination'); ?>
    </div>
    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
