<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller {
	public function category(Category $category) {
		return view('posts', [
			'posts' => $category->posts,
			'currentCategory' => $category,
			'categories' => Category::all()
		]);
	}
}