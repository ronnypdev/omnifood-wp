<?php
$featured_heading = get_field('featured_heading');
$featured_description = get_field('featured_description');
?>

<!-- Feature Section -->
<section class="section-features js--section-features" id="features">
    <div class="row">
        <h2><?php echo $featured_heading; ?></h2>
        <p class="long-copy">
            <?php echo $featured_description; ?>
        </p>
    </div>

    <div class="row js--wp-1">
        <?php
        $food_query = array(
            'post_type' => 'food_feature',
            'orderby' => 'post_id',
            'order' => 'DESC'
        );

        $food_loop = new WP_Query($food_query);
        ?>
        <?php while ($food_loop->have_posts()) : $food_loop->the_post(); ?>
            <div class="col span-1-of-4 box">
                <i class="<?php the_field('food_features_icons'); ?>"></i>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div><!-- # row  -->
</section>
<!-- # Feature Section -->
