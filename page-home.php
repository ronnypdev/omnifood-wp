<?php
/**
 * The template for displaying all pages
 * Template Name: Main Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package omnifood
 */

get_header();
?>

    <!-- Feature Section -->
        <?php get_template_part('template-parts/content', 'featurefood'); ?>
    <!-- # Feature Section -->

    <!-- Meals Section -->
        <?php get_template_part('template-parts/content', 'meals'); ?>
    <!-- # Meals Section -->

    <!-- Section Steps -->
        <?php get_template_part('template-parts/content', 'sectionsteps'); ?>
    <!-- # Section Steps -->

    <!-- Cities Section  -->
        <?php get_template_part('template-parts/content', 'cities'); ?>
    <!-- # Cities Section  -->

    <!-- Customers -->
        <?php get_template_part('template-parts/content', 'customers'); ?>
    <!-- # Customers -->

    <!-- Sign up and pricing plans -->
        <?php get_template_part('template-parts/content', 'mealplans'); ?>
    <!-- # Sign up and pricing plans -->

    <!-- Contact  -->
        <?php get_template_part('template-parts/content', 'contactform'); ?>
    <!-- # Contact -->

<?php
get_footer();
