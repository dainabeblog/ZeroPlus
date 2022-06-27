<?php get_header(); ?>



<!-- page-kv -->
<?php get_template_part('template/kv'); ?>
<!-- end page-kv -->



<main class="archive-column u-ptb-l">
    <div class="m-page-msg u-wrap">
        <p class="m-page-msg-txt">ZeroPlus、フリーランス、Webデザイナーやエンジニアに興味がある方のために役立つ情報を掲載しています。</p>
    </div>



    <?php
    $terms = array('taxonomy' => 'column_tag');
    $termlists = get_terms( $terms ,'hide_empty=0');
    ?>

    <?php foreach($termlists as $term) : ?>
    <section id="archive-column-<?php echo $term->slug; ?>" class="archive-column__sec u-pt-l">
        <h2 class="archive-column__sec-ttl m-page-ttl"><span class="m-marker--main-gd"><?php echo $term->name; ?></span>
        </h2>


        <div class="archive-column__sec-wrap u-wrap-l">
            <?php
            $args = array(
                'post_type' => 'column',
                'column_tag' => $term->slug
            );

            $column_posts = get_posts( $args );
            if ( $column_posts ) : // have post
            foreach ( $column_posts as $post ) :
            setup_postdata( $post );
            ?>


            <article class="archive-column__article">
                <a href="<?php the_permalink(); ?>" class="archive-column__article-link">
                    <div class="archive-column__thumbnail">
                        <div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"
                            class="archive-column__thumbnail-bg"></div>
                    </div>

                    <div class="archive-column__info">
                        <h3 class="archive-column__info-ttl"><?php the_title(); ?></h3>
                        <p class="archive-column__info-excerpt"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </a>
            </article>


            <?php
            endforeach;
            else :
            ?>
            <p class="archive-column__soon">準備中</p>
            <?php
        endif;
        wp_reset_postdata();
        ?>
        </div>
    </section>
    <?php endforeach; ?>
</main>



<?php get_footer(); ?>