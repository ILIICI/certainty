<?php
namespace App\Classes;

use App\Models\Post;

class Helper
{
    public static function getUniqueCode($name){
        while(!(Post::where('_code',$name)->exists())){
            return preg_replace('/\s+/', '', $name).'-'.rand(10000,100000);
        }
    }    
}

