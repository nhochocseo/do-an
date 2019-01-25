<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'margin_number' => array(
        'type' => 'text',
        'label' => esc_attr__('Số margin bottom', 'woodest'),
        'desc' => esc_attr__('.', 'woodest'),
    ),
);
