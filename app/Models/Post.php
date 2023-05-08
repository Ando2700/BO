<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ "titre", "description", "detail", "created_at" ];

    public function image(){
        return $this->hasOne(Image::class);
    }
}
