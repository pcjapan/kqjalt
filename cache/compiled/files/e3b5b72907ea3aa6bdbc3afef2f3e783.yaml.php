<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/kqjalt/user/config/security.yaml',
    'modified' => 1702893888,
    'size' => 555,
    'data' => [
        'xss_whitelist' => [
            0 => 'admin.super'
        ],
        'xss_enabled' => [
            'on_events' => true,
            'invalid_protocols' => true,
            'moz_binding' => true,
            'html_inline_styles' => true,
            'dangerous_tags' => true
        ],
        'xss_invalid_protocols' => [
            0 => 'javascript',
            1 => 'livescript',
            2 => 'vbscript',
            3 => 'mocha',
            4 => 'feed',
            5 => 'data'
        ],
        'xss_dangerous_tags' => [
            0 => 'applet',
            1 => 'meta',
            2 => 'xml',
            3 => 'blink',
            4 => 'link',
            5 => 'style',
            6 => 'script',
            7 => 'embed',
            8 => 'object',
            9 => 'frame',
            10 => 'frameset',
            11 => 'ilayer',
            12 => 'layer',
            13 => 'bgsound',
            14 => 'title',
            15 => 'base'
        ],
        'uploads_dangerous_extensions' => [
            0 => 'php',
            1 => 'phar',
            2 => 'html',
            3 => 'htm',
            4 => 'js',
            5 => 'exe'
        ],
        'sanitize_svg' => true,
        'salt' => 'QK87IThGSVUAwn'
    ]
];
