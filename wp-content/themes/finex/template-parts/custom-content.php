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
    <header class="entry-header nolist">
        <?php
        $category = get_the_category();

        if ( has_post_thumbnail() ) {
            $layout = shapely_get_layout_class();
            $size   = 'shapely-featured';

            if ( 'full-width' == $layout ) {
                $size = 'shapely-full';
            }
            $image = get_the_post_thumbnail( get_the_ID(), $size );

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
            ?>
            <a href="<?php echo esc_url( get_the_permalink() ); ?>">
                <?php echo wp_kses( $image, $allowed_tags ); ?>
            </a>

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
    </header><!-- .entry-header -->
    <div class="entry-content" >
        <?php if ( $post_title ) : ?>
            <h2 class="post-title entry-title">
                <a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), 9 ); ?></a>
            </h2>
        <?php endif ?>

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
</article>
<?php //echo $dropcaps ? 'dropcaps-content' : ''; ?>