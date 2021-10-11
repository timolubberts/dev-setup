<?php
//settings
$image = get_sub_field('image');
$size = get_sub_field('image_size');
$link = get_sub_field('image_link');
$label = get_sub_field('image_label');
?>
<div class="dev-content__image">
    <a data-fslightbox href="<?= wp_get_attachment_image_url($image, 'lightbox') ?>">
        <?php echo wp_get_attachment_image($image, $size, '', array('class' => 'dev-content__image--img')); ?>
    </a>
</div>
