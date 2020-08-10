<?php get_header();
$id = get_queried_object_id();
$featured_single_image = get_the_post_thumbnail_url();
$single_all_content = get_field('single_all_content');
?>
<div class="hero_single_wrapper">
    <?php if(!empty($featured_single_image)) { ?>
        <div class="hero_single_image" style="background-image: url('<?= $featured_single_image; ?>');"></div>
    <?php } ?>
    <?php if(!empty($single_all_content['single_hero_text'])) { ?>
    <div class="hero_single_text" id="single_parallax">
        <?= $single_all_content['single_hero_text'] ?>
    </div>
<?php } ?>
</div>
<div class="single_text_wrapper">
    <div class="single_text">
        <?= $single_all_content['single_content'] ?>
    </div>
</div>
<?php get_footer(); ?>