<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->save();

        $user = new User();
        $user->name = 'Profesor';
        $user->email = 'profe@gmail.com';
        $user->password = bcrypt('Profe123.');
        $user->save();
        
        $user = new User();
        $user->name = 'Aprendiz';
        $user->email = 'aprendiz@gmail.com';
        $user->password = bcrypt('Aprendiz123.');
        $user->save();
    }
}
