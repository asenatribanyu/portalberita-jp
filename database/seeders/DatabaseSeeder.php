<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Category;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'poh',
            'username'=>'poh',
            'password'=>bcrypt('12345'),
        ]);

        Type::create([
            'type_name' => 'Photos',
        ]);

        Type::create([
            'type_name' => 'Videos',
        ]);
        Category::create([
            'category_name' =>'Tokyo',
        ]);
        Category::create([
            'category_name' =>'Kyoto',
        ]);
    }
}
