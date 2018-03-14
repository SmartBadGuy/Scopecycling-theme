<?php /* Template Name: News */ get_header(); ?>

<main role="main">
    <!-- section -->
    <section>
        <div id="page-title-container">
            <div class="centerwrapper">
                <h1><?php the_title(); ?><br /><b>Archive</b></h1>
            </div>
        </div>
        <div class="centerwrapper">
            <?php        
            
            $count_pages = wp_count_posts('post');
            $pages = round(($count_pages->publish / 9)+0.5);
            $url = esc_url( apply_filters( 'the_permalink', get_permalink() ) );
            $page = getLastPathSegment(full_url($_SERVER));
            $page = is_numeric($page)?$page:1;
            $args = array(
            'numberposts' => 9,
            'offset' => (($page * 9) - 9),
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'include' => '',
            'exclude' => '',
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'post_status' => 'draft, publish, future, pending, private',
            'suppress_filters' => true );

            $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
            
            if ($recent_posts > 0) {
                echo '<div class="centerwrapper">';
                echo '<section id="news-teaser">';
            }
            foreach($recent_posts as $post){
                                
                echo '<article class="news-teaser-wrap" style="margin-bottom:20px;>';
                $feat_image = get_the_post_thumbnail($post['ID'],'small-square', 'class=grayscale');
                if ($feat_image != ""){
                    echo '<a href="'.$post['guid'].'">';
                    echo $feat_image;
                    echo '</a>';
                }
                echo '<div class="news-details">';
                echo '<h2><a href="'.$post['guid'].'">'.$post['post_title'].'</a></h2>';
                echo '<a href="'.$post['guid'].'"><p>'.cut_at_characters($post['post_content'], 100).' </p></a>';
                //<a href="'.$post['guid'].'" class="read-more">'.translate("Show more detail", 'news').'</a>
				echo '</div>';
                echo '</article>';
            }
            if ($recent_posts > 0) {
                echo '</section></div>';
            }
            
            if ($pages > 1) {
                echo '<div id="pager"><ul>';
                    if ($page != 1){
                        echo '<li class="arrow"><a href="'.$url.($page-1).'"><i class="fa fa-chevron-left"></i></a></li>';
                    }
                    $tmp_pages = 1;
                    while ($tmp_pages < $pages+1){
                        
                        if ($tmp_pages > $page-10 && $tmp_pages < $page+10)
                        echo '<li'.($tmp_pages == $page?' class="active"':"").'><a href="'.$url.($tmp_pages).'">'.$tmp_pages.'</a></li>';
                        $tmp_pages++;
                    }
                    
                    if ($page < $pages){
                        echo '<li class="arrow"><a href="'.$url.($page+1).'"><i class="fa fa-chevron-right"></i></a></li>';
                    }
                echo '</ul></div>';
            }
            ?>
        </div>
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
