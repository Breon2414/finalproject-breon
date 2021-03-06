<?php
/**
 * The template for displaying search results pages.
 *
 * @package fino
 */
get_header();
if(get_header_image()){
    $fino_overlay = "banner";
 }
 else{
    $fino_overlay = "nobanner";
 }
?>

<section class="<?php echo esc_attr($fino_overlay);?>" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="<?php echo esc_attr($fino_overlay);?>-heading">
                       <?php if ( have_posts() ) : ?>
                            <h2><?php 
						       /* translators: %s: search term */
						        printf( esc_html__( 'Search Results for: %s', 'fino' ), '<span>' . get_search_query() . '</span>' ); 
                             ?></h2>
						<?php else : ?>
					        <h2><?php
    					    /* translators: %s: nothing found term */
    					       printf( esc_html__( 'Nothing Found for: %s', 'fino' ), '<span>' . get_search_query() . '</span>' ); 
                            ?></h2>
				        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="bg-w sp-80">
    <div class="container">
        <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) : the_post(); ?>
                                <article class="col-md-12 blog-wrap">
                                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                       <?php get_template_part('content-parts/content', 'search'); ?>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                            <div class="col-md-12">
                                 <div class="fino-pagination">
                                       <?php the_posts_pagination(
                                           array(
                                            'prev_text' => esc_html__('&lt;','fino'),
                                            'next_text' => esc_html__('&gt;','fino')
                                           )
                                        ); ?>
                                 </div>
                            </div>

                            <?php else : 
                              get_template_part( 'content-parts/content', 'none' );
                             endif; ?>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <aside class="sidebar">
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

