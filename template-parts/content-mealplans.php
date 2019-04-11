<?php

$eating_plan_heading = get_field('eating_plan_heading');

?>


<!-- Sign up and pricing plans -->
<section class="section-plans js--section-plans" id="plans">
    <div class="row">
        <h2><?php echo $eating_plan_heading; ?></h2>
    </div>
    <div class="row">
        <?php
        $plan_sections = array(
            'post_type' => 'eating_plans',
            'orderby' => 'post_id',
            'order' => 'DESC'
        );

        $plans = new WP_Query($plan_sections);
        ?>

        <?php while ($plans->have_posts()) : $plans->the_post(); ?>
            <?php
            $meal_plan_heading = get_field('meal_plan_heading');
            $plan_price = get_field('plan_price');

            $plan_price_meal = get_field('plan_price_meal');
            $meal_number = get_field('meal_number');

            $meal_order = get_field('meal_order');
            $meal_creation = get_field('meal_creation');

            $meal_delivery = get_field('meal_delivery');
            $meal_button = get_field('meal_button');
            ?>
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3><?php echo $meal_plan_heading; ?></h3>
                        <p class="plan-price"><?php echo $plan_price; ?></p>
                        <p class="plan-price-meal"><?php echo $plan_price_meal; ?></p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i><?php echo $meal_number;?></li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i><?php echo $meal_order; ?></li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i><?php echo $meal_creation; ?></li>
                            <li><i class="ion-ios-checkmark-empty icon-small"></i><?php echo $meal_delivery; ?></li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="<?php the_field('meal_button_state'); ?>"><?php echo $meal_button; ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
<!-- # Sign up and pricing plans -->
