<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$user = User::factory()->has(Post::factory()->count(3))->create();
		// $user = User::factory()->has(Post::factory()->count(3))->create(
		// 	['name' => 'vic chang',
		// 	'email' => 'lakingray@gamil.com',
		// 	'password' => '12345678'	
		// ]);
    }
}
