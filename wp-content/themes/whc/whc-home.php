<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-nature
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="banner">
		<img src="https://i.imgur.com/6G9zHsY.jpg" alt="" style="height: 100vh; width: 100vw;">
		<h1 style="position: absolute; top: 200px; width: 100vw; font-size: 100px;" class="text-white text-center">Hike Life</h1>
		</div>
		<section id="services">
			<div class="container-fluid">
				<div class="row text-center">
					<h1 class="w-100">What Do We Do?</h1>
				</div>
				<div class="row text-center">
					<div class="col-md-4 p-0">
						<img src="https://i.imgur.com/IQcHZN0.jpg" alt="" style="height: 300px;" class="mb-3">
							<h2>Hiking Gear</h2>
					</div>
					<div class="col-md-4 p-0">
						<img src="https://i.imgur.com/gV24wtH.jpg" alt="" style="height: 300px;" class="mb-3">
							<h2>Hiking Locations</h2>
					</div>
					<div class="col-md-4 p-0">
						<img src="https://i.imgur.com/SeTZxCK.jpg" alt="" style="height: 300px;" class="mb-3">
							<h2>Hiking Recipes</h2>
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
