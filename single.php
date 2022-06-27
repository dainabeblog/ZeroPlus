<?php get_header(); ?>



<div class="blog-kv">
    <div class="">
        <p>BLOG</p>
    </div>
</div>



<div class="m_wrap u_ptb60_80 blog-single">
    <main class="">
        <?php
        while ( have_posts() ) : the_post();
        ?>

        <div class="blog-single__thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>

        <h1 class="blog-single__ttl"><?php the_title(); ?></h1>

        <div class="blog-single__info">
            <span class="blog-single__date"><?php the_time(get_option('date_format'));?></span>
            <div class="blog-single__cat">
                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
            </div>
        </div>

        <div class="blog-single__share">
            <?php
            $share_url   = get_permalink();
            $share_title = get_the_title();
        ?>
            <div class="twitter">
                <a href="//twitter.com/share?text=<?=$share_title?>&url=<?=$share_url?>" title="Twitterでシェア"
                    onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;">
                    Tweet
                </a>
            </div>

            <div class="facebook">
                <a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>"
                    title="Facebookでシェア"
                    onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
                    Share
                </a>
            </div>

            <div class="hatebu">
                <a href="//b.hatena.ne.jp/add?mode=confirm&url=<?=$share_url?>"
                    onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=1000');return false;"
                    title="はてなブックマークに登録">
                    はてな
                </a>
            </div>
        </div>

        <div class="blog-single__intro">
            <p>この記事は<a
                    href="<?php echo home_url(); ?>">フリーランス特化型プログラミングスクールZeroPlus</a>による、プログラミング×教育×キャリアに関する情報発信を行うブログです。これからプログラミングを勉強して、キャリアの幅を広げようとしている方に向けたコンテンツになっています。
            </p>
        </div>

        <div class="blog-single__content">
            <?php the_content(); ?>
        </div>

        <div class="blog-single__end">
            <p><a
                    href="<?php echo home_url(); ?>">フリーランス特化型プログラミングスクールZeroPlus</a>は常に生徒を想い、<span>「継続して学習できる環境」</span>を作っています。ZeroPlusでは、<span>現役フリーランスエンジニアが監修する6ヶ月間のフリーランス特化型カリキュラム</span>が受講できます。無料で参加できる説明会や見学会を随時開催していますので、是非お越しください。お待ちしております。
            </p>
        </div>

        <div class="blog-single__share">
            <?php
          $share_url   = get_permalink();
          $share_title = get_the_title();
        ?>
            <div class="twitter">
                <a href="//twitter.com/share?text=<?=$share_title?>&url=<?=$share_url?>" title="Twitterでシェア"
                    onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;">
                    Tweet
                </a>
            </div>

            <div class="facebook">
                <a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>"
                    title="Facebookでシェア"
                    onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
                    Share
                </a>
            </div>

            <div class="hatebu">
                <a href="//b.hatena.ne.jp/add?mode=confirm&url=<?=$share_url?>"
                    onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=1000');return false;"
                    title="はてなブックマークに登録">
                    はてな
                </a>
            </div>
        </div>

        <?php endwhile; ?>
    </main>
</div>



<?php get_footer(); ?>