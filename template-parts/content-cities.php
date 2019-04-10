<?php
$cities_title = get_field('cities_title');
?>

<!-- Cities Section  -->
<section class="sections-cities" id="cities">
    <div class="row">
        <h2><?php echo $cities_title; ?></h2>
    </div>

    <div class="row js--wp-3">
        <?php
        $cities_query = array(
            'post_type' => 'sections_cities',
            'orderby' => 'post_id',
            'order' => 'ASC'
        );

        $cities = new WP_Query($cities_query);
        ?>

        <?php while ($cities->have_posts()) : $cities->the_post(); ?>
            <?php
            $happy_eaters = get_field('happy_eaters');
            $top_chefs = get_field('top_chefs');
            $twitter_handle = get_field('twitter_handle');
            ?>
            <div class="col span-1-of-4 box">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
                ?>
                <h3><?php the_title(); ?></h3>
                <div class="city-feature">
                    <i class="<?php the_field('happy_eaters_icon'); ?>"></i>
                    <?php echo $happy_eaters; ?>
                </div>
                <div class="city-feature">
                    <i class="<?php the_field('top_chefs_icon'); ?>"></i>
                    <?php echo $top_chefs; ?>
                </div>
                <div class="city-feature">
                    <i class="<?php the_field('twitter_handle_icon'); ?>"></i>
                    <a href="#"><?php echo $twitter_handle; ?></a>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section> <!-- # Cities Section  -->
