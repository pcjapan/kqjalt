<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/kqjalt/user/config/plugins/simplesearch.yaml',
    'modified' => 1702292639,
    'size' => 456,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'display_button' => true,
        'min_query_length' => 3,
        'route' => '/search',
        'search_content' => 'rendered',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => [
                0 => '@none'
            ]
        ],
        'filter_combinator' => 'and',
        'ignore_accented_characters' => false,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'searchable_types' => [
            'title' => true,
            'content' => true,
            'header' => true,
            'taxonomy' => true
        ],
        'header_keys_ignored' => [
            0 => 'title',
            1 => 'taxonomy',
            2 => 'content',
            3 => 'form',
            4 => 'forms',
            5 => 'media_order'
        ]
    ]
];
