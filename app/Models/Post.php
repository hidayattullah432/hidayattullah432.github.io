<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['cover','title','sumber','slug','body','tanggal'];



    public function getTakeImageAttribute(){
        return "/storage/" . $this->cover;
    }
}
