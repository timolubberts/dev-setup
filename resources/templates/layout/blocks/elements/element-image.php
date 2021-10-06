<?php
//settings
$image = get_sub_field('image');
$size = get_sub_field('image_size');

?>
<div class="dev-content__image">
<?php echo wp_get_attachment_image($image, $size, '', array('class' => 'dev-content__image--img')); ?>
</div>
