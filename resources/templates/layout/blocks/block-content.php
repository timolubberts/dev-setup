<?php
/**
 * Points Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


?>

<section id="dev-content" class="dev-content">
    <div class="container">
        <div class="row">
            <?php if(have_rows('layout_builder')):?>
                <?php while(have_rows('layout_builder')):  ?>
                    <?php the_row(); ?>
                    <?php if(get_row_layout() == 'content_builder'):?>
                        <?php
                        $col = get_sub_field('block_column');
                        $offset = get_sub_field('block_offset');
                        $order = get_sub_field('block_order');
                        ?>
                        <div class="col-lg-<?= $col ?> offset-lg-<?= $offset ?> col-12 order-lg-12 <?php if($order >= 1 ) { ?> order-<?= $order ?> <?php } ?>">
                            <?php if(have_rows('block_builder')):?>

                                <?php while(have_rows('block_builder')): the_row(); ?>
                                    <?php //Get elements ?>

                                    <?php if(get_row_layout() == 'block_paragraph'): ?>
                                        <?= get_template_part('resources/templates/layout/blocks/elements/element', 'paragraph'); ?>
                                    <?php endif; ?>

                                    <?php if(get_row_layout() == 'block_image'): ?>
                                        <?= get_template_part('resources/templates/layout/blocks/elements/element', 'image'); ?>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col">
                    <p>
                        <?= __('Niks', 'devsetup'); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>