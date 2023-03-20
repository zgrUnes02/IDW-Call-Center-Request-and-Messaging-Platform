<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users') -> delete() ;

        $user = new User() ;
        $user -> name = 'idw admin' ;
        $user -> email = 'idw@gmail.com' ;
        $user -> password = Hash::make('123456789');
        $user -> save() ;
    }
}
