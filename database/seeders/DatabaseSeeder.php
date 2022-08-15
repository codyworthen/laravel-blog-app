<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::factory()->create([
            'name' => 'Bella Favela', // manually override this property
            'username' => 'tinybells' // manually override this property
        ]);
        
        Post::factory(15)->create([
            'user_id' => $user1 // manually override this property
        ]);
        
        $user2 = User::factory()->create([
            'name' => 'Chloe Jane', // manually override this property
            'username' => 'tato' // manually override this property
        ]);
        
        Post::factory(15)->create([
            'user_id' => $user2 // manually override this property
        ]);
    }
}
