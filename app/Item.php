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
		
		echo $price;
		
		$priceNames = array('copper','silver','gold');
		$length = strlen($price);
		$values = array();
		$html = '';
		
		if($length > 6){
			$difference = $length - 6 + 2;
			$values[0] = substr($price,0,$difference);
			$values[1] = substr($price,$difference,2);
			$values[2] = substr($price,$difference + 2,4);
		} else {
			$values = str_split($price,2);
		}
		
		$priceCount = count($values);
		
		foreach($values as $i => $value){
			$html .= '<span class="item-price item-price-' . $priceNames[--$priceCount] . '">' . number_format($value) . '</span>';
		}
		
		return $html;
		
	}
	
}
