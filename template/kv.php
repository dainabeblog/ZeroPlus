<!-- page-kv -->
<div class="m-kv m-kv-main">
    <div class="u-wrap m-kv__wrap">
        <div class="m-kv__txt">
            <?php if (is_post_type_archive('column')) : ?>
            <span class="m-kv__ttl-en">Column</span>
            <h1 class="m-kv__ttl-jp">お役立ち情報</h1>
            <?php elseif (is_post_type_archive('interview')): ?>
            <span class="m-kv__ttl-en">Voice</span>
            <h1 class="m-kv__ttl-jp">生徒様の声</h1>
            <?php elseif (is_page('access')): ?>
            <span class="m-kv__ttl-en">Access</span>
            <h1 class="m-kv__ttl-jp">アクセス（池袋校）</h1>
            <?php elseif (is_page('course')): ?>
            <span class="m-kv__ttl-en">Course & Price</span>
            <h1 class="m-kv__ttl-jp">コース・料金</h1>
            <?php elseif (is_page('curriculum')): ?>
            <span class="m-kv__ttl-en">Curriculum</span>
            <h1 class="m-kv__ttl-jp">カリキュラム</h1>
            <?php elseif (is_page('faq')): ?>
            <span class="m-kv__ttl-en">Faq</span>
            <h1 class="m-kv__ttl-jp">よくあるご質問</h1>
            <?php elseif (is_page('feature')): ?>
            <span class="m-kv__ttl-en">Feature</span>
            <h1 class="m-kv__ttl-jp">ZeroPlusの特徴</h1>
            <?php elseif (is_page('flow')): ?>
            <span class="m-kv__ttl-en">Flow</span>
            <h1 class="m-kv__ttl-jp">学習の流れ</h1>
            <?php elseif (is_page('privacy')): ?>
            <span class="m-kv__ttl-en">Privacy</span>
            <h1 class="m-kv__ttl-jp">プライバシーポリシー</h1>
            <?php elseif (is_page('terms')): ?>
            <span class="m-kv__ttl-en">Terms</span>
            <h1 class="m-kv__ttl-jp">利用規約</h1>
            <?php elseif (is_page('web-design')): ?>
            <span class="m-kv__ttl-en">Web Design</span>
            <h1 class="m-kv__ttl-jp">Webデザインコース</h1>
            <?php elseif (is_page('campaign')): ?>
            <span class="m-kv__ttl-en">Campaign</span>
            <p class="m-kv__ttl-jp">お友達紹介キャンペーン</p>
            <?php elseif (is_singular('column')): ?>
            <span class="m-kv__ttl-en">Column</span>
            <p class="m-kv__ttl-jp">お役立ち情報</p>
            <?php elseif (is_singular('interview')): ?>
            <span class="m-kv__ttl-en">Voice</span>
            <p class="m-kv__ttl-jp">生徒様の声</p>
            <?php elseif (is_404()): ?>
            <span class="m-kv__ttl-en">404 Not Found</span>
            <h1 class="m-kv__ttl-jp">お探しのページは<br class="u-sp">見つかりませんでした</h1>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- end page-kv -->
