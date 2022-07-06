<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Kaz Burrel',
            'email' => 'kazb@gmail.com'
        ]);
        
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Test User',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Kaz Tech',
        //     'location' => 'Enugu',
        //     'email' => 'test@example.com',
        //     'website' => 'https//:www.kaztech.dev',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur 
        //     adipiscing elit, sed do eiusmod tempor incididunt ut labore
        //      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        //      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        //      Duis aute irure dolor in'
        //  ]);

        // Listing::create([
        //     'title' => 'Test User2',
        //     'tags' => 'laravel, php',
        //     'company' => 'gidi codez',
        //     'location' => 'abuja',
        //     'email' => 'test2@example.com',
        //     'website' => 'https//:www.gidicodez.dev',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur 
        //     adipiscing elit, sed do eiusmod tempor incididunt ut labore
        //      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        //      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        //      Duis aute irure dolor in'
        //  ]);
    }
}
