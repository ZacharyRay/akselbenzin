<?php
/*
Template Name: All products
*/
$id = get_queried_object_id();
$employees = get_field('ask_me_employee', $id);
$product = get_field('product', $id);
$product_selector = get_field ('single_products', $id);
?>
<?php get_header(); ?>
    <div class="head_wrapper">
        <h1><?php echo get_the_title(); ?></h1>
        <p><?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?></p>
    </div>
    <div class="all_products_wrapper">
        <div class="all_products_grid">
            <?php foreach($product_selector as $product_id ) {
                $product_note = get_field('product_note', $product_id);
                $product_type = get_field('product', $product_id);
                $product = get_post($product_id);
                $featured_image = get_the_post_thumbnail_url($product_id);
                $product_title = $product->post_title;
                $excerpt = $product->post_excerpt;
                $permalink = get_permalink($product_id);
                ?>
                <a href="<?= $permalink ?>">
                    <div class="product">
                        <div class="product_all_image" style="background-image: url('<?= $featured_image; ?>');"></div>
                        <div class="product_overview_text_box">
                            <h4><?= $product_type['product_type'] ?></h4>
                            <h5><?= $product_title ?></h5>
                            <?php if(!empty($product_note)) { ?>
                            <div class="product_note"><?= $product_note ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>

<!-- Employees -->
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
<?php get_footer(); ?>