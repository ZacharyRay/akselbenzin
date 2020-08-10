<?php
/*
Template Name: Information
*/
$id = get_queried_object_id();
$employees = get_field('ask_me_employee', $id);
$featured_image = get_the_post_thumbnail_url();
$information_images = get_field('information_small_images', $id);
?>
<?php get_header(); ?>
<div class="hero_info_wrapper">
<?php if(!empty($featured_image)) { ?>
    <div class="hero_info_image" style="background-image: url('<?= $featured_image; ?>');"></div>
    <?php } ?>
</div>
<div class="info_text_wrapper">
    <div class="info_text">
        <p>
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
        </p>
    </div>
</div>

<!-- Employee -->
<?php if(!empty($employees)) { ?>
<div class="employee_wrapper">
    <div class="employee">
        <div class="h5-wrap h6-wrap">
            <h6>Spørg mig!</h6>
        </div>
            <?php foreach ($employees as $e) {
                $employee = get_post($e);
                $name = $employee->post_title;
                $image = get_the_post_thumbnail_url($e);
                $title = get_field('employee_title', $e);
                $phone = get_field('employee_phone', $e);
                $email = get_field('employee_mail', $e); ?>
                <div class="person">
                    <img src="<?= $image; ?>" alt="">
                    <h4><?= $name; ?></h4>
                    <h5><?= $title; ?></h5>
                    <p><?= $phone; ?></p>
                    <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                </div>
            <?php }} ?>
    </div>
</div>
    <div class="small_images">
        <?php if(!empty($information_images)) { ?>
        <?php foreach($information_images as $i_image ) { ?>
            <img src="<?= $i_image; ?>" alt="we-support">
        <?php }} ?>
    </div>
<?php get_footer(); ?>