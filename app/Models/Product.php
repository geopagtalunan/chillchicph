<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getItems()
    {

        $response = self::orderBy("id","desc")->get();

        $response->map(function($item){
            $item->Prices;
            $item->Stocks;
            return $item;
        });

        return $response;


    }


    public function Stocks()
    {
        return $this->hasOne(stocks::class,"product_code","product_code");
    }

    public function Prices()
    {
        return $this->hasOne(prices::class,"product_code","product_code");

    }

}
