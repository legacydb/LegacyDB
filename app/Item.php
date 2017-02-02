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
}
