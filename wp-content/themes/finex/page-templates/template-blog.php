<?php
/**
 * Template Name:All Blog
 *
 * Displays the Home page with Parallax effects.
 *
 */
?>

<?php get_header();  ?>

<section>
    <div class="container">
        <h1 class="text-center">Blog</h1>
        <div id="posts" class="row">
            <?php
            global $post;
            $args = array( 'posts_per_page' => 10 , 'category_name' => 'blog');
            $lastposts = get_posts( $args );
            $image = '<img class="wp-post-image" alt="" src="' . get_template_directory_uri() . '/assets/images/blog-imag.png" />';

            foreach ( $lastposts as $post ) :
                setup_postdata( $post ); ?>
                <?php
                set_query_var( 'image', $image );
                get_template_part( 'template-parts/content-blog-item' );
                ?>

            <?php endforeach;
            wp_reset_postdata(); ?>
            <div class="clearfix"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>