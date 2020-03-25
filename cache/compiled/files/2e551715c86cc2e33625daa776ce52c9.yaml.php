<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-admin/user/plugins/blackhole/blueprints.yaml',
    'modified' => 1585139224,
    'data' => [
        'name' => 'Blackhole',
        'version' => '1.0.0-beta.1',
        'description' => 'Static site generator for Grav',
        'icon' => 'circle',
        'author' => [
            'name' => 'BarryMode'
        ],
        'homepage' => 'https://github.com/barrymode/grav-plugin-blackhole',
        'keywords' => 'grav, plugin, static, site, generator',
        'bugs' => 'https://github.com/barrymode/grav-plugin-blackhole/issues',
        'docs' => 'https://github.com/barrymode/grav-plugin-blackhole/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'generate' => [
                    'type' => 'fieldset',
                    'title' => 'Generate',
                    'info' => 'Generate your static site.',
                    'icon' => 'circle',
                    'collapsed' => false,
                    'collapsible' => false,
                    'fields' => [
                        'generate.output_url' => [
                            'type' => 'text',
                            'label' => 'Output URL',
                            'help' => 'The URL of your static site. This determines the domain used in the absolute path of your links.'
                        ],
                        'generate.output_path' => [
                            'type' => 'text',
                            'label' => 'Output Path',
                            'help' => 'The directory to which your static site will be written (relative to Grav root).'
                        ],
                        'generate.routes' => [
                            'type' => 'text',
                            'label' => 'Routes',
                            'help' => 'Limit generation to a select list of page routes.'
                        ],
                        'generate.simultaneous' => [
                            'type' => 'int',
                            'label' => 'Simultaneous Limit',
                            'help' => 'Determine how many files will generate at the same time.',
                            'size' => 'x-small',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'generate.assets' => [
                            'type' => 'toggle',
                            'label' => 'Assets',
                            'help' => 'Copy assets to the output path.',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'generate.taxonomy' => [
                            'type' => 'toggle',
                            'label' => 'Taxonomy',
                            'help' => 'Process the taxonomy map.',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'generate.force' => [
                            'type' => 'toggle',
                            'label' => 'Force',
                            'help' => 'Overwrite previously generated files.',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'generate.button' => [
                            'type' => 'text',
                            'disabled' => true,
                            'label' => '<script>$(document).ready(function() { $(\'input[name="data[generate][button]"]\').replaceWith(\'<a class="button" href="?blackhole=generate" style="float:right;"><i class="fa fa-fw fa-circle"></i> Generate</a>\'); });</script>'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
