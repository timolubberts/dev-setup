<?php

/**
 * Advanced Custom Fields, register blocks
 *
 * @package Foundation
 */

/*
|----------------------------------------------------------------
| Advanced Custom Fields - blocks
|----------------------------------------------------------------
*/

function register_acf_block_types(){
    acf_register_block_type(array(
        'name'              => 'content',
        'title'             => 'Content',
        'render_template'   => 'resources/templates/layout/blocks/block-content.php',
        'supports'          => array('align' => false, 'mode' => false),
        'mode'              => 'edit',
    ));
    acf_register_block_type(array(
        'name'              => 'services',
        'title'             => 'Services',
        'render_template'   => 'resources/templates/layout/blocks/block-services.php',
        'supports'          => array('align' => false, 'mode' => false),
        'mode'              => 'edit',
    ));
}


//------------
if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'register_acf_block_types');
}
?>