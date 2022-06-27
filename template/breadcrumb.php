<!-- sort -->
<?php $ancestors_ids = array_reverse(get_post_ancestors( $post )); ?>

<!-- breadcrumb list -->
<ul class="breadcrumb__list">
    <li class="breadcrumb__list-item">
        <a href="<?php echo home_url(); ?>" class="u-link">ホーム</a>
    </li>


    <!-- single interview or column -->
    <?php if( is_singular('interview') || is_singular('column') ):?>
    <li class="breadcrumb__list-item">
        <a href="<?php echo get_post_type_archive_link($post_type); ?>" class="u-link">
            <?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name ); ?>
        </a>
    </li>
    <?php endif; ?>


    <!-- parent page -->
    <?php foreach($ancestors_ids as $ancestors_id){ ?>
    <li class="breadcrumb__list-item">
        <a href="<?php echo get_page_link( $ancestors_id );?>" class="u-link">
            <?php echo get_page($ancestors_id)->post_title; ?>
        </a>
    </li>
    <?php } ?>


    <?php if(is_404()):?>
    <li class="breadcrumb__list-item">お探しのページは見つかりませんでした</li>
    <?php else:?>
    <li class="breadcrumb__list-item"><?php wp_title('', true); ?></li>
    <?php endif; ?>
</ul>
