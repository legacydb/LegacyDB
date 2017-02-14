<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function formatAllowedClasses(){
		
		if($this->allowed_class){
			$classes = explode(',',$this->allowed_class);
			
			$formattedClasses = '';
			foreach($classes as $class){
				$formattedClasses .= '<span class="item-class-' . strtolower(trim($class)) . '">' . trim($class) . '</span>, ';
			}
			
			return trim($formattedClasses,", ");
		}	
		
	}
	
	public function formatPrice($price){
		
		if($price == 0){
			return 0;
		}
		
		$gold = floor($price / 10000);
		$silver = floor($price % 10000 / 100);
		$copper = floor($price % 100);
		
		$html = '';
		
		if($gold > 0){
			$html .= '<span class="item-price-gold">' . $gold . '</span>';
		}
		
		if($silver > 0){
			$html .= '<span class="item-price-silver">' . $silver . '</span>';
		}
		
		if($copper > 0){
			$html .= '<span class="item-price-copper">' . $copper . '</span>';
		}
		
		return $html;
		
	}
	
}
