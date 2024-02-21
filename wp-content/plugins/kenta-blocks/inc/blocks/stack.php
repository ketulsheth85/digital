<?php

/**
 * Stack block config
 *
 * @package Kenta Blocks
 */
$attributes = array_merge(
    array(
    'blockID' => array(
    'type' => 'string',
),
    'justify' => array(
    'type'    => 'object',
    'default' => 'flex-start',
),
    'gap'     => array(
    'type'    => 'object',
    'default' => '12px',
),
),
    kenta_blocks_container_global_style(),
    kenta_blocks_box_attrs(),
    kenta_blocks_overlay_attrs(),
    kenta_blocks_linkable_attrs(),
    kenta_blocks_position_attrs(),
    kenta_blocks_advanced_attrs()
);
$metadata = array(
    'title'       => __( 'Stack (KB)', 'kenta-blocks' ),
    'description' => __( 'Arrange blocks vertically.', 'kenta-blocks' ),
    'keywords'    => array(
    'stack',
    'group',
    'stack',
    'container'
),
    'supports'    => array(
    'anchor' => true,
    'align'  => array( 'wide', 'full' ),
    'html'   => false,
),
    'attributes'  => $attributes,
);
return array(
    'metadata' => $metadata,
    'css'      => function ( $block, $css ) {
    $id = kb_get_block_attr( $block, 'blockID' );
    $css[".kb-stack.kb-stack-{$id}"] = array_merge(
        kenta_blocks_css()->border( kb_get_block_attr( $block, 'border' ) ),
        kenta_blocks_css()->shadow( kb_get_block_attr( $block, 'shadow' ) ),
        kenta_blocks_css()->background( kb_get_block_attr( $block, 'background' ) ),
        kenta_blocks_css()->dimensions( kb_get_block_attr( $block, 'radius' ), 'border-radius' ),
        kenta_blocks_container_global_css( $block ),
        kenta_blocks_position_css( $block ),
        kenta_blocks_advanced_css( $block )
    );
    $css[".kb-stack.kb-stack-{$id} > .kb-stack-inner-container"] = array(
        'align-items' => kb_get_block_attr( $block, 'justify' ),
        'gap'         => kb_get_block_attr( $block, 'gap' ),
    );
    $css[".kb-stack-has-overlay.kb-stack-{$id}::after"] = kenta_blocks_overlay_css( $block );
    return $css;
},
);