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
    <div class="section-steps" id="works">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="works-step">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!.</p>
                </div>
                <div class="works-step">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>

                <a href="#" class="btn-app"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/download-app.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/download-app-android.png" alt="Play Store Button"></a>
            </div>
        </div>
    </div>
    <!-- End Section Steps -->

    <!-- Cities Section  -->
    <section class="sections-cities" id="cities">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>

        <div class="row js--wp-3">
            <div class="col span-1-of-4 box">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/lisbon-3.jpg" alt="Lisbon">
                <h3>Lisbon</h3>
                <div class="city-feature">
                    <i class="ion-person icon-small"></i>
                    1600+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    60+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_lx</a>
                </div>
            </div>

            <div class="col span-1-of-4 box">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/san-francisco.jpg" alt="San Francisco">
                <h3>San Francisco</h3>
                <div class="city-feature">
                    <i class="ion-person icon-small"></i>
                    3700+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    160+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_sf</a>
                </div>
            </div>

            <div class="col span-1-of-4 box">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/berlin.jpg" alt="Berlin">
                <h3>Berlin</h3>
                <div class="city-feature">
                    <i class="ion-person icon-small"></i>
                    2300+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    110+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_berlin</a>
                </div>
            </div>

            <div class="col span-1-of-4 box">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/img/london.jpg" alt="London">
                <h3>London</h3>
                <div class="city-feature">
                    <i class="ion-person icon-small"></i>
                    1200+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i>
                    50+ top chefs
                </div>
                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i>
                    <a href="#">@omnifood_london</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cities Section  -->

    <!-- Testimonials -->
    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                </blockquote>
                <cite><img src="<?php echo get_template_directory_uri(); ?>/resources/img/customer-1.jpg">Alberto Duncan</cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                </blockquote>
                <cite><img src="<?php echo get_template_directory_uri(); ?>/resources/img/customer-2.jpg">Joana Silva</cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                </blockquote>
                <cite><img src="<?php echo get_template_directory_uri(); ?>/resources/img/customer-3.jpg">Milton Chapman</cite>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <!-- Sign up and pricing plans -->
    <section class="section-plans js--section-plans" id="plans">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">$399 <span>/ month</span></p>
                        <p class="plan-price-meal">That's only 13.30$ per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">$149 <span>/ month</span></p>
                        <p class="plan-price-meal">That's only 14.90$ per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">19$ <span>/ meal</span></p>
                        <p class="plan-price-meal">&nbsp;</p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
                            <li><i class="ion-ios-close-empty icon-small"></i></li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
