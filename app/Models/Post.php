<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $guarded = ['*']; // everything is guarded from mass-assignment

//    protected $fillable = ['title', 'excerpt', 'body']; // specifies which attributes can be mass-assigned

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
