<?php get_header(); ?>



<!-- page-kv -->
<?php get_template_part('template/kv'); ?>
<!-- end page-kv -->



<main class="access">
    <div class="access__sec u-ptb-m u-wrap">
        <div class="access__contents">
            <div class="access__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/access/pic_ikebukuro_school.webp"
                        type="image/webp" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/access/pic_ikebukuro_school.jpg" alt="" />
                </picture>
            </div>


             <div class="access__info">
                <div class="access__info-sec access__info-address">
                    <div class="access__info-address-wrap">
                        <p>03-6912-5250</p>
                        <p>〒171-0022<br>東京都豊島区南池袋3丁目13-5 <br class="u-sp">池袋サザンプレイス6階</p>
                        <a href="https://goo.gl/maps/KjYaauo2zv6Q1ZAR7" target="_blank"
                            class="access__info-address-gmap">
                            <span>Google Map</span>
                        </a>
                    </div>
                </div>

                <div class="access__info-sec access__info-directions">
                    <p class="access__info-directions-txt">JR・西武「池袋駅」東口より徒歩10分</p>
                </div>
            </div>
        </div>



        <!-- default -->
        <div class="access__gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1053.2608500417105!2d139.71112633683117!3d35.72566363007418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d69d663eb29%3A0x8e512f8ba64e370a!2z44CSMTcxLTAwMjIg5p2x5Lqs6YO96LGK5bO25Yy65Y2X5rGg6KKL77yT5LiB55uu77yR77yT4oiS77yV!5e0!3m2!1sja!2sjp!4v1611396560806!5m2!1sja!2sjp"width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
			</iframe>     
        </div>
    </div>
</main>



<?php get_footer(); ?>