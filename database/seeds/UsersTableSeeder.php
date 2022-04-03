<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'       => 'ADMINISTRADOR',
            'email'      => 'adm@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'agency_id'      => 1,
        ]);
        $admin->assignRole('ADMINISTRADOR');

        $gno = User::create([
            'name'       => 'LUIS ALEJANDRO ARZE RICO',
            'email'      => 'proeza.ale@gmail.com',
            'password'      => bcrypt('proezaalejandro2021'),
            'agency_id'      => 1,
        ]);
        $gno->assignRole('GERENCIA GENERAL');

        $rrhh = User::create([
            'name'       => 'MARTHA PAOLA AMADOR',
            'email'      => 'proeza.marthapaola@gmail.com',
            'password'      => bcrypt('proezamarthapaola2021'),
            'agency_id'      => 1,
        ]);
        $rrhh->assignRole('SUB GERENCIA NACIONAL DE RECURSOS HUMANOS');

        $al = User::create([
            'name'       => 'TERESA ALBA MIRANDA',
            'email'      => 'proeza.teresa@gmail.com',
            'password'      => bcrypt('proezateresa2021'),
            'agency_id'      => 1,
        ]);
        $al->assignRole('SUB GERENCIA NACIONAL DE ASESORIA LEGAL');

        $gnc = User::create([
            'name'       => 'GUALBERTO EDSSON COCA VARGAS',
            'email'      => 'proeza.edsson@gmail.com',
            'password'      => bcrypt('proezaedsson2021'),
            'agency_id'      => 1,
        ]);
        $gnc->assignRole('SUB GERENCIA NACIONAL COMERCIAL');

        $gno = User::create([
            'name'       => 'JHOANA BRENDA JIMENEZ FLORES',
            'email'      => 'proeza.brenda@gmail.com',
            'password'      => bcrypt('proezabrenda2021'),
            'agency_id'      => 1,
        ]);
        $gno->assignRole('SUB GERENCIA NACIONAL DE OPERACIONES');

        $jas = [
            [
                'name'       => 'ELIZABETH CALLE COAQUIRA',
                'email'      => 'proeza.elycalle@gmail.com',
                'password'      => bcrypt('proezaelycalle2021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'PABLO CHOQUE CAYO',
                'email'      => 'proeza.pablochoque@gmail.com',
                'password'      => bcrypt('proezapablochoque2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROXANA LLANOS MAMANI',
                'email'      => 'proeza.roxana@gmail.com',
                'password'      => bcrypt('proezaroxana2021'),
                'agency_id'      => 4,
            ],
            // [
            //     'name'       => 'RICHARD CALLE BALDERRAMA',
            //     'email'      => 'proeza.richard@gmail.com',
            //     'password'      => bcrypt('proezarichard2021'),
            //     'agency_id'      => 5,
            // ],
            [
                'name'       => 'VERONICA ANEIVA SALAZAR',
                'email'      => 'proeza.veronica@gmail.com',
                'password'      => bcrypt('proezaveronica2021'),
                'agency_id'      => 6,
            ]
        ];
        foreach ($jas as $ja) {
            $userG = User::create([
                'name'       => $ja['name'],
                'email'       => $ja['email'],
                'password'       => $ja['password'],
                'agency_id'       => $ja['agency_id'],
            ]);
            $userG->assignRole('JEFE DE AGENCIA');
        }


        $asesors = [
            [
                'name'       => 'ALEX GUERRA GUZMAN',
                'email'      => 'proeza.alex@gmail.com',
                'password'      => bcrypt('proezaalex2021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'CARLA ANDREA CLAROS PEREDO',
                'email'      => 'proeza.carla22@gmail.com',
                'password'      => bcrypt('proezacarla222021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'JHONNY PEDRO HUAYHUASI SOLIS',
                'email'      => 'proeza.jhonny9@gmail.com',
                'password'      => bcrypt('proezajhonny92021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'ARACELY MONTOYA ANDIA',
                'email'      => 'proeza.aracely@gmail.com',
                'password'      => bcrypt('proezaaracely2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'MERY GARCIA AÑAMOR',
                'email'      => 'proeza.merygarcia@gmail.com',
                'password'      => bcrypt('proezamerygarcia2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROCIO CLAROS ROJAS',
                'email'      => 'proeza.rocio@gmail.com',
                'password'      => bcrypt('proezarocio2021'),
                'agency_id'      => 4,
            ],
            [
                'name'       => 'JOSE RAMOS YUJRA',
                'email'      => 'proeza.ramos@gmail.com',
                'password'      => bcrypt('proezaramos2021'),
                'agency_id'      => 5,
            ],
            [
                'name'       => 'DOUGLAS COPA RODRIGUEZ',
                'email'      => 'proeza.douglas@gmail.com',
                'password'      => bcrypt('proezadouglas2021'),
                'agency_id'      => 5,
            ]
        ];
        foreach ($asesors as $asesor) {
            $userG = User::create([
                'name'       => $asesor['name'],
                'email'       => $asesor['email'],
                'password'       => $asesor['password'],
                'agency_id'       => $asesor['agency_id'],
            ]);
            $userG->assignRole('ASESOR');
        }

        $tic = User::create([
            'name'       => 'ROGER ALDAIR HUARACHI TAPIA',
            'email'      => 'proeza.roger@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'agency_id'      => 1,
        ]);
        $tic->assignRole('JEFATURA NACIONAL DE TIC');
    }
}
