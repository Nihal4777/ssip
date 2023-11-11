<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'supplier']);
        Category::create(['name' => 'Food and Nutritional Products']);
        Category::create(['name' => 'Hygiene and Healthcare']);
        Category::create(['name' => 'Clothing and Apparel']);
        Category::create(['name' => 'Furniture and Equipment']);
        Category::create(['name' => 'Educational and Training Materials']);
        Category::create(['name' => 'Transportation and Vehicles']);
        

        $user=\App\Models\User::create([
            'name' => 'Admin',
            'email' => env('ADMIN_USERNAME'),
            'password' => Hash::make(env('ADMIN_PASSWORD')),
        ]);
        $user->assignRole('admin');
    }
}
