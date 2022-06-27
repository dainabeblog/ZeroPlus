<div class="feature-page-link">
    <?php if( !is_page('feature') ): ?>
    <p class="feature-page-link__ttl">
        <span class="m-marker--main-gd">Zeroplusの特徴についてもっと知る</span>
    </p>
    <?php endif; ?>


    <div class="feature-page-link__list">
        <div class="<?php if(is_page('spirit')){echo "is-active";} ?> feature-page-link__item js-scale-item">
            <div class="feature-page-link__item-image">
                <a href="<?php echo home_url( '/feature/spirit/' ); ?>"
                    class="feature-page-link__spirit-bg m-scale-dulation js-scale-trigger js-scale-elem js-feature-page-link-tmb"></a>
            </div>

            <div class="feature-page-link__item-contents">
                <?php echo is_page('feature') ? '<h2 class="feature-page-link__item-ttl">' : '<p class="feature-page-link__item-ttl">'; ?>
                私たちの想い
                <?php echo is_page('feature') ? '</h2>' : '</p>'; ?>

                <p class="feature-page-link__item-txt">
                    私たちはZeroPlusを通して、生徒様の選択肢を広げることを目的としています。<br>「こんな人生を送りたい」生徒様の想いを汲み取り、理想に近づけるのが<br
                        class="u-pc">私たちのお仕事です。</p>

                <div class="feature-page-link__view-btn m-round-arrow-btn--main">
                    <a href="<?php echo home_url( '/feature/spirit/' ); ?>"
                        class="js-scale-trigger js-feature-page-link-more">View more</a>
                </div>
            </div>
        </div>


        <div class="<?php if(is_page('insistence')){echo "is-active";} ?> feature-page-link__item js-scale-item">
            <div class="feature-page-link__item-image">
                <a href="<?php echo home_url( '/feature/insistence/' ); ?>"
                    class="feature-page-link__insistence-bg m-scale-dulation js-scale-trigger js-scale-elem js-feature-page-link-tmb"></a>
            </div>

            <div class="feature-page-link__item-contents">
                <div class="feature-page-link__item-textarea">
                    <?php echo is_page('feature') ? '<h2 class="feature-page-link__item-ttl">' : '<p class="feature-page-link__item-ttl">'; ?>
                    レッスンへのこだわり
                    <?php echo is_page('feature') ? '</h2>' : '</p>'; ?>

                    <p class="feature-page-link__item-txt">量・質・サポートともに業界No1を目指しています。<br
                            class="u-pc">レッスン内容は現役フリーランスエンジニア監修のもと作っています。</p>
                </div>

                <div class="feature-page-link__view-btn m-round-arrow-btn--main">
                    <a href="<?php echo home_url( '/feature/insistence/' ); ?>"
                        class="js-scale-trigger js-feature-page-link-more">View more</a>
                </div>
            </div>
        </div>


        <div class="<?php if(is_page('event')){echo "is-active";} ?> feature-page-link__item js-scale-item">
            <div class="feature-page-link__item-image">
                <a href="<?php echo home_url( '/feature/event/' ); ?>"
                    class="feature-page-link__event-bg m-scale-dulation js-scale-trigger js-scale-elem js-feature-page-link-tmb"></a>
            </div>

            <div class="feature-page-link__item-contents">
                <div class="feature-page-link__item-textarea">
                    <?php echo is_page('feature') ? '<h2 class="feature-page-link__item-ttl">' : '<p class="feature-page-link__item-ttl">'; ?>
                    講演・交流会
                    <?php echo is_page('feature') ? '</h2>' : '</p>'; ?>

                    <p class="feature-page-link__item-txt">現役生、OB、講師・スタッフ、ゲストを交えて、月に1回講演・交流会を<br
                            class="u-pc">行っています。ZeroPlusは卒業後も繋がりを大事にしています。</p>
                </div>

                <div class="feature-page-link__view-btn m-round-arrow-btn--main">
                    <a href="<?php echo home_url( '/feature/event/' ); ?>"
                        class="js-scale-trigger js-feature-page-link-more">View more</a>
                </div>
            </div>
        </div>


        <div class="<?php if(is_page('work-support')){echo "is-active";} ?> feature-page-link__item js-scale-item">
            <div class="feature-page-link__item-image">
                <a href="<?php echo home_url( '/feature/work-support/' ); ?>"
                    class="feature-page-link__work-bg m-scale-dulation js-scale-trigger js-scale-elem js-feature-page-link-tmb"></a>
            </div>

            <div class="feature-page-link__item-contents">
                <div class="feature-page-link__item-textarea">
                    <?php echo is_page('feature') ? '<h2 class="feature-page-link__item-ttl">' : '<p class="feature-page-link__item-ttl">'; ?>
                    案件サポート
                    <?php echo is_page('feature') ? '</h2>' : '</p>'; ?>

                    <p class="feature-page-link__item-txt">在学中に案件を取得して、フリーランスや副業の第一歩を踏み出している<br
                            class="u-pc">生徒様もいます。ZeroPlusは案件取得後もサポートをしています。</p>
                </div>

                <div class="feature-page-link__view-btn m-round-arrow-btn--main">
                    <a href="<?php echo home_url( '/feature/work-support/' ); ?>"
                        class="js-scale-trigger js-feature-page-link-more">View more</a>
                </div>
            </div>
        </div>


        <div
            class="<?php if(is_page('employment-support')){echo "is-active";} ?> feature-page-link__item js-scale-item">
            <div class="feature-page-link__item-image">
                <a href="<?php echo home_url( '/feature/employment-support/' ); ?>"
                    class="feature-page-link__employment-bg m-scale-dulation js-scale-trigger js-scale-elem js-feature-page-link-tmb"></a>
            </div>

            <div class="feature-page-link__item-contents">
                <div class="feature-page-link__item-textarea">
                    <?php echo is_page('feature') ? '<h2 class="feature-page-link__item-ttl">' : '<p class="feature-page-link__item-ttl">'; ?>
                    就職・転職支援
                    <?php echo is_page('feature') ? '</h2>' : '</p>'; ?>

                    <p class="feature-page-link__item-txt">
                        ZeroPlusでは有料職業紹介を保持しており、あなたの求める条件だけでなく、<br class="u-pc">アドバイザーが自己分析からお手伝いします。</p>
                </div>

                <div class="feature-page-link__view-btn m-round-arrow-btn--main">
                    <a href="<?php echo home_url( '/feature/employment-support/' ); ?>"
                        class="js-scale-trigger js-feature-page-link-more">View more</a>
                </div>
            </div>
        </div>
    </div>
</div>