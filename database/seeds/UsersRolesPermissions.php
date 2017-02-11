<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create([  'f_name' => 'Chethan', 'l_name' => 'Devarahalli Balakrishna', 'password' => bcrypt('secret'), 'email' => 'cdevarahallibalakr@unomaha.edu',
            'active' => true, 'comment' => 'super admin', 'cell' => '4025551111', 'rec_email' => true, 'created_by' => 'System', 'updated_by' => 'System',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'f_name' => 'Gopinath', 'l_name' => 'Vijayarangan', 'password' => bcrypt('secret'), 'email' => 'gvijayarangan@unomaha.edu',
            'active' => true, 'comment' => 'secondary admin', 'cell' => '4025552222', 'rec_email' => true,'created_by' => 'System', 'updated_by' => 'System',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'f_name' => 'Korvah', 'l_name' => 'Tarnue', 'password' => bcrypt('secret'), 'email' => 'anjani@unomaha.edu',
            'active' => true, 'comment' => 'secondary admin', 'cell' => '4025553333', 'rec_email' => true,'created_by' => 'System', 'updated_by' => 'System',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'f_name' => 'Anjani', 'l_name' => 'Danthuluri', 'password' => bcrypt('secret'), 'email' => 'tkorvah@unomaha.edu',
            'active' => true, 'comment' => 'secondary admin', 'cell' => '4025554444', 'rec_email' => true,'created_by' => 'System', 'updated_by' => 'System',
            'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();
        Role::create([ 'name' => 'admin', 'display_name' => 'Administrator', 'description' => 'User is allowed to manage and edit other users or work order',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'engineer', 'display_name' => 'Engineer', 'description' => 'Engineer is allowed to read a work order and update it',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'employee', 'display_name' => 'Employee', 'description' => 'Employee is allowed to raise a work order for a user and see all tasks',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'contact', 'display_name' => 'Contact', 'description' => 'Contact is allowed to raise a work order',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();
        Permission::create([ 'name' => 'manage-users', 'display_name' => 'Manage Users', 'description' => 'User is allowed to add, edit and delete other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'manage-roles', 'display_name' => 'Manage Roles', 'description' => 'User is allowed to add, edit and delete roles',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'manage-work-order', 'display_name' => 'Manage Work Order', 'description' => 'User is allowed to add, edit and delete work order',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'edit-work-order', 'display_name' => 'Edit Work Order', 'description' => 'User is allowed to add and edit work order',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'readonly-all', 'display_name' => 'Readonly', 'description' => 'User is allowed to create a work order and check the status',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RoleUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role_user')->delete();

        $user = User::where('f_name', '=', 'Chethan')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('f_name', '=', 'Gopinath')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('f_name', '=', 'Korvah')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('f_name', '=', 'Anjani')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);
    }
}

class UsersRolesPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUsers = Permission::where('name', '=', 'manage-users')->first();
        $manageRoles = Permission::where('name', '=', 'manage-roles')->first();
        $manageWorkOrder = Permission::where('name', '=', 'manage-work-order')->first();
        $editWorkOrder = Permission::where('name', '=', 'edit-work-order')->first();
        $readonlyAll = Permission::where('name', '=', 'readonly-all')->first();

        $adminRole = Role::where('name', '=', 'admin')->first();
        $adminRole->attachPermissions(array($manageUsers, $manageRoles));

        $engineerRole = Role::where('name', '=', 'admin')->first();
        $engineerRole->attachPermissions(array($manageWorkOrder));

        $basicEmpRole = Role::where('name', '=', 'admin')->first();
        $basicEmpRole->attachPermissions(array($editWorkOrder));

        $contactRole = Role::where('name', '=', 'contact')->first();
        $contactRole->attachPermissions(array($readonlyAll));
    }
}
