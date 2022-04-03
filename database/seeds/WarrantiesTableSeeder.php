<?php

use Illuminate\Database\Seeder;
use App\Warranty;

class WarrantiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warranty::create([
            'name'       => 'CONTRATO CON PRENDA DOCUMENTAL'
        ]);
        Warranty::create([
            'name'       => 'CON PRENDA DE MERCADERIA'
        ]);
        Warranty::create([
            'name'       => 'QUIROGRAFARIO'
        ]);
        Warranty::create([
            'name'       => 'GARANTE PERSONAL Y PRENDA DE BIENES'
        ]);
        Warranty::create([
            'name'       => 'CON PRENDA EN CUSTODIA'
        ]);
        Warranty::create([
            'name'       => 'GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION'
        ]);
        Warranty::create([
            'name'       => 'GARANTE PERSONAL'
        ]);
    }
}
