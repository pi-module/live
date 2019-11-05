<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
return [
    'category' => [
        [
            'title' => _a('Stream'),
            'name'  => 'stream',
        ],

        [
            'title' => _a('View'),
            'name'  => 'view',
        ],
    ],
    'item'     => [
        // stream
        'http' => [
            'category'    => 'stream',
            'title'       => _a('Http URL'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'low' => [
            'category'    => 'stream',
            'title'       => _a('Low public point'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'medium' => [
            'category'    => 'stream',
            'title'       => _a('Medium public point'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'high' => [
            'category'    => 'stream',
            'title'       => _a('High public point'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],

        // View
        'page_title' => [
            'category'    => 'view',
            'title'       => _a('Page title'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'page_description'    => [
            'category'    => 'view',
            'title'       => _a('Description'),
            'description' => '',
            'edit'        => 'textarea',
            'filter'      => 'string',
            'value'       => '',
        ],
    ],
];