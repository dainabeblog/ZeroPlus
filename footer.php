<?php if(is_page('campaign')): else: ?>
<!-- bottom cta -->
<div class="bottom-cta u-ptb-l">
    <div class="bottom-cta__wrap u-wrap">
        <p class="bottom-cta__ttl">在学中にフリーランスデビュー<br class="u-sp">している生徒様もいます</p>
        <p class="bottom-cta__copy">ZeroPlusはどこよりも面倒見の良い<br class="u-sp">スクールを目指しています!!</p>

        <a href="https://schedule.zero-plus.io/" class="m-round-btn--accent bottom-cta__btn">まずは無料で相談する</a>
    </div>
</div>
<!-- end bottom cta -->
<?php endif; ?>

<!-- footer -->
<footer id="footer" class="footer">
    <div class="u-wrap-l">
        <div class="footer__contents-wrap">
            <div class="footer__info">
                <div class="footer__info-logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_zeroplus.svg" alt="">
                    </a>
                </div>

                <ul class="footer__info-list">
                    <li class="footer__info-item">
                        <span>〒171-0022</span>
                        <span>東京都豊島区南池袋3-13-5</span>
                        <span>池袋サザンプレイス6階</span>
                    </li>
                    <li class="footer__info-item">
                        <a href="tel:0369125250">電話 : 03-6912-5250</a>
                    </li>
                    <li class="footer__info-item">
                        <a href="mailto:info@zeroplus.io">メール : support@zero-plus.io</a>
                    </li>
                </ul>
            </div>

            <nav class="footer__nav">
                <ul class="footer__nav-list">
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/feature/' ); ?>" class="u-link">特徴</a>
                    </li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/feature/spirit/' ); ?>"
                            class="u-link">私たちの想い</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/feature/insistence/' ); ?>"
                            class="u-link">レッスンへのこだわり</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/feature/event/' ); ?>"
                            class="u-link">講演・交流会</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/feature/work-support/' ); ?>"
                            class="u-link">案件サポート</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/feature/employment-support/' ); ?>"
                            class="u-link">就職・転職支援</a></li>
                </ul>

                <ul class="footer__nav-list">
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/course/' ); ?>"
                            class="u-link">コース・料金</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/curriculum/' ); ?>"
                            class="u-link">カリキュラム</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/interview/' ); ?>"
                            class="u-link">生徒様の声</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/flow/' ); ?>" class="u-link">学習の流れ</a>
                    </li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/column/' ); ?>"
                            class="u-link">お役立ち情報</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/faq/' ); ?>" class="u-link">よくあるご質問</a>
                    </li>
                </ul>

                <ul class="footer__nav-list">
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/access/' ); ?>" class="u-link">アクセス</a>
                    </li>
                    <li class="footer__nav-item"><a href="https://schedule.zero-plus.io/" class="u-link">お申し込み</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/terms/' ); ?>" class="u-link">利用規約</a>
                    </li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/privacy/' ); ?>"
                            class="u-link">プライバシーポリシー</a></li>
                    <li class="footer__nav-item"><a href="<?php echo home_url( '/calendar/' ); ?>" class="u-link">カレンダー</a></li>
                </ul>
            </nav>

            <div class="footer__cta">
                <a href="https://schedule.zero-plus.io/"
                    class="m-round-btn--gd m-gd-animation--accent footer__cta-btn"><span
                        class="m-gd-animation-bg"></span>まずは無料で相談する</a>

                <a href="<?php echo home_url( '/access/' ); ?>"
                    class="m-round-btn--gd m-gd-animation--main footer__cta-btn"><span
                        class="m-gd-animation-bg"></span>アクセス</a>

                <a href="https://twitter.com/ZeroPlus_Japan" target="_blank" class="footer__twitter">
                    <span>Follow us</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_twitter.svg" alt="">
                </a>
            </div>
        </div>
    </div>

    <small class="footer__copyright u-wrap-l"><a href="https://tomap.co" target="_blank"
            rel="noopener noreferrer">&copy; 2018 TOMAP, inc.</a></small>
</footer>
<!-- end footer -->

<script src="<?php echo get_template_directory_uri(); ?>/js/libs/scroll-hint.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.min.js"></script>
<script
    src="<?php echo get_template_directory_uri(); ?>/js/main.min.js?date=<?=date('YmdGis', filemtime(get_template_directory() . '/js/main.min.js' ));?>">
</script>
<?php wp_footer(); ?>
</body>

</html>
