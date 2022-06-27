<?php get_header(); ?>



<!-- page-kv -->
<?php get_template_part('template/kv'); ?>
<!-- end page-kv -->



<main class="error404">
    <div class="u-ptb-l u-wrap">
        <p class="error404__txt">申し訳ございませんが、お探しのページは見つかりませんでした。<br class="u-pc">お探しのページは削除されたか、URLが変更された可能性がございます。</p>

        <a href="<?php echo home_url(); ?>" class="error404__btn m-round-btn--gd m-gd-animation--main"><span
                class="m-gd-animation-bg"></span>トップへ戻る</a>
    </div>
</main>



<?php get_footer(); ?>