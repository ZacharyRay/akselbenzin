<?php get_header();

$id = get_queried_object_id();
$employees = get_field('ask_me_employee', $id);
$product = get_field('product', $id);
$product_selector = get_field ('single_products', $id);
?>
<!-- Product showcase -->
<div class="product_main_wrapper">
    <div class="product_showcase_wrapper">
        <div class="product_grid">
                <div class="image_slider">
                    <div class="carousel carousel-main">
                        <?php foreach($product['product_images'] as $image ) { ?>
                        <div class="carousel_wrap">
                            <div class="products_cell_image" style="background-image: url('<?=   $image; ?>');"></div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="carousel carousel-nav">
                        <?php foreach($product['product_images'] as $image ) { ?>
                        <div class="carousel_wrap">
                            <div class="products_cell_image" style="background-image: url('<?=   $image; ?>');"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="product_info">
                    <h2><?= $product['product_type'] ?></h2>
                    <h1><?= get_the_title() ?></h1>
                    <p><?= $product['product_description'] ?></p>
                    <?php if(!empty($product['product_logo'])) { ?>
                    <div class="logo_wrap">
                    <?php foreach($product['product_logo'] as $logo ) { ?>
                            <div class="product_logo" style="background-image: url('<?=  $logo; ?>');"></div>
                    <?php } ?>
                    </div>
                    <?php } ?>

                    <?php if(!empty($product['product_download_text'])) { ?>
                    <div class="download_wrapper">
                        <div class="download_arrow"></div>
                        <a href="<?= $product['product_download_file'] ?>" class="download"><?= $product['product_download_text'] ?></a>
                    </div>
                    <?php } ?>
                    <div class="disclaimer"><?= $product['product_disclaimer'] ?></div>
                </div>
            </div>
        </div>

    <!-- Environment big image  -->

    <?php if(!empty($product['product_env_image'])) { ?>
    <div class="environment_image_wrapper">
        <div class="environment_image" style="background-image: url('<?=  $product['product_env_image'] ?>');"></div>
    </div>
    <?php } ?>
    <!-- Product bio  -->
    <?php if(!empty($product['product_about'])) { ?>
    <div class="product_bio_wrapper">
        <div class="product_bio">
            <div class="h5-wrap">
            <h5>Beskrivelse</h5>
            </div>
            <div class="product_about_text"><?= $product['product_about'] ?>
                <?php if(!empty($product['product_powerscreen_pulse_text'])) { ?>
                <a href="<?= $product['product_powerscreen_pulse_link'] ?>"><?= $product['product_powerscreen_pulse_text'] ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

    <!-- Product further information -->
    <?php if(!empty($product['product_specs'])) { ?>
    <div class="further_info_wrapper">
        <div class="further_info">
            <div class="h5-wrap">
            <h5>Yderligere information</h5>
            </div>
            <table class="table_wrap">
                <tbody>
                <?php foreach($product['product_specs'] as $specs ) { ?>
                <tr>
                    <td class="left"><?= $specs['label']; ?></td>
                    <td class="right"><?= $specs['value']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php } ?>

    <!-- Product video -->
   <?php if(!empty($product['product_embedded_video'])) { ?>
    <div class="product_video_wrapper">
        <div class="product_video">
            <div class="h5-wrap">
            <h5>Video</h5>
            </div>
            <?php foreach($product['product_embedded_video'] as $video ) { ?>
                <div class="videos_wrapper">
            <iframe width="425" height="239" src="<?= $video['product_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php } ?>
        </div>

    </div>
    <?php } ?>

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
            <?php } ?>
        </div>
    </div>
    <?php } ?>

    <!-- Related products -->
<div class="product_alike_wrapper">
    <div class="product_alike_slider_wrapper">
        <div class="product_alike_slider">
            <h5>Lignende produkter</h5>
            <div class="products-alike-carousel">
                <?php foreach($product_selector as $product_id ) {
                    $product_type = get_field('product', $product_id);
                    $product = get_post($product_id);
                    $featured_image = get_the_post_thumbnail_url($product_id);
                    $product_title = $product->post_title;
                    $excerpt = $product->post_excerpt;
                    $permalink = get_permalink($product_id);
                    ?>
                    <a href="<?= $permalink ?>">
                        <div class="carousel-product">
                            <div class="product_related" style="background-image: url('<?= $featured_image; ?>');"></div>
                            <h4> <?= $product_type['product_type'] ?> </h4>
                            <h5><?= $product_title ?></h5>
                        </div>
                    </a>
                <?php } ?>
                <div/>
            </div>
        </div>
        <button class="alike-btn-prev"><i class="fa fa-angle-left"></i></button>
        <button class="alike-btn-next"><i class="fa fa-angle-right"></i></button>
    </div>
<?php get_footer(); ?>
