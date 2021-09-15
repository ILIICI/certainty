<?php
namespace App\Classes;

use App\Models\Post;
use Illuminate\Support\Facades\Schema;

class Helper
{
    public static function getUniqueCode($name){
        while(!(Post::where('_code',$name)->exists())){
            return preg_replace('/\s+/', '', $name).'-'.rand(10000,100000);
        }
    } 
    public static function check_Db_Table_Exists(... $array){
        $checker = true;
        foreach ($array as $value) {
            if(!Schema::hasTable($value)){
                $checker = false;
            }
        }
        return $checker;
    } 
    public static function check_Table_Column_Exists($table , ... $array){
        $checker = true;
        foreach ($array as $value) {
            foreach ($value as $name) {
                if(!Schema::hasColumn($table,$name)){
                    $checker = false;
                }
            }
        }
        return $checker;
    }   
}

