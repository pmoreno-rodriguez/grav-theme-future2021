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
    /**
     * Subscribe to Grav events
     *
     * @return array Event subscriptions
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onTwigLoader'        => ['onTwigLoader', 0]
        ];
    }

    /**
     * Register shortcodes handlers securely
     *
     * @return void
     */
    public function onShortcodeHandlers(): void
    {
        if (!isset($this->grav['shortcode'])) {
            return;
        }

        $shortcodesPath = __DIR__ . '/shortcodes';

        if (!is_dir($shortcodesPath)) {
            $this->grav['log']->warning("Future2021 Theme: Shortcodes directory not found at {$shortcodesPath}");
            return;
        }

        $this->grav['shortcode']->registerAllShortcodes($shortcodesPath);
    }

    /**
     * Add images to twig template paths to allow direct inclusion of SVG files
     *
     * @return void
     */
    public function onTwigLoader(): void
    {
        $themePaths = Grav::instance()['locator']->findResources('theme://images');
        
        foreach ($themePaths as $imagesPath) {
            $this->grav['twig']->addPath($imagesPath, 'images');
        }
    }

    /**
     * Register custom CSS and JavaScript assets on the frontend
     *
     * @return void
     */
    public function onTwigSiteVariables(): void
    {
        // Prevent theme assets execution inside the admin panel
        if ($this->isAdmin()) {
            return;
        }

        $themeConfig = $this->getThemeConfig();

        $this->registerCustomCss($themeConfig);
        $this->registerCustomJs($themeConfig);
    }

    /**
     * Get current theme configuration using native fallback
     *
     * @return array Theme configuration
     */
    private function getThemeConfig(): array
    {
        $activeTheme = $this->grav['theme']->name ?? 'future2021';
        return $this->config->get("themes.{$activeTheme}", []);
    }

    /**
     * Register custom CSS if enabled in config and file exists
     *
     * @param array $themeConfig Theme configuration
     * @return void
     */
    private function registerCustomCss(array $themeConfig): void
    {
        if (empty($themeConfig['custom_css'])) {
            return;
        }

        $customCssPath = 'theme://assets/css/custom.css';

        if (!$this->assetExists($customCssPath)) {
            $this->grav['log']->notice("Future2021 Theme: Custom CSS enabled but file not found at {$customCssPath}");
            return;
        }

        $this->grav['assets']->addCss($customCssPath, ['priority' => 5]);
    }

    /**
     * Register custom JavaScript if enabled in config and file exists
     *
     * @param array $themeConfig Theme configuration
     * @return void
     */
    private function registerCustomJs(array $themeConfig): void
    {
        if (empty($themeConfig['custom_js'])) {
            return;
        }

        $customJsPath = 'theme://assets/js/custom.js';

        if (!$this->assetExists($customJsPath)) {
            $this->grav['log']->notice("Future2021 Theme: Custom JS enabled but file not found at {$customJsPath}");
            return;
        }

        $this->grav['assets']->addJs($customJsPath, [
            'group'    => 'bottom',
            'priority' => 15,
        ]);
    }

    /**
     * Check if asset exists using Grav's locator stream system
     *
     * @param string $path Asset path using Grav's stream notation
     * @return bool True if asset exists, false otherwise
     */
    private function assetExists(string $path): bool
    {
        return (bool) $this->grav['locator']->findResource($path);
    }
}