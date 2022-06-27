<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

    <head>
        <!-- Google Tag Manager (noscript) -->
        <!-- BMT広告-須藤さん -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NLX9MC4');</script>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TGQ7PGP');</script>
        <!-- End Google Tag Manager -->

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" type="image/x-icon"
            href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/webclip.png">

        <!-- fonts -->
        <script>
        (function(d) {
            var config = {
                    kitId: 'puo7ukh',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
        </script>

        <!-- css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs/scroll-hint.css">
        <link rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/css/style.min.css?date=<?=date('YmdGis', filemtime(get_template_directory() . '/css/style.min.css' ));?>">
        <?php wp_head(); ?>

        <!-- アフィリエイトトラッキングタグ -->
        <script src="//statics.a8.net/a8sales/a8sales.js"></script>
        <script src="https://r.moshimo.com/af/r/maftag.js"></script>
    </head>

    <body <?php body_class(); ?>>
        <!-- Google Tag Manager (noscript) -->
        <!-- BMT広告-須藤さん -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLX9MC4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGQ7PGP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->



        <!-- header -->
        <header class="header js-header">
            <?php echo is_front_page() ? '<h1 class="header__logo">' : '<div class="header__logo">'; ?>
            <a href="<?php echo home_url(); ?>" class="header__logo-link u-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_zeroplus.svg"
                    alt="<?php bloginfo( 'name' ); ?>">
            </a>
            <?php echo is_front_page() ? '</h1>' : '</div>'; ?>

            <!-- mian menu -->
            <nav class="header__menu js-menu">
                <div class="header__menu-inner">
                    <ul class="header__list">
                        <li class="header__item header__item-sp">
                            <a href="<?php echo home_url(); ?>" class="header__item-link">トップ</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/feature/' ); ?>"
                                class="header__item-link header__list-parent-item header__item-feature-sp js-hm-sub-btn">特徴<span
                                    class="header__sub-list-open-btn js-hm-sub-btn"></span></a>

                            <a href="<?php echo home_url( '/feature/' ); ?>"
                                class="header__item-link header__item-feature-pc js-under-menu-trigger">特徴</a>

                            <ul class="header__sub-list js-menu-accordion-menu">
                                <li class="header__sub-item">
                                    <a href="<?php echo home_url( '/feature/' ); ?>"
                                        class="header__sub-item-link">一覧を見る</a>
                                </li>
                                <li class="header__sub-item">
                                    <a href="<?php echo home_url( '/feature/spirit/' ); ?>"
                                        class="header__sub-item-link">私たちの想い</a>
                                </li>
                                <li class="header__sub-item">
                                    <a href="<?php echo home_url( '/feature/insistence/' ); ?>"
                                        class="header__sub-item-link">レッスンへのこだわり</a>
                                </li>
                                <li class="header__sub-item">
                                    <a href="<?php echo home_url( '/feature/event/' ); ?>"
                                        class="header__sub-item-link">講演・交流会</a>
                                </li>
                                <li class="header__sub-item">
                                    <a href="<?php echo home_url( '/feature/work-support/' ); ?>"
                                        class="header__sub-item-link">案件サポート</a>
                                </li>
                                <li class="header__sub-item">
                                    <a href="<?php echo home_url( '/feature/employment-support/' ); ?>"
                                        class="header__sub-item-link">就職・転職支援</a>
                                </li>
                            </ul>
                        </li>

                        <li class="header__item">
                            <a href="<?php echo home_url( '/course/' ); ?>" class="header__item-link">コース・料金</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/curriculum/' ); ?>" class="header__item-link">カリキュラム</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/interview/' ); ?>" class="header__item-link">生徒様の声</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/flow/' ); ?>" class="header__item-link">学習の流れ</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/column/' ); ?>" class="header__item-link">お役立ち情報</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/faq/' ); ?>" class="header__item-link">よくあるご質問</a>
                        </li>
                        <li class="header__item">
                            <a href="<?php echo home_url( '/access/' ); ?>"
                                class="header__item-link m-round-btn--gd m-gd-animation--main"><span
                                    class="m-gd-animation-bg"></span>アクセス</a>
                        </li>
                        <li class="header__item">
                            <a href="https://schedule.zero-plus.io/"
                                class="header__item-link m-round-btn--gd m-gd-animation--accent"><span
                                    class="m-gd-animation-bg"></span>お申し込み</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- pc tel -->
            <div class="header__tel m-gd-animation--main">
                <a href="tel:0369125250" class="header__tel-link">
                    <span class="header__tel-link-wrap">
                        <span class="header__tel-number">03-6912-5250</span>
                        <span class="header__tel-txt">月曜を除く11:00~18:00</span>
                    </span>
                </a>

                <span class="m-gd-animation-bg"></span>
            </div>

            <!-- sp cta -->
            <div class="header__free-contact u-sp">
                <a href="https://schedule.zero-plus.io/" class="m-round-btn--gd m-gd-animation--accent"><span
                        class="m-gd-animation-bg"></span>無料相談</a>
            </div>

            <!-- sub menu -->
            <nav class="header__under-menu js-under-menu">
                <ul class="header__under-menu-list">
                    <li class="header__under-menu-item">
                        <a href="<?php echo home_url( '/feature/' ); ?>" class="header__under-menu-item-link">一覧を見る</a>
                    </li>
                    <li class="header__under-menu-item">
                        <a href="<?php echo home_url( '/feature/spirit/' ); ?>"
                            class="header__under-menu-item-link">私たちの想い</a>
                    </li>
                    <li class="header__under-menu-item">
                        <a href="<?php echo home_url( '/feature/insistence/' ); ?>"
                            class="header__under-menu-item-link">レッスンへのこだわり</a>
                    </li>
                    <li class="header__under-menu-item">
                        <a href="<?php echo home_url( '/feature/event/' ); ?>"
                            class="header__under-menu-item-link">講演・交流会</a>
                    </li>
                    <li class="header__under-menu-item">
                        <a href="<?php echo home_url( '/feature/work-support/' ); ?>"
                            class="header__under-menu-item-link">案件サポート</a>
                    </li>
                    <li class="header__under-menu-item">
                        <a href="<?php echo home_url( '/feature/employment-support/' ); ?>"
                            class="header__under-menu-item-link">就職・転職支援</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- pc fix cta -->
        <a href="https://schedule.zero-plus.io/" class="m-cta-fix-btn js-cta-fix-btn u-pc">
            <span class="m-cta-fix-btn__inner">
                無料で、<br>相談する<span class="m-cta-fix-btn-arrow"></span>
            </span>
        </a>

        <!-- hm icon -->
        <div class="header__hm-icon js-menu-trigger">
            <span href="" class="header__hm-icon-trigger js-hm-icon">
                <span class="header__hm-icon-bar"></span>
                <span class="header__hm-icon-bar"></span>
                <span class="header__hm-icon-bar"></span>
            </span>
        </div>

        <!-- breadcrumb -->
        <?php if ( !is_home() && !is_front_page() ) : ?>
        <div class="breadcrumb">
            <?php get_template_part('template/breadcrumb'); ?>
        </div>
        <?php endif; ?>
