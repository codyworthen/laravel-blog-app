<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory {
	/**
	 * Define the model's def ault state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition() {
		return [
			'name' => $this->faker->unique()->word,
			'slug' => $this->faker->slug
		];
	}
}
