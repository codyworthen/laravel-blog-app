<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
	use HasApiTokens, HasFactory, Notifiable;

//	/**
//	 * The attributes that are mass assignable.
//	 *
//	 * @var array<int, string>
//	 */
//	protected $fillable = [
//		'name',
//		'username',
//		'email',
//		'password',
//	];
	
	/**
	 * The attributes that are NOT mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];
	
	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];
	
	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
	
	/**
	 * An example of a mutator...
	 *
	 * A mutator transforms an Eloquent attribute value when it is set.
	 *
	 * Whenever a User has its password attribute set, laravel will automatically pipe it through this function.
	 *
	 * @return void
	 */
	public function setPasswordAttribute($password) {
		$this->attributes['password'] = bcrypt($password);
	}
	
	public function posts() {
		return $this->hasMany(Post::class);
	}
}
