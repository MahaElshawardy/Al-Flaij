<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->delete();
        Employee::create([
            'name' => 'webstdy',
            'email' => 'support@webstdy.com',
            'password' => 'webstdy12345678',
            'phone' => '966522334455',
        ]);
        Employee::create([
            'name' => 'elfulaij',
            'email' => 'elfulaij@gmail.com',
            'password' => 'elfulaij12345678',
            'phone' => '966511223344',
        ]);
        Employee::create([
            'name' => 'Basem',
            'email' => 'Basem@gmail.com',
            'password' => 'Basem12345678',
            'phone' => '966511223345',
        ]);
        Employee::create([
            'name' => 'swadaa',
            'email' => 'swadaa@gmail.com',
            'password' => 'swadaa12345678',
            'phone' => '966511223346',
        ]);

        
    }
}
