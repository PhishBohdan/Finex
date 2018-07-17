<?php
/**
 * Template part for displaying posts.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */

$dropcaps      = get_theme_mod( 'first_letter_caps', true );
$enable_tags   = get_theme_mod( 'tags_post_meta', true );
$post_author   = get_theme_mod( 'post_author_area', true );
$left_side     = get_theme_mod( 'post_author_left_side', false );
$post_title    = get_theme_mod( 'title_above_post', true );
$post_category = get_theme_mod( 'post_category', true );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content post-grid-wide' ); ?>>
    <article-header class="entry-header nolist" id="post_item_bg">

        <?php
        $category = get_the_category();
        if ($category[0]->name == 'blog'){
            $allowed_tags = array(
                'img'      => array(
                    'data-srcset' => true,
                    'data-src'    => true,
                    'srcset'      => true,
                    'sizes'       => true,
                    'src'         => true,
                    'class'       => true,
                    'alt'         => true,
                    'width'       => true,
                    'height'      => true,
                ),
                'noscript' => array(),
            );
            $image = '<img class="wp-post-image" alt="" src="' . get_template_directory_uri() . '/assets/images/news.png" />';
        }
        ?>

        <?php if ( $post_title ) : ?>
            <div class="parallax-window fullscreen" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/news_large.png" data-ios-fix="true" data-over-scroll-fix="true" data-android-fix="true">
                <div class="top-parallax-section">
                    <div class="container">
                        <div class="go_home">
                            <a href="<?php echo home_url()?>" class="btn btn-white-gray"><img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/ques.png"> Go</a>
                        </div>
                        <div class="post_title">
                            <h2 class="post-title entry-title text-center">
                                <?php echo wp_trim_words( get_the_title(),14);?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php
        if ( has_post_thumbnail() ) {
            $layout = shapely_get_layout_class();
            $size   = 'shapely-featured';

            if ( 'full-width' == $layout ) {
                $size = 'shapely-full';
            }
//            $image = get_the_post_thumbnail( get_the_ID(), $size );


            ?>


            <?php if ( isset( $category[0] ) && $post_category ) : ?>
                <span class="shapely-category">
				<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
					<?php echo esc_html( $category[0]->name ); ?>
				</a>
			</span>
            <?php endif; ?>
            <?php
        }// End if().
        ?>
    </article-header><!-- .entry-header -->
    <div class="container">
        <div class="entry-content" >


            <div class="entry-meta">
                <?php
                shapely_posted_on_no_cat();
                ?>
                <!-- post-meta -->
            </div>

            <?php if ( $post_author && $left_side ) : ?>
                <div class="row">
                    <div class="col-md-3 col-xs-12 author-bio-left-side">
                        <?php
                        shapely_author_bio();
                        ?>
                    </div>
                    <div class="col-md-9 col-xs-12 shapely-content ">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shapely' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="shapely-content ">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shapely' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            <?php endif; ?>
        </div><!-- .entry-content -->
    </div>
</article>
<?php //echo $dropcaps ? 'dropcaps-content' : ''; ?>