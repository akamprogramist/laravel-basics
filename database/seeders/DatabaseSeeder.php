<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'jhon doe',
            'email' => 'jhon@gmail.com',

        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        //  Listing::create([
        //     'title'=>'laravel',
        //     'tags' =>'laravel , javascript',
        //     'company' =>'acme Corp',
        //     'location' =>'boston,ma',
        //     'email' =>'email@gmail.com',
        //     'website' =>'https://www.acme.com',
        //     'description' =>'this is description',
        //  ]);
        // Listing::create([
        //     'title' => 'laravel',
        //     'tags' => 'laravel , javascript',
        //     'company' => 'acme Corp',
        //     'location' => 'boston,ma',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is description',
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
