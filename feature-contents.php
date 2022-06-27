<?php
/*
Template Name: 特徴下層ページ
*/
?>



<?php get_header(); ?>



<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;

$kv_class = $slug."-kv";
?>



<!-- page-kv -->
<div class="m-kv m-kv-under <?php echo $kv_class ?>"
    style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);">
    <div class="u-wrap m-kv__wrap">
        <div class="m-kv__txt">
            <span class="m-kv__ttl-en"><?php the_field('kv_title_en'); ?></span>
            <h1 class="m-kv__ttl-jp">
                <span class="m-marker--main-gd"><?php the_title(); ?></span>
            </h1>
        </div>
    </div>
</div>
<!-- end page-kv -->



<main class="feature-contents u-ptb-l">
    <!-- feature contents -->
    <section class="feature-contents__sec u-wrap">
        <?php if(have_rows('feature_contents')): ?>
        <?php while(have_rows('feature_contents')): the_row(); ?>
        <div class="feature-contents__item">
            <div class="feature-contents__image">
                <img src="<?php the_sub_field('feature_contents_image'); ?>" alt="">
            </div>

            <div class="feature-contents__textarea">
                <h2 class="feature-contents__ttl"><?php the_sub_field('feature_contents_title'); ?></h2>

                <p class="feature-contents__copy"><?php the_sub_field('feature_contents_copy'); ?></p>

                <p class="feature-contents__txt">
                    <?php
                        remove_filter ('acf_the_content', 'wpautop');
                        the_sub_field('feature_contents_text');
                    ?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <!-- end feature contents -->



    <!-- feature page link -->
    <div class="m-feature-under-page-link u-wrap u-pt-l">
        <?php get_template_part('template/feature-page-link'); ?>
    </div>
    <!-- end feature page link -->
</main>



<?php get_footer(); ?>