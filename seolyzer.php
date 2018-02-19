<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class SeolyzerPlugin
 * @package Grav\Plugin
 */
class SeolyzerPlugin extends Plugin
{
    const SEOLYZER_ROOT_PATH = 'data/seolyzer';
    const SEOLYZER_FILE_PREFIX = 'seolyzer-';

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Get key from config
        $seolyzerKey = $this->config->get('plugins.seolyzer.key');

        // Build file path to include from user/data/seolyzer directory
        $fileToInclude = __DIR__ . '/../../'.self::SEOLYZER_ROOT_PATH.'/' . self::SEOLYZER_FILE_PREFIX . $seolyzerKey . '.php';

        // Do not process if no key provided or file not exists
        if (empty($seolyzerKey) || !is_file($fileToInclude)) {
            return;
        }

        // Load the Seolyzer PHP File
        require_once $fileToInclude;
        $this->grav['debugger']->addMessage('Seolyzer initialized with key: ' . $seolyzerKey);
    }
}
