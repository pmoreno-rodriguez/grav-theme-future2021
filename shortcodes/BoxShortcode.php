<?php

/**
* @author Pedro Moreno https://pmdesign.dev
* @license Public Domain
* @url https://github.com/pmoreno-rodriguez/grav-theme-future2021
*/

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class BoxShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-box', function (ShortcodeInterface $sc) {

            $output = $this->grav['twig']->processTemplate(
                'partials/shortcodes/box.html.twig',
                [
                    'shortcode' => $sc,
                ]
            );

            return $output;
        });
    }
}