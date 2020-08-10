<?php
/*
Template Name: powersceen pulse
*/
$id = get_queried_object_id();
$pulse_content = get_field('pulse_content', $id);
$pulse_all_details = $pulse_content['all_details'];
?>

<?php get_header(); ?>
<div class="pulse_wrapper">
    <div class="pulse_text_wrapper">
            <h1><?= $pulse_content['pulse_big_headline'] ?></h1>
        <div class="pulse_content_wrap">
            <div class="pulse_the_content">
                <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
                <?php endwhile; ?>
            </div>
            <div class="few_details">
                <?= $pulse_content['pulse_few_details'] ?>
            </div>
        </div>

    </div>

    <div class="pulse_image_wrapper">
        <div class="powerscreen_logo" style="background-image: url('<?= $pulse_content['pulse_logo']; ?>')"></div>
        <div class="imac_image" style="background-image: url('<?= $pulse_content['pulse_product_image']; ?>')"></div>
        <div class="green_img_bg">
            <img src="http://localhost:8888/akselbenzindk/wp-content/uploads/2020/02/green-bg-2-2.png" alt="green-background">
        </div>
    </div>

    <div class="pulse_footer">
        <div class="pulse_details_wrapper">
            <?php foreach ($pulse_all_details as $details)  {
                ?>
            <div class="pulse_details_wrap">
                <h3> <?= $details['pulse_details_heading']; ?> </h3>
                <div class="pulse_details_content">
                <?= $details['pulse_details_content']; ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>