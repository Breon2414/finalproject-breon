<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fino
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
                       <h2><?php $our_title = get_the_title( get_option('page_for_posts', true) );
							echo esc_html($our_title); ?></h2>
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
                                   <?php get_template_part('content-parts/content', get_post_format()); ?>
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