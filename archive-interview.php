<?php get_header(); ?>



<!-- page-kv -->
<?php get_template_part('template/kv'); ?>
<!-- end page-kv -->



<main class="u-ptb-m">
    <!-- archive interview -->
    <div class="archive-interview u-wrap">
        <div class="archive-interview__wrap">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>


            <article class="archive-interview__article">
                <a href="<?php the_permalink(); ?>" class="archive-interview__article-link">
                    <div class="archive-interview__thumbnail">
                        <div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"
                            class="archive-interview__thumbnail-bg"></div>
                    </div>

                    <div class="archive-interview__info">
                        <div class="archive-interview__info-name">
                            <p class="archive-interview__info-name-jp"><?php the_field('name'); ?>さん</p>
                            <p class="archive-interview__info-name-en"><?php the_field('name_en'); ?></p>
                        </div>

                        <div class="archive-interview__info-contents">
                            <h2 class="archive-interview__info-ttl"><?php the_title(); ?></h2>
                        </div>
                    </div>
                </a>
            </article>


            <?php
            endwhile;
            else:
            ?>

            <p>お探しの記事は見つかりませんでした。</p>

            <?php endif; ?>
        </div>

        <?php
        $args = array(
            'prev_text'          => '<span class="page-numbers-prev"></span>',
            'next_text'          => '<span class="page-numbers-next"></span>',
            'mid_size'			     => 1,
            'show_all'			     => false,
            'screen_reader_text' => ' ',
        );

        the_posts_pagination( $args );
        ?>
    </div>
    <!-- end archive interview -->



    <!-- portfolio -->
    <section class="curriculum-portfolio u-pt-m">
        <?php get_template_part('template/portfolio'); ?>
    </section>
    <!-- end portfolio -->
</main>



<?php get_footer(); ?>