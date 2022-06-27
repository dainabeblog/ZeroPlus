<?php get_header(); ?>



<!-- page-kv -->
<?php get_template_part('template/kv'); ?>
<!-- end page-kv -->



<main class="single-column u-ptb-m u-wrap-s">
    <?php while ( have_posts() ) : the_post(); ?>



    <div class="single-column__thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <h1 class="single-column__ttl"><?php the_title(); ?></h1>

    <div class="single-column__info">
        <span class="single-column__info-date"><?php the_time(get_option('date_format'));?></span>
    </div>



    <div class="single-column__share single-column__share-top">
        <?php
        $share_url   = get_permalink();
        $share_title = get_the_title();
        ?>

        <div class="single-column__share-item single-column__share--twitter">
            <a href="//twitter.com/share?text=<?=$share_title?>&url=<?=$share_url?>" title="Twitterでシェア"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;">
                Tweet
            </a>
        </div>

        <div class="single-column__share-item single-column__share--facebook">
            <a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>" title="Facebookでシェア"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
                Share
            </a>
        </div>

        <div class="single-column__share-item single-column__share--hatebu">
            <a href="//b.hatena.ne.jp/add?mode=confirm&url=<?=$share_url?>"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=1000');return false;"
                title="はてなブックマークに登録">
                はてな
            </a>
        </div>
    </div>



    <div class="m-single-contents">
        <?php the_content(); ?>
    </div>



    <div class="single-column__share single-column__share-bottom">
        <?php
        $share_url   = get_permalink();
        $share_title = get_the_title();
        ?>

        <div class="single-column__share-item single-column__share--twitter">
            <a href="//twitter.com/share?text=<?=$share_title?>&url=<?=$share_url?>" title="Twitterでシェア"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;">
                Tweet
            </a>
        </div>

        <div class="single-column__share-item single-column__share--facebook">
            <a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>" title="Facebookでシェア"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
                Share
            </a>
        </div>

        <div class="single-column__share-item single-column__share--hatebu">
            <a href="//b.hatena.ne.jp/add?mode=confirm&url=<?=$share_url?>"
                onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=1000');return false;"
                title="はてなブックマークに登録">
                はてな
            </a>
        </div>
    </div>



    <?php endwhile; ?>
</main>



<?php get_footer(); ?>