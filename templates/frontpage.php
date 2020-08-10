<?php
/*
Template Name: Frontpage
*/
get_header();
$hero = get_field('frontpage_hero', get_queried_object_id());
$featured_posts = get_field('frontpage_featured', get_queried_object_id());
$case_slider = get_field('gallery_articles', get_queried_object_id());
?>
    <!-- hero -->
<div class="hero_wrapper">
    <div class="hero_image" style="background-image: url('<?= $hero['img']; ?>');">
        <div class="clip_overlay"></div>
    </div>
    <div class="hero_content">
        <h1><?= $hero['big_txt']; ?></h1>
        <h2><?= $hero['small_txt']; ?></h2>
        <a class="hero_button" href="<?=  $hero['btn']['btn_link']; ?>"><?=  $hero['btn']['btn_txt']; ?></a>
    </div>
</div>

    <!-- content posts -->
<div class="post_wrapper">
    <div class="post_grid">
        <?php foreach($featured_posts['articles'] as $featured_article_id ) {
            $article = get_post($featured_article_id);
            $featured_image = get_the_post_thumbnail_url($featured_article_id);
            $title = $article->post_title;
            $excerpt = $article->post_excerpt;
            $permalink = get_permalink($featured_article_id); ?>
                <div class="post">
                    <div class="post_image" style="background-image: url('<?= $featured_image; ?>');">
                        <div class="clip_post_overlay"></div>
                    </div>
                    <div class="content">
                        <h3><?= $title; ?></h3>
                        <div class="p_exerpt_wrap">
                        <p><?= $excerpt; ?></p>
                        </div>
                        <div class="read_more_wrap">
                        <a href="<?= $permalink; ?>">LÆS MERE </a>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>



    <!-- Image slider -->
    <div class="main-carousel">

        <?php foreach($case_slider['slider_articles'] as $gallery_article_id ) {
            $article = get_post($gallery_article_id);
            $featured_image = get_the_post_thumbnail_url($gallery_article_id);
            $title = $article->post_title;
            $excerpt = $article->post_excerpt;
            $permalink = get_permalink($gallery_article_id);
            $case_description = get_field('case_description', $gallery_article_id); ?>
            <div class="carousel-cell">
                <div class="image_slider" style="background-image: url('<?= $featured_image; ?>');">
                    <!-- <div class="line-overlay"><p><?= $case_description; ?></p></div> -->
                </div>
                <div class="image-content">
                <div class="slider-text-grid">

                    <div class="slider-text-flex">

                        <div class="image-content-text">
                            <p><?php if( $case_description ) {
                                    echo $case_description;
                                } else {
                                    echo 'empty';
                                } ?></p>
                            <h4><?= $title; ?></h4>
                            <p><?= $excerpt; ?></p>
                            <div class="read_more_wrap read_more_wrap_slider">
                                <a href="<?= $permalink; ?>">LÆS MERE </a>
                            </div>
                        </div>
                    </div> 

                    </div>

                    </div> 
                
            </div>
        <?php } ?>
    </div>
<?php get_footer(); ?>