<?php

/**
* @author Pedro Moreno https://pmdesign.dev
* @license Public Domain
* @url https://github.com/pmoreno-rodriguez/grav-theme-future2021
*/

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class FlexShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('sc-flex', function (ShortcodeInterface $sc) {

            $hash = $this->shortcode->getId($sc);

            $output = $this->twig->processTemplate(
                'partials/shortcodes/flex.html.twig', // Twig template for shortcode
                [
                    'hash' => $hash,
                    'section_id' => $sc->getParameter('id','features'), // ID for Section, 'features' is default
                    'row_class' => 'row gtr-uniform' . $sc->getParameter('class', ''), // Concatenate 'row' with user-provided class
                    'row_styles' => $sc->getParameter('style',''), // Define inline styles
                    'columns' => $this->shortcode->getStates($hash),
                ]
            );

            return $output;
        });

        $this->shortcode->getHandlers()->add('column', function (ShortcodeInterface $sc) {
            // Add column to layout state using parent layout id
            $hash = $this->shortcode->getId($sc->getParent());
            $this->shortcode->setStates($hash, $sc);

            return '';
        });
    }
}