<?php
/**
 Template Name: Page - Fullwidth
 *
 * @package readit pro 
 */

get_header(); ?>

<header class="entry-header">
    <div class="grid grid-pad">
        <div class="col-1-1">
		<?php the_title( '<h1 class="page-entry-title">', '</h1>' ); ?>
        </div>
    </div>
</header><!-- .entry-header -->

<section id="page-content" class="blog-archive">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php get_template_part( 'content', 'page' ); ?>
        
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
        
                    <?php endwhile; // end of the loop. ?>
        
                </main><!-- #main -->
            </div><!-- #primary -->
		</div>
	</div>
</section>
<?php get_footer(); ?>