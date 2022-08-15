<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    public function post() // post() matches Post::class
    {
        return $this->belongsTo(Post::class);
    }
    
    public function author() // author() doesn't match User::class so we have to override it with a foreignKey
    {
        return $this->belongsTo(User::class, 'user_id'); // because author() doesn't match User::class
    }
}
