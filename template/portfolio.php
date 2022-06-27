<h2 class="m-page-ttl" id="curriculum-portfolio"><span class="m-marker--main-gd">生徒様が卒業制作で作ったサイト</span></h2>

<div class="u-wrap-l">
    <div class="portfolio__wrap">

        <?php
            $args = array(
                'post_type' => 'portfolio',
                'order' => 'ASC',
                'posts_per_page' => -1, 
            );

            $posts = new WP_Query($args);
            if($posts->have_posts()):
                while($posts->have_posts()):
                $posts->the_post();
        ?>


        <div class="portfolio__item js-scale-item">
            <a href="<?php echo get_post_meta( get_the_ID(), 'URL', true ); ?>" class="portfolio__item-link" target="_blank">
                <div class="portfolio__thumbnail">
                    <div class="portfolio__thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                </div>

                <div class="portfolio__contents">
                    <div class="portfolio__info">
                        <div class="portfolio__info-face" style="background-image: url(<?php echo wp_get_attachment_url(post_custom('アイコン')); ?>)"></div>
                        <div class="portfolio__info-textarea">
                            <span class="portfolio__info-class"><?php echo get_post_meta( get_the_ID(), 'クラス', true ); ?></span>
                            <span class="portfolio__info-name"><?php the_title(); ?>様</span>
                        </div>
                    </div>

                    <div class="portfolio__msg">
                        <span class="portfolio__msg-txt"><?php the_content(); ?></span>
                    </div>
                </div>
            </a>
        </div>

        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>