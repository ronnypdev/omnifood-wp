<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnifood
 */

?>

	</div><!-- #content -->

    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-1',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'footer-nav'
                    ));
                ?>
            </div>
            <div class="col span-1-of-2">
                <div class="social-links">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </div>
            </div>
        </div>

        <div class="row">
            <p>
                Copyright &copy; <?php the_time('Y'); ?> by Omnifood. All rights reserved.
            </p>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
