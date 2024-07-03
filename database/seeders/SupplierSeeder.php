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
            'email' => 'supplier@ssip.com',
            'password' => Hash::make('1234'),
        ]);
        $user->assignRole('supplier');
    }
}
