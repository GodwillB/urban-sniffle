<?php
/**
 *
 * Template Name: Blog
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Godwill
 */

get_header(); ?>
<?php get_template_part('template-parts/banner'); ?>


<div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
    
    <div class=" pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">

    <?php
                $args = array(
                    'post_type' => array('article'),
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                );

                $so_service = new WP_Query( $args );

                if ( $so_service->have_posts() ) {
                    while ( $so_service->have_posts() ) {
                        $so_service->the_post();

                        ?>

      <div>
        <p class="text-sm text-gray-500">
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900"><?php echo the_title(); ?></p>
          <p class="mt-3 text-base text-gray-500"><?php echo the_excerpt(); ?></p>
        </a>
        <div class="mt-3">
          <a href="<?php echo the_permalink(); ?>" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>

      <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
		        <?php wp_reset_postdata()?>
    </div>
  </div>
</div>



<?php get_footer(); ?>