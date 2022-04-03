<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'ADMINISTRADOR']);
        $admin->givePermissionTo([
        	'permissions.index',
        	'permissions.store',
        	'permissions.update',
            'permissions.destroy',

        	'roles.index',
        	'roles.store',
        	'roles.update',
            'roles.destroy',

        	'cities.index',
        	'cities.store',
        	'cities.update',
        	'cities.destroy',

        	'agencies.index',
        	'agencies.store',
        	'agencies.update',
        	'agencies.destroy',

        	'users.index',
        	'users.store',
        	'users.update',
        	'users.destroy',

        	'warranties.index',
        	'warranties.store',
        	'warranties.update',
        	'warranties.destroy',

        	'subjects.index',
        	'subjects.store',
        	'subjects.update',
        	'subjects.destroy',

        	'transfers.index',
        	'transfers.show',
        	'transfers.store',
        	'transfers.update',
        	'transfers.destroy',

        	'accepteds.index',
        	'accepteds.store',
        	'accepteds.update',
            'accepteds.destroy',

        	'returneds.index',
        	'returneds.show',
        	'returneds.store',
        	'returneds.update',
        	'returneds.destroy',

        	'folders.index',
        	'folders.show',
        	'folders.store',
        	'folders.update',
        	'folders.destroy',

        	'approveds.index',
        	'approveds.store',
        	'approveds.update',
            'approveds.destroy',

        	'motions.index',
        	'motions.store',
        	'motions.update',
            'motions.destroy',

        	'starts.index',
        	'starts.show',
        	'starts.store',
        	'starts.update',
        	'starts.destroy',

        	'admitteds.index',
        	'admitteds.store',
        	'admitteds.update',
            'admitteds.destroy',

        	'observeds.index',
        	'observeds.store',
        	'observeds.update',
            'observeds.destroy',

        	'rejecteds.index',
        	'rejecteds.store',
        	'rejecteds.update',
            'rejecteds.destroy',

        	'expenses.index',
        	'expenses.store',
        	'expenses.show',
        	'expenses.update',
            'expenses.destroy',

        	'incomes.index',
        	'incomes.store',
        	'incomes.update',
        	'incomes.update',
            'incomes.destroy',

        	'steps.index',
        	'steps.store',
        	'steps.update',
        	'steps.destroy',

        	'movements.index',
        	'movements.store',
        	'movements.update',
        	'movements.destroy',

        	'fulls.index',
        	'fulls.store',
        	'fulls.update',
        	'fulls.destroy',

        	'acontracts.index',

        	'file.export',
		]);
		$GG = Role::create(['name' => 'GERENCIA GENERAL']);
		$GG->givePermissionTo([

        	'folders.index',
        	'folders.show',

        	'starts.index',
        	'starts.show',

        	'movements.index',
		]);

		$RRHH = Role::create(['name' => 'SUB GERENCIA NACIONAL DE RECURSOS HUMANOS']);

		$AL = Role::create(['name' => 'SUB GERENCIA NACIONAL DE ASESORIA LEGAL']);
		$AL->givePermissionTo([


        	'warranties.index',
        	'warranties.store',
        	'warranties.update',
        	'warranties.destroy',

        	'subjects.index',
        	'subjects.store',
        	'subjects.update',
        	'subjects.destroy',

        	'transfers.index',
        	'transfers.show',
        	'transfers.store',
        	'transfers.update',
        	'transfers.destroy',

        	'accepteds.index',
        	'accepteds.store',
        	'accepteds.update',
            'accepteds.destroy',

        	'returneds.index',
        	'returneds.show',
        	'returneds.store',
        	'returneds.update',
        	'returneds.destroy',

        	'folders.index',
        	'folders.show',
        	'folders.store',
        	'folders.update',
        	'folders.destroy',

        	'approveds.index',
        	'approveds.store',
        	'approveds.update',
            'approveds.destroy',

        	'motions.index',
        	'motions.store',
        	'motions.update',
            'motions.destroy',

        	'starts.index',
        	'starts.show',
        	'starts.store',
        	'starts.update',
        	'starts.destroy',

        	'admitteds.index',
        	'admitteds.store',
        	'admitteds.update',
            'admitteds.destroy',

        	'observeds.index',
        	'observeds.store',
        	'observeds.update',
            'observeds.destroy',

        	'rejecteds.index',
        	'rejecteds.store',
        	'rejecteds.update',
            'rejecteds.destroy',

        	'expenses.index',
        	'expenses.store',
        	'expenses.show',
        	'expenses.update',
            'expenses.destroy',

        	'incomes.index',
        	'incomes.store',
        	'incomes.update',
        	'incomes.update',
            'incomes.destroy',

        	'steps.index',
        	'steps.store',
        	'steps.update',
        	'steps.destroy',

        	'movements.index',
        	'movements.store',
        	'movements.update',
        	'movements.destroy',

        	'fulls.index',
        	'fulls.store',
        	'fulls.update',
        	'fulls.destroy',

        	'acontracts.index',
		]);

		$GNC = Role::create(['name' => 'SUB GERENCIA NACIONAL COMERCIAL']);
		$GNC->givePermissionTo([

        	'folders.index',
        	'folders.show',

        	'starts.index',
        	'starts.show',

        	'admitteds.index',
        	'admitteds.store',


        	'observeds.index',
        	'observeds.store',


        	'rejecteds.index',
        	'rejecteds.store',

        	'movements.index',
		]);

		$GNO = Role::create(['name' => 'SUB GERENCIA NACIONAL DE OPERACIONES']);

		$JTIC = Role::create(['name' => 'JEFATURA NACIONAL DE TIC']);

		$JA = Role::create(['name' => 'JEFE DE AGENCIA']);
		$JA->givePermissionTo([

        	'transfers.index',
        	'transfers.show',
        	'transfers.store',

        	'returneds.index',
        	'returneds.show',

        	'folders.index',
        	'folders.show',
        	'folders.store',

        	'starts.index',
        	'starts.show',
        	'starts.store',
		]);

		$ASESOR = Role::create(['name' => 'ASESOR']);
		$ASESOR->givePermissionTo([

        	'transfers.index',
        	'transfers.show',
        	'transfers.store',

        	'returneds.index',
        	'returneds.show',

        	'folders.index',
        	'folders.show',
        	'folders.store',

        	'starts.index',
        	'starts.show',
        	'starts.store',
		]);
	}
}
