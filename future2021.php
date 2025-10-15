<?php
namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

/**
 * Future2021 Theme
 *
 * Class Future2021
 *
 * @category Extensions
 * @package  Grav\Theme
 * @author   Pedro Moreno <https://github.com/pmoreno-rodriguez>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/pmoreno-rodriguez/grav-theme-future2021
 */


class Future2021 extends Theme
{

        public static function getSubscribedEvents()
        {
            return [
                'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
            ];
        }
        public function onTwigSiteVariables()
        {
            // Get active theme dynamically
            $activeTheme = $this->grav['theme']->name;
            $themeConfig = $this->config->get("themes.$activeTheme");
            
            // Register custom CSS
            $custom_css_path = $this->grav['locator']->findResource('theme://assets/css/custom.css');
            if (isset($themeConfig['custom_css']) && $themeConfig['custom_css'] && $custom_css_path) {
                $this->grav['assets']->addCss('theme://assets/css/custom.css', ['priority' => 5]);
            }
            
            // Register custom JavaScript
            $custom_js_path = $this->grav['locator']->findResource('theme://assets/js/custom.js');
            if (isset($themeConfig['custom_js']) && $themeConfig['custom_js'] && $custom_js_path) {
                $this->grav['assets']->addJs('theme://assets/js/custom.js', ['group' => 'bottom', 'priority' => 15]);
            }
        }

        public function onShortcodeHandlers()
        {
            $this->grav['shortcode']->registerAllShortcodes(__DIR__ . '/shortcodes');
        }

        // Add images to twig template paths to allow inclusion of SVG files
        public function onTwigLoader()
        {
            $theme_paths = Grav::instance()['locator']->findResources('theme://images');
            foreach($theme_paths as $images_path) {
                $this->grav['twig']->addPath($images_path, 'images');
            }
        }
}
