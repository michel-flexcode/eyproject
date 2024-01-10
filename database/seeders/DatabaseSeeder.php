<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users
        \App\Models\User::factory(10)->create();

        // Seed a specific user
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed Companies
        Company::factory(10)->create();

        $this->call(Company::class);
        // Uncomment the following lines if you want to seed additional data from other seeders
        // $this->call([
        //     PostSeeder::class,
        //     CommentSeeder::class,
        //     LikeSeeder::class,
        //     FollowerSeeder::class,
        // ]);

        // Uncomment the following lines if you want to seed additional data from other seeders
        // $this->call([
        //     RoleSeeder::class,
        //     UserSeeder::class,
        //     ArticleSeeder::class,
        //     CommentSeeder::class,
        // ]);
    }
}
