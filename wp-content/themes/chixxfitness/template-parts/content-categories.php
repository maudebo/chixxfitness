<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leschixx
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col l4 m6 s12 ">
        <div class="card lastNews">
            <p class="date"><?php $cat = get_the_category();
                $cat = $cat[0];
                echo $cat->cat_name; ?></p>
            <div class="card-image">
                <div class="crop">


                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium', '<img class="blog-image"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a>');
                        ?></a>
                    <?php the_title('<span class="card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h5>'); ?>

                </div>
            </div>



        </div>


    </div>


    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
</article>

