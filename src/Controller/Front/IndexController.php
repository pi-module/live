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

namespace Module\Live\Controller\Front;

use Pi;
use Pi\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
        // Get info from url
        $module = $this->params('module');

        // Get config
        $config = Pi::service('registry')->config->read($module);

        // Set player
        $player = Pi::api('stream', 'live')->player();

        // Save statistics
        if (Pi::service('module')->isActive('statistics')) {
            Pi::api('log', 'statistics')->save(
                'live', 'watch', 0, [
                    'source'  => $this->params('platform'),
                    'section' => 'front',
                ]
            );
        }

        // Set view
        $this->view()->setTemplate('stream');
        $this->view()->assign('config', $config);
        $this->view()->assign('player', $player);
    }
}