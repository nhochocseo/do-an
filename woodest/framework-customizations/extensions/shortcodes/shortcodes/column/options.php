<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'column_custom_class' => array(
        'type' => 'text',
        'label' => esc_attr__('Column Custom Class', 'woodest'),
        'desc' => esc_attr__('Please add the Column custom class.', 'woodest'),
    ),
);
