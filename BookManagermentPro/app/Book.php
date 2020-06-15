<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    function getDisplayprice(){
        $formatedPrice = number_format($this->price,2,",",".");
        return $formatedPrice ." VND";
    }
}
