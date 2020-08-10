<?php
/*
Template Name: Environmental
*/
$id = get_queried_object_id();
$product_selector = get_field ('single_products', $id);
?>

<?php get_header(); ?>
    <div class="head_wrapper">
        <?php while(have_posts()) : the_post(); ?>
            <?php the_content();?>
        <?php endwhile; ?>
    </div>
<div class="env_product_wrapper">
    <div class="env_product_wrap">
        <?php foreach($product_selector as $product_id ) {
            $product = get_post($product_id);
            $environment_details = get_field('product', $product_id);
            $featured_image = get_the_post_thumbnail_url($product_id);
            $product_title = $product->post_title;
            $excerpt = $product->post_excerpt;
            $permalink = get_permalink($product_id);
            $product_type = get_field('product', $product_id);
            ?>
        <div class="env_product_single_grid">
            <a href="<?= $permalink ?>">
                <div class="env_product_images" style="background-image: url('<?= $featured_image; ?>');"></div>
            </a>
            <div class="env_product_one_text_wrap">
                <h1><?= $product_title ?></h1>
                <h2><?= $product_type['product_type'] ?></h2>
                <p><?= $excerpt ?></p>
                <ul>
        <?php if(!empty($environment_details['product_environmental_details'])) { ?>
                     <div class="env_details"><?= $environment_details['product_environmental_details'] ?></div>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php if(!empty($product_type['product_env_info'])) { ?>
        <div class="env_info_wrap">
        <div class="env_info">
            <div class="env_image"></div>
            <div class="product_env_text"><?= $product_type['product_env_info'] ?></div>
        </div>
        </div>
        <?php }} ?>
    </div>
</div>



<?php get_footer(); ?>