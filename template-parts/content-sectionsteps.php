<?php

$hiw_heading = get_field('hiw_heading');
$app_iphone  = get_field('app_iphone');
$app_store   = get_field('app_store');
$google_store = get_field('google_store');

$food_steps_1 = get_field('food_steps_1');
$food_steps_description_1 = get_field('food_steps_description_1');

$food_steps_2 = get_field('food_steps_2');
$food_steps_description_2 = get_field('food_steps_description_2');

$food_steps_3 = get_field('food_steps_3');
$food_steps_description_3 = get_field('food_steps_description_3');

?>

<!-- Section Steps -->
<div class="section-steps" id="works">
    <div class="row">
        <h2><?php echo $hiw_heading; ?></h2>
    </div>
    <div class="row">
        <div class="col span-1-of-2 steps-box">
            <?php if( !empty($app_iphone) ): ?>
                <img  class="app-screen js--wp-2" src="<?php echo $app_iphone['url']; ?>" alt="<?php echo $app_iphone['alt']; ?>" />
            <?php endif; ?>
        </div>
        <div class="col span-1-of-2 steps-box">
            <div class="works-step">
                <div><?php echo $food_steps_1; ?></div>
                <p><?php echo $food_steps_description_1; ?></p>
            </div>
            <div class="works-step">
                <div><?php echo $food_steps_2; ?></div>
                <p><?php echo $food_steps_description_2; ?></p>
            </div>
            <div class="works-step">
                <div><?php echo $food_steps_3; ?></div>
                <p><?php echo $food_steps_description_3; ?></p>
            </div>

            <a href="#" class="btn-app">
                <?php echo wp_get_attachment_image($app_store, 'small_icon', true ); ?>
            </a>
            <a href="#" class="btn-app">
                <?php echo wp_get_attachment_image($google_store, 'small_icon', true ); ?>
            </a>
        </div>
    </div>
</div>
<!-- End Section Steps -->