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
        'low'              => [
            'category'    => 'stream',
            'title'       => _a('Low stream url'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'medium'           => [
            'category'    => 'stream',
            'title'       => _a('Medium stream url'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'high'             => [
            'category'    => 'stream',
            'title'       => _a('High stream url'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'hls_mime_type'    => [
            'category' => 'stream',
            'title'    => _a('Mime type for HLS video'),
            'edit'     => 'text',
            'filter'   => 'string',
            'value'    => 'application/x-mpegURL',
        ],
        'logo'             => [
            'category'    => 'stream',
            'title'       => _a('Player logo'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'poster'             => [
            'category'    => 'stream',
            'title'       => _a('Player poster'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],

        // View
        'page_title'       => [
            'category'    => 'view',
            'title'       => _a('Page title'),
            'description' => '',
            'edit'        => 'text',
            'filter'      => 'string',
            'value'       => '',
        ],
        'page_description' => [
            'category'    => 'view',
            'title'       => _a('Description'),
            'description' => '',
            'edit'        => 'textarea',
            'filter'      => 'string',
            'value'       => '',
        ],
    ],
];
