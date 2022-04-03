<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'permissions.index']);
        Permission::create(['name' => 'permissions.store']);
        Permission::create(['name' => 'permissions.update']);
        Permission::create(['name' => 'permissions.destroy']);
        //Role list
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.store']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.destroy']);
        //City list
        Permission::create(['name' => 'cities.index']);
        Permission::create(['name' => 'cities.store']);
        Permission::create(['name' => 'cities.update']);
        Permission::create(['name' => 'cities.destroy']);
        //Warranty list
        Permission::create(['name' => 'warranties.index']);
        Permission::create(['name' => 'warranties.store']);
        Permission::create(['name' => 'warranties.update']);
        Permission::create(['name' => 'warranties.destroy']);
        //Agency list
        Permission::create(['name' => 'agencies.index']);
        Permission::create(['name' => 'agencies.store']);
        Permission::create(['name' => 'agencies.update']);
        Permission::create(['name' => 'agencies.destroy']);
        //User list
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.destroy']);
        //Subject
        Permission::create(['name' => 'subjects.index']);
        Permission::create(['name' => 'subjects.store']);
        Permission::create(['name' => 'subjects.update']);
        Permission::create(['name' => 'subjects.destroy']);

        //Transfer
        Permission::create(['name' => 'transfers.index']);
        Permission::create(['name' => 'transfers.show']);
        Permission::create(['name' => 'transfers.store']);
        Permission::create(['name' => 'transfers.update']);
        Permission::create(['name' => 'transfers.destroy']);
        //Accepted
        Permission::create(['name' => 'accepteds.index']);
        Permission::create(['name' => 'accepteds.store']);
        Permission::create(['name' => 'accepteds.update']);
        Permission::create(['name' => 'accepteds.destroy']);

        //Returned
        Permission::create(['name' => 'returneds.index']);
        Permission::create(['name' => 'returneds.show']);
        Permission::create(['name' => 'returneds.store']);
        Permission::create(['name' => 'returneds.update']);
        Permission::create(['name' => 'returneds.destroy']);

        //Folder
        Permission::create(['name' => 'folders.index']);
        Permission::create(['name' => 'folders.show']);
        Permission::create(['name' => 'folders.store']);
        Permission::create(['name' => 'folders.update']);
        Permission::create(['name' => 'folders.destroy']);

        //Approved
        Permission::create(['name' => 'approveds.index']);
        Permission::create(['name' => 'approveds.store']);
        Permission::create(['name' => 'approveds.update']);
        Permission::create(['name' => 'approveds.destroy']);
        //Motion
        Permission::create(['name' => 'motions.index']);
        Permission::create(['name' => 'motions.store']);
        Permission::create(['name' => 'motions.update']);
        Permission::create(['name' => 'motions.destroy']);

        //Start
        Permission::create(['name' => 'starts.index']);
        Permission::create(['name' => 'starts.show']);
        Permission::create(['name' => 'starts.store']);
        Permission::create(['name' => 'starts.update']);
        Permission::create(['name' => 'starts.destroy']);

        // admitted
        Permission::create(['name' => 'admitteds.index']);
        Permission::create(['name' => 'admitteds.store']);
        Permission::create(['name' => 'admitteds.update']);
        Permission::create(['name' => 'admitteds.destroy']);
        // observed
        Permission::create(['name' => 'observeds.index']);
        Permission::create(['name' => 'observeds.store']);
        Permission::create(['name' => 'observeds.update']);
        Permission::create(['name' => 'observeds.destroy']);
        // rejected
        Permission::create(['name' => 'rejecteds.index']);
        Permission::create(['name' => 'rejecteds.store']);
        Permission::create(['name' => 'rejecteds.update']);
        Permission::create(['name' => 'rejecteds.destroy']);


        // expenses
        Permission::create(['name' => 'expenses.index']);
        Permission::create(['name' => 'expenses.store']);
        Permission::create(['name' => 'expenses.show']);
        Permission::create(['name' => 'expenses.update']);
        Permission::create(['name' => 'expenses.destroy']);
        // income
        Permission::create(['name' => 'incomes.index']);
        Permission::create(['name' => 'incomes.store']);
        Permission::create(['name' => 'incomes.update']);
        Permission::create(['name' => 'incomes.destroy']);
        //Start
        Permission::create(['name' => 'steps.index']);
        Permission::create(['name' => 'steps.store']);
        Permission::create(['name' => 'steps.update']);
        Permission::create(['name' => 'steps.destroy']);
        // movement
        Permission::create(['name' => 'movements.index']);
        Permission::create(['name' => 'movements.store']);
        Permission::create(['name' => 'movements.update']);
        Permission::create(['name' => 'movements.destroy']);
        // full
        Permission::create(['name' => 'fulls.index']);
        Permission::create(['name' => 'fulls.store']);
        Permission::create(['name' => 'fulls.update']);
        Permission::create(['name' => 'fulls.destroy']);
        // contracts
        Permission::create(['name' => 'acontracts.index']);
        // export
        Permission::create(['name' => 'file.export']);
    }
}
