
<?php
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
<div class="col-md-6">
    <article id="post-<?php the_ID();  ?>" >
        <div class="c-post-header">
            <div class="post-header-img">
                <?php echo wp_kses( $image, $allowed_tags );?>
            </div>
            <div class="post-header-cont">
                <div class="c-post-title">
                    <p><?php echo wp_trim_words( get_the_title()); ?></p>
                </div>
                <div class="read_more">
                    <a href="<?php the_permalink();?>" class="btn btn-white-gray">Read More <img class="ques" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/blue_ques.png"></a>
                </div>
            </div>
        </div>
        <div class="post-content hidden-sm hidden-xs">
            <div class="c-post-date">
                <?php
                echo get_the_date("d.m.Y");
                ?>
            </div>
            <?php  echo wp_trim_words(get_the_content(), 18);?>
        </div>
    </article>
</div>