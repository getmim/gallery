<?php

return [
    '__name' => 'gallery',
    '__version' => '0.1.0',
    '__git' => 'git@github.com:getmim/gallery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/gallery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Gallery\\Model' => [
                'type' => 'file',
                'base' => 'modules/gallery/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'gallery' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'title' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'images' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'content-pricing' => [
                'object' => [
                    'cases' => [
                        'gallery' => [
                            'model' => [
                                'name' => 'Gallery\\Model\\Gallery',
                                'field' => 'id'
                            ],
                            'format' => 'gallery'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'libEnum' => [
        'enums' => [
            'content-pricing.type' => [
                'gallery' => 'Gallery'
            ]
        ]
    ],
    'contentPricing' => [
        'active' => [
            'gallery' => true
        ],
        'objects' => [
            'gallery' => [
                'model' => 'Gallery\\Model\\Gallery',
                'format' => 'gallery',
                'fields' => [
                    'id'        => 'id',
                    'user'      => 'user',
                    'title'     => 'title',
                    'created'   => 'created',
                    'published' => 'created',
                    'status'    => '$Published'
                ]
            ]
        ]
    ]
];