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

    <section class="section-form">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form method="post" action="" class="contact-form">

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name ="news" id="news" checked> Yes, Please
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="Send it!" checked>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php
get_footer();
