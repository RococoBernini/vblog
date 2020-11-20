<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
		return [

			'user_id' => User::factory(),
			'title' => $this->faker->title,
			'body' => $this->faker->paragraph,
			'post_image' => $this->faker->imageURL('900', '300')

            //
        ];
    }
}
