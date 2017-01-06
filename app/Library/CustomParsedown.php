<?php

namespace App\Library;

use Parsedown;

class CustomParsedown extends Parsedown
{

    function __construct()
    {
        $this->InlineTypes['{'][]= 'MetaItem';
        $this->inlineMarkerList .= '{';
    }
	
    protected function inlineMetaItem($Excerpt)
    {
		
        if (!isset($Excerpt['text'][1]) or $Excerpt['text'][0] !== '{')
        {
            return;
        }		
		
		$extent = 0;
		$remainder = $Excerpt['text'];
		
		if (preg_match('/\{((?:[^][]|(?R))*)\}/', $remainder, $matches)){
			
			$extent += strlen($matches[0]);
			
			$remainder = substr($remainder, $extent);
			
			if($matches[1] == 'ItemLink'){
				
				if (preg_match('/^[(]((?:[^()]|[(][^ )]+[)])+)(?:[ ]+("[^"]*"|\'[^\']*\'))?[)]/', $remainder, $matches)){
					
					$extent += strlen($matches[0]);
					
					$itemName = $matches[1];
					
					$Inline = array(
						'extent' => $extent,
						'element' => array(
							'name' => 'a',
							'text' => $itemName,
							'attributes' => array(
								'href' => '#',
								'class' => 'item-link',
							),
						),
					);
					
					return $Inline;
					
				}
				
			}
			
		}
		
		return;
		
    }
	
}