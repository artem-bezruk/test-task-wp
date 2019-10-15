<?php /* Template Name: Homepage */
get_header();
$postID = get_the_ID();
$slides = carbon_get_post_meta($postID, 'crb_home_slider');
$news = get_posts( array(
    'numberposts' => 2,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'news',
) );

?>

<section class="home--slider">
    <div class="container">
        <div class="home--slider-wrap">
            <?php foreach ($slides as $slide) : ?>
                <div class="slide">
                    <div class="slide--wrap">
                        <div class="slide--description">
                            <span class="slide--event-day"><?php echo $slide['crb_event_start_date'] ?></span>
                            <h1><?php echo $slide['crb_home_slider_text'] ?></h1>
                            <a href="<?php echo $slide['crb_home_slider_link'] ?>">Read more</a>
                        </div>
                        <img src="<?php echo $slide['crb_home_slider_image'] ?>" class="slide--image">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="slider-nav"></div>
    </div>
</section>

<section class="home--content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 home--about-wrap">
                <div class="home--about-us">
                    <h2><?php echo carbon_get_post_meta($postID, 'crb_home_about_title') ?></h2>
                    <p><?php echo carbon_get_post_meta($postID, 'crb_home_about_content') ?></p>
                </div>
            </div>
            <div class="col-md-7 ml-auto">
                <div class="home--our-news">
                    <h2>Our news</h2>
                    <?php foreach ($news as $singleNews) : ?>
                        <div class="row news--item">
                            <div class="col-md-4">
                                <img src="<?php echo get_the_post_thumbnail_url($singleNews->ID, 'full') ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="news--wrap">
                                    <a href="<?php echo get_permalink($singleNews->ID) ?>">
                                        <span class="news--date"><?php echo date('j, F Y', strtotime($singleNews->post_modified)) ?></span>
                                        <p><?php echo $singleNews->post_content ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
