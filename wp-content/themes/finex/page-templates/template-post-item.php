<?php
/*
Template Name: Post Item
Template Post Type: post
*/
set_query_var('header_param', 'hidden');
get_header(); ?>
    <div class="">
        <div id="primary" class="no-sidebar">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/custom-content' );

                // If comments are open or we have at least one comment, load up the comment template.
//                if ( comments_open() || get_comments_number() ) :
//                    comments_template();
//                endif;

            endwhile; // End of the loop.
            ?>
        </div><!-- #primary -->
    </div>
<?php
get_footer();
