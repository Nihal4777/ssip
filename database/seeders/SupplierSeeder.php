<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\Models\User::create([
            'name' => 'Supplier',
            'email' => env('SUPP_USERNAME'),
            'password' => Hash::make(env('SUPP_PASSWORD')),
        ]);
        $user->assignRole('supplier');
    }
}
