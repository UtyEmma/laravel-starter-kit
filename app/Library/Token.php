<?php

namespace App\Library;

class Token {

    function counted_numbers($len, $val = 1){
        $num = [];
        for ($i=0; $i < $len; $i++) { 
            $num[] = (string) $val;
        }
        return implode('',$num);
    }

    function numeric($model, $column = 'code', $len = 6){
        $code = rand((int) $this->counted_numbers($len, 1), (int) $this->counted_numbers($len, 9));
        if($model::where($column, $code)->exists()) return $this->numeric($model, $column, $len);
        return $code;
    }

}