<?php
use App\Models\General;

function get_general_value($key)
{
   $general = General::where('key', $key)->first();
   if($general){
       return $general->value;
   }
   return '';
}

function get_stars($stars){
    for ($i=0; $i < $stars ; $i++) { 
        print(' <li>
                        <i class="fas fa-star"></i>
                    </li>');
    }
}
?>