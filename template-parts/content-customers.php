<?php

$customer_heading = get_field('customer_heading');

?>

<!-- Customers -->
<section class="section-testimonials">
    <div class="row">
        <h2><?php echo $customer_heading; ?></h2>
    </div>
    <div class="row">
        <?php
        $customer_review = array(
            'post_type' => 'customer_quotes',
            'orderby' => 'post_id',
            'order' => 'DESC'
        );

        $customers = new WP_Query($customer_review);
        ?>

        <?php while ($customers->have_posts()) : $customers->the_post(); ?>
                <?php
                    $the_block_quote = get_field('the_block_quote');
                    $customer_image = get_field('customer_image');
                ?>
            <div class="col span-1-of-3">
                <?php echo $the_block_quote; ?>
                <cite>
                    <?php if ($customer_image) : ?>
                        <img src="<?php echo $customer_image; ?>">
                    <?php endif; ?>

                    <?php the_title(); ?>
                </cite>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section><!-- # Customers -->
