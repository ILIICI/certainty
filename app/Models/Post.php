<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
                            '_name',
                            '_surname',
                            '_address',
                            '_description',
                            '_code'];

    public function postModels(){
        return $this->hasMany(Image::class);
    }

}
