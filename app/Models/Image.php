<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'id';

    protected $fillable = [
                            'post_id',
                            '_image_path'];

    public function imageModels(){
        return $this->belongsTo(Post::class);
    }
}
