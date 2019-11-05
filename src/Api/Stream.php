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

namespace Module\Live\Api;

use Pi;
use Pi\Application\Api\AbstractApi;

/*
 * Pi::api('stream', 'live')->source();
 */

class Stream extends AbstractApi
{
    public function source()
    {
        // Get config
        $config = Pi::service('registry')->config->read($this->getModule());

        $source = [
            'low'    => [
                'url'   => sprintf('%s/%s/playlist.m3u8', $config['http'], $config['low']),
                'title' => __('Low quality'),
            ],
            'medium' => [
                'url'   => sprintf('%s/%s/playlist.m3u8', $config['http'], $config['medium']),
                'title' => __('Medium quality'),
            ],
            'high'   => [
                'url'   => sprintf('%s/%s/playlist.m3u8', $config['http'], $config['high']),
                'title' => __('High quality'),
            ],
        ];

        return $source;
    }
}