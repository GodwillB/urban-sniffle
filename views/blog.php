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

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="absolute inset-0">
    <div class="bg-white h-1/3 sm:h-2/3"></div>
  </div>
  <div class="relative max-w-7xl mx-auto">
    
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

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

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-rose-600">
              <a href="<?php echo the_permalink(); ?>" class="hover:underline"> Article </a>
            </p>
            <a href="<?php echo the_permalink(); ?>" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900"><?php echo the_title(); ?></p>
              <p class="mt-3 text-base text-gray-500"><?php echo the_excerpt(); ?></p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <!-- <a href="#">
                <span class="sr-only">Roel Aufderehar</span>
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </a> -->
            </div>
            <div class="ml-3">
              <!-- <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline"> Roel Aufderehar </a>
              </p> -->
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16"> Mar 16, 2020 </time>
                <span aria-hidden="true"> &middot; </span>
                <span> 6 min read </span>
              </div>
            </div>
          </div>
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
<!-- This example requires Tailwind CSS v2.0+ -->
<section class="bg-rose-800">
  <div class="max-w-7xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
    <div class="py-12 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10  lg:pr-16">
      <div class="md:flex-shrink-0">
        <!-- <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-rose-300.svg" alt="Tuple"> -->
      </div>
      <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
        <div class="relative text-lg font-medium text-white md:flex-grow">
          <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-rose-600" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
          </svg>
          <p class="relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.</p>
        </div>
        <footer class="mt-8">
          <div class="flex items-start">
            <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
              <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-4">
              <div class="text-base font-medium text-white">Judith Black</div>
              <div class="text-base font-medium text-rose-200">CEO, Tuple</div>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
    <div class="py-12 px-4  sm:px-6 md:py-16 md:pr-0 md:pl-10 lg:pl-16">
      <div class="md:flex-shrink-0">
        <!-- <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-rose-300.svg" alt="Workcation"> -->
      </div>
      <blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
        <div class="relative text-lg font-medium text-white md:flex-grow">
          <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-rose-600" fill="currentColor" viewBox="0 0 32 32">
            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
          </svg>
          <p class="relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis. Nemo expedita voluptas culpa sapiente alias molestiae.</p>
        </div>
        <footer class="mt-8">
          <div class="flex items-start">
            <div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
              <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-4">
              <div class="text-base font-medium text-white">Joseph Rodriguez</div>
              <div class="text-base font-medium text-rose-200">CEO, Workcation</div>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
  </div>
</section>


<?php get_footer(); ?>