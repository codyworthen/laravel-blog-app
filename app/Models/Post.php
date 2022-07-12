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
	
	public function author() {
		return $this->belongsTo(User::class, 'user_id');
		
	}
	
	public function scopeFilter($query, array $filters) {
		// $query is passed by laravel automatically (the querybuilder)
		
		if (isset($filters['search'])) {
			$query
				->where('title', 'like', '%' . request('search') . '%')
				->orWhere('excerpt', 'like', '%' . request('search') . '%')
				->orWhere('body', 'like', '%' . request('search') . '%');
		}
	}
}
 