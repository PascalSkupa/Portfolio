<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-admin/user/themes/grav-coder/blueprints.yaml',
    'modified' => 1585125317,
    'data' => [
        'name' => 'Grav Coder',
        'version' => '0.1.7',
        'description' => 'Grav Coder, theme with minimal clutter and maximum content visibility! Inspired from hugo-coder theme.',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Paritosh Bhatia',
            'email' => 'paritosh.bh@outlook.com',
            'url' => 'https://paritoshbh.me'
        ],
        'homepage' => 'https://github.com/ParitoshBh/grav-coder',
        'demo' => 'https://paritoshbh.me',
        'keywords' => 'grav, theme, coder, minimum, clutter, content, visibility, cms, bootstrap',
        'bugs' => 'https://github.com/ParitoshBh/grav-coder/issues',
        'readme' => 'https://github.com/ParitoshBh/grav-coder/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
