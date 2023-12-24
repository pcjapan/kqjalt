<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/kqjalt/user/config/site.yaml',
    'modified' => 1702634602,
    'size' => 455,
    'data' => [
        'title' => 'Kitakyushu JALT',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Website Administrator',
            'email' => 'kitakyushu@jalt.org'
        ],
        'taxonomies' => [
            0 => 'content',
            1 => 'events',
            2 => 'year'
        ],
        'metadata' => [
            'description' => 'This is the website for the Japan Association for Language Teaching Kitakyushu chapter'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 60,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/schedule/([^/]+)/([^/]+)/([^/]+)$' => '/schedule/archive/$1-$2-$3[301]'
        ],
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
