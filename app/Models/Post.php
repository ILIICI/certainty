<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    public $timestamps = false;
    
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
                            '_name',
                            '_surname',
                            '_address',
                            '_description',
                            '_code'];

    public function getImageModels(){
        return $this->hasMany(Image::class);
    }

}
