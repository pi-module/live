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
 * Pi::api('stream', 'live')->player();
 */

class Stream extends AbstractApi
{
    public function player()
    {
        // Get config
        $config = Pi::service('registry')->config->read($this->getModule());

        // Set player
        $player = [];

        // Check quality
        if (isset($config['low']) && !empty($config['low'])) {
            $player['source']['low'] = [
                'url'   => $config['low'],
                'title' => __('Low quality'),
            ];
        }

        // Check quality
        if (isset($config['medium']) && !empty($config['medium'])) {
            $player['source']['medium'] = [
                'url'   => $config['medium'],
                'title' => __('Medium quality'),
            ];
        }

        // Check quality
        if (isset($config['high']) && !empty($config['high'])) {
            $player['source']['high'] = [
                'url'   => $config['high'],
                'title' => __('High quality'),
            ];
        }

        // Set player
        if (!empty($player['source'])) {

            $player['type']     = 'hls';
            $player['mimetype'] = $config['hls_mime_type'];

            if (isset($config['poster']) && !empty($config['poster'])) {
                $player['layout']['posterImage'] = $config['poster'];
            }

            if (isset($config['logo']) && !empty($config['logo'])) {
                $player['layout']['logo']['imageUrl'] = $config['logo'];
            }
        }

        return $player;
    }
}
