<?php

use App\Library\Notify;
use App\Library\Response;

if(!function_exists('respond')){
    function respond(){
        return new Response();
    }
}

// if(!function_exists('notify'))  {
//     function notify($subject = '', $data = []) : Notify {
//         if(class_exists($subject)){
//             if($message = app($subject) ) return $message->parse($data);
//         }

//         return new Notify($subject);
//     }
// }