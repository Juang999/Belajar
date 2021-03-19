<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
            'name' => 'admin',
            'guard_name' => 'web'
            ],[
            'name' => 'user',
            'guard_name' => 'web'
            ]
        ]);
    }
}
