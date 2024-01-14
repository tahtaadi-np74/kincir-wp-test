<?php
// include header.php
get_header(); 
?>

<main>
    <div class="container">
        <h2>Latest Post</h2>
        <div class="articles">
            <?php 
            // wp_query argument portfolio custom post type
            $args = array(
                'post_type'      => 'portfolio',
                'posts_per_page' => 5,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            // query portfolio custom post type
            $portfolio_query = new WP_Query($args);

            // loop portfolio custom post type
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                // reset post data
                wp_reset_postdata();
            else :
                echo '<p>No portfolio items found.</p>';
            endif;
            ?>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php
// include footer.php
get_footer();
?>
