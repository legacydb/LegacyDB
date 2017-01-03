<?php

namespace App\Library;

use Parsedown;

class CustomParsedown extends Parsedown
{

    function __construct()
    {
        $this->InlineTypes['{'][]= 'ColoredText';

        $this->inlineMarkerList .= '{';
    }

    protected function inlineColoredText($excerpt)
    {
        if (preg_match('/^{c:([#\w]\w+)}(.*?){\/c}/', $excerpt['text'], $matches))
        {
            return array(

                // How many characters to advance the Parsedown's
                // cursor after being done processing this tag.
                'extent' => strlen($matches[0]), 
                'element' => array(
                    'name' => 'span',
                    'text' => $matches[2],
                    'attributes' => array(
                        'style' => 'color: ' . $matches[1],
                    ),
                ),

            );
        }
    }
	
}