<?php
$contact_form_heading = get_field('contact_form_heading');
?>

<!-- Contact  -->
<section class="section-form">
    <div class="row">
        <h2><?php echo $contact_form_heading; ?></h2>
    </div>
    <div class="row">
        <form method="post" action="" class="contact-form">
            <!-- the contact form -->
            <?php the_content(); ?>
        </form>
    </div>
</section><!-- # Contact -->