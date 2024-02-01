<?php

namespace Database\Seeders;

use App\Models\Role;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['nom'=>'admin']);
        Role::Create(['nom'=>'user']);
    }
}
