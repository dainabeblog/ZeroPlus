<?php get_header(); ?>



<!-- page-kv -->
<?php get_template_part('template/kv'); ?>
<!-- end page-kv -->



<main class="faq">
    <div class="faq__wrap">
        <div class="faq__nav">
            <div class="faq__nav-wrap">
                <p class="faq__nav-ttl u-pc">QAカテゴリー</p>


                <ul class="faq__nav-list">
                    <li class="faq__nav-item">
                        <a href="#faq-curriculum" class="js-link-move">
                            <span class="faq__nav-item-txt">教材・カリキュラムについて</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-questions" class="js-link-move">
                            <span class="faq__nav-item-txt">質問対応について</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-work" class="js-link-move">
                            <span class="faq__nav-item-txt">案件サポートについて</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-employment" class="js-link-move">
                            <span class="faq__nav-item-txt">転職支援について</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-event" class="js-link-move">
                            <span class="faq__nav-item-txt">講演・交流会について</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-price" class="js-link-move">
                            <span class="faq__nav-item-txt">料金について</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-lesson" class="js-link-move">
                            <span class="faq__nav-item-txt">レッスンについて</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                    <li class="faq__nav-item">
                        <a href="#faq-contact" class="js-link-move">
                            <span class="faq__nav-item-txt">無料相談・見学について</span>
                            <span class="faq__nav-item-arrow"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="faq__contents">
            <!-- 教材・カリキュラムについて -->
            <section id="faq-curriculum" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>教材・カリキュラムについて</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_curriculum')): ?>
                    <?php while(have_rows('faq_curriculum')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- 質問対応について -->
            <section id="faq-questions" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>質問対応について</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_questions')): ?>
                    <?php while(have_rows('faq_questions')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- 案件サポートについて -->
            <section id="faq-work" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>案件サポートについて</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_work_support')): ?>
                    <?php while(have_rows('faq_work_support')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- 転職支援について -->
            <section id="faq-employment" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>転職支援について</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_employment_support')): ?>
                    <?php while(have_rows('faq_employment_support')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- 講演・交流会について -->
            <section id="faq-event" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>講演・交流会について</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_event')): ?>
                    <?php while(have_rows('faq_event')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- 料金について -->
            <section id="faq-price" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>料金について</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_price')): ?>
                    <?php while(have_rows('faq_price')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- レッスンについて -->
            <section id="faq-lesson" class="faq__sec u-pt-l">
                <h2 class="faq__ttl"><span>レッスンについて</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_lesson')): ?>
                    <?php while(have_rows('faq_lesson')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>



            <!-- 無料相談・見学について -->
            <section id="faq-contact" class="faq__sec u-ptb-l">
                <h2 class="faq__ttl"><span>無料相談・見学について</span></h2>

                <dl class="faq__list">
                    <?php if(have_rows('faq_consult')): ?>
                    <?php while(have_rows('faq_consult')): the_row(); ?>
                    <dt class="faq__question">
                        <span class="faq__txt faq__question-txt">
                            <?php the_sub_field('question'); ?>
                        </span>
                    </dt>
                    <dd class="faq__answer">
                        <span class="faq__txt faq__answer-txt">
                            <?php the_sub_field('anser'); ?>
                        </span>
                    </dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </section>
        </div>
    </div>
</main>



<?php get_footer(); ?>