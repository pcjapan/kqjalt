<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/kqjalt/user/config/site.yaml',
    'modified' => 1702540190,
    'size' => 389,
    'data' => [
        'title' => 'Kitakyushu JALT',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Websit Administrator',
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
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
