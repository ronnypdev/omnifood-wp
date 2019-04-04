<!-- Meals Section -->
<section class="section-meals">
    <ul class="meals-showcase clearfix">
        <?php
        $menu_query = array(
            'post_type' => "food_gallery",
            'orderby' => 'post_id',
            'order' => 'ASC'

        );

        $menu_food = new WP_Query($menu_query);

        ?>
        <?php while ($menu_food->have_posts()): $menu_food->the_post(); ?>
            <li>
                <figure class="meal-photo">
                    <?php
                        // Checks for feature thumbnail
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                    ?>
                </figure>
            </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
</section>
<!-- # Meals Section -->