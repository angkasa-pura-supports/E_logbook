<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create(['name'=>'SuperAdmin']);
      Role::create(['name'=>'Pimpinan']);
      Role::create(['name'=>'SPV']);
      Role::create(['name'=>'Leader']);
      Role::create(['name'=>'Teknisi']);
      Role::create(['name'=>'Admin']);
      Role::create(['name'=>'User']);

      Permission::create(['name'=>'Link Pots']);
      Permission::create(['name'=>'Create Pots']);
      Permission::create(['name'=>'Read Pots']);
      Permission::create(['name'=>'Update Pots']);
      Permission::create(['name'=>'Delete Pots']);









    }
}
