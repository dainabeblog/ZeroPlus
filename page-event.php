<?php get_header(); ?>



<!-- page-kv -->
<div class="m-kv m-kv-under event-kv">
    <div class="u-wrap m-kv__wrap">
        <div class="m-kv__txt">
            <span class="m-kv__ttl-en">Event</span>
            <h1 class="m-kv__ttl-jp">
                <span class="m-marker--main-gd">講演・交流会</span>
            </h1>
        </div>
    </div>
</div>
<!-- end page-kv -->



<main class="event u-ptb-l">
    <div class="m-page-msg u-wrap">
        <p class="m-page-msg-txt">外部のゲストをお招きしての講演会やZeroPlusの卒業生も参加できる交流会を開催しています。</p>
    </div>



    <!-- lecture -->
    <section class="event__sec event__lecture u-pt-l">
        <h2 class="event__ttl m-page-ttl"><span class="m-marker--main-gd">講演会</span></h2>

        <div class="event__sec-wrap u-wrap-sm">
            <div class="event__gallery">
                <div class="event__gallery-main-img js_lecture-main-img">
                    <img src="" alt="" class="js_event-gallery">
                </div>

                <ul class="event__gallery-img-list">
                    <?php if(have_rows('event_lecture')): ?>
                    <?php while(have_rows('event_lecture')): the_row(); ?>
                    <li class="event__gallery-img-item js_event-gallery-item">
                        <img src="<?php the_sub_field('image'); ?>" alt="" class="js_event-gallery-img">
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <p class="event__txt">
                毎月の交流会に加え、2ヶ月に一度現役フリーランスの方や、企業でエンジニアとして活躍されている方をお招きし、講演会を行っています。講演会では、現場のリアルな話や、フリーランスのメリットデメリットを細かく聞くことができます。「もっと詳しい話を聞きたい！」という方は、そのあとの懇親会でもお話を伺うこともできます、もちろん、他の生徒様と交流してもOKです！
            </p>
        </div>
    </section>
    <!-- end lecture -->



    <!-- meetup -->
    <section class="event__sec event__meetup u-pt-l">
        <h2 class="event__ttl m-page-ttl"><span class="m-marker--main-gd">交流会</span></h2>


        <div class="event__sec-wrap u-wrap-sm">
            <div class="event__gallery">
                <div class="event__gallery-main-img js_meetup-main-img">
                    <img src="" alt="" class="js_event-gallery">
                </div>

                <ul class="event__gallery-img-list">
                    <?php if(have_rows('event_meetup')): ?>
                    <?php while(have_rows('event_meetup')): the_row(); ?>
                    <li class="event__gallery-img-item js_event-gallery-item">
                        <img src="<?php the_sub_field('image'); ?>" alt="" class="js_event-gallery-img">
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <p class="event__txt">
                毎月一度、交流会があり、そこには全コースの生徒様、卒業生、現役エンジニア、運営会社であるTOMAPのメンバーなど、幅広い顔ぶれが揃います。お酒も飲んだりしながら、たくさんの人と交流や意見交換ができます。毎回新入生もたくさん参加されていますが、普段人見知りをする方でも、みんなリラックスしてお話ができるアットホームな空気に包まれています。
            </p>
        </div>
    </section>
    <!-- end meetup -->



    <!-- feature page link -->
    <div class="event__feature-page-link m-feature-under-page-link u-pt-l u-wrap">
        <?php get_template_part('template/feature-page-link'); ?>
    </div>
    <!-- end feature page link -->
</main>



<?php get_footer(); ?>