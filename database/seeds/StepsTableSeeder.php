<?php

use Illuminate\Database\Seeder;
use App\Step;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Step::create([
            'name'       => 'DEMANDA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'INGRES DE DEMANDA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'MEDIDAS CAUTALARES',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'SENTENCIA INICIAL',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'DEMANDA DEFECTUOSA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'DEMANDA SUBSANDA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'DEMANDA INTIMACION PREVIA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'RECURSOS',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'DEMANDA RECHAZADA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'CITACION CON LA DEMANDA Y SENTENCIA INCIAL',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'NOTIFICACIONES',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'PRESENTACION DE EXCEPCIONES',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'TRASLADO',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'FIJA AUDIENCIA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'SENTENCIA DEFINITIVA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'APELACION EN EFECTO DEVOLUTIVO',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'NO APELACION',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'PROCESO ORDINARIO POSTERIOR',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'EJECUTORIA DE SENTENCIA',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'MEDIDAS PREVIAS AL REMATE',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'PRIMERA AUDENCIA DE REMATE',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'ADJUDICACION',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'LEVANTAMIENTO DE MEDIDAS PRECAUTORIAS Y ENTREGA DEL BIEN',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'AUSENCIA DE POSTORES',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'INFORME DEL MARTILLERO',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'SEGUNDA AUDIENCIA DE REMATE',
            'subject_id'       => '1',
        ]);
        Step::create([
            'name'       => 'POSIBILIDAD INDEFINIDA',
            'subject_id'       => '1',
        ]);



        Step::create([
            'name'       => 'DILIGENCIA PREPARATORIAS',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'DETERMINAR Y COMPLETA LA LEGITIMACION ACTIVA',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'ANTICIPAR LAS DILIGENCIAS',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'PRACTICAR DILIGENCIAS PARA VERIFICAR LA MORA DEL DEUDOR',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'EJERCITAR CUALQUIER OTRA MEDIDA CAUTELAR',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'RECONOCIMIENTO DE FIRMAS Y RUBRICAS',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'PRESENTACION DE MEMORIAL',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'ADMISION',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'CITACION',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'CONOCIMENTO DE LA CONTRAPARTE',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'AUDIENCIA',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'OPOSICION',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'CONTINUACION DEL PROCESO',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'RECHAZO',
            'subject_id'       => '2',
        ]);
        Step::create([
            'name'       => 'RECURSO DE APELACION EN EFECTO DEVOLUTIVO',
            'subject_id'       => '2',
        ]);






        Step::create([
            'name'       => 'CITACION CON LA DEMANDA',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'CONTESTACION CON LA DEMANDA',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'DECLARATORIA DE REBELDIA',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'PRESENTACION DE EXCEPCIONES',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'PREVIAS',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'PERENTORIAS',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'TRASLADO CON LAS EXCEPCIONES',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'AUTO',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'APELACION EN EFECTO DEVOLUTIVO',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'EJECUTORIA DEL AUTO',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'INCIDENTES',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'PERIODO DE PRUEBA',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'SENTENCIA',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'APELACION',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'RECURSO DE NULIDAD',
            'subject_id'       => '3',
        ]);
        Step::create([
            'name'       => 'EJECUCIION DE SENTENCIA',
            'subject_id'       => '3',
        ]);
    }
}
