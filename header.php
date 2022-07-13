<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package godwill
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body style="font-family: 'Montserrat', sans-serif !important;">
<?php wp_body_open(); ?>
<!-- This example requires Tailwind CSS v2.0+ -->
<header class="bg-gray-900">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
    <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
      <div class="flex items-center">
        <a href="#">
          <span class="sr-only">Workflow</span>
          <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="">
        </a>
        <div class="hidden ml-10 space-x-8 lg:block">
          <a href="<?php echo home_url('/'); ?>" class="text-base font-medium text-white hover:text-indigo-50"> Home </a>

          <a href="<?php echo home_url('/'); ?>blog/" class="text-base font-medium text-white hover:text-indigo-50"> Articles </a>

          <a href="<?php echo home_url('/'); ?>contact/" class="text-base font-medium text-white hover:text-indigo-50"> Contact Us </a>

          <!-- <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Company </a> -->
        </div>
      </div>
      <div class="ml-10 space-x-4">
        
      </div>
    </div>
   
  </nav>
</header>


