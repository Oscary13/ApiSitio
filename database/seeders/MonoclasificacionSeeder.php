<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MonoClasificacion;

class MonoclasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $clasificacion = array(
        array('Id' => '1', 'mono_id' => '1', 'clasificacion_id' => '1'),
        array('Id' => '2', 'mono_id' => '2', 'clasificacion_id' => '1'),
        array('Id' => '3', 'mono_id' => '3', 'clasificacion_id' => '1'),
        array('Id' => '4', 'mono_id' => '4', 'clasificacion_id' => '1'),
        array('Id' => '5', 'mono_id' => '5', 'clasificacion_id' => '1'),
        array('Id' => '6', 'mono_id' => '6', 'clasificacion_id' => '1'),
        array('Id' => '7', 'mono_id' => '7', 'clasificacion_id' => '1'),

        array('Id' => '8', 'mono_id' => '8', 'clasificacion_id' => '2'),
        array('Id' => '9', 'mono_id' => '9', 'clasificacion_id' => '2'),
        array('Id' => '10', 'mono_id' => '10', 'clasificacion_id' => '2'),


        array('Id' => '11', 'mono_id' => '11', 'clasificacion_id' => '3'),
        array('Id' => '12', 'mono_id' => '12', 'clasificacion_id' => '3'),
        array('Id' => '13', 'mono_id' => '13', 'clasificacion_id' => '3'),
        array('Id' => '14', 'mono_id' => '14', 'clasificacion_id' => '3'),

        array('Id' => '15', 'mono_id' => '15', 'clasificacion_id' => '4'),
        array('Id' => '16', 'mono_id' => '16', 'clasificacion_id' => '4'),
        array('Id' => '17', 'mono_id' => '17', 'clasificacion_id' => '4'),
        array('Id' => '18', 'mono_id' => '18', 'clasificacion_id' => '4'),
        array('Id' => '19', 'mono_id' => '19', 'clasificacion_id' => '4'),

        array('Id' => '20', 'mono_id' => '20', 'clasificacion_id' => '5'),
        array('Id' => '21', 'mono_id' => '21', 'clasificacion_id' => '5'),
        array('Id' => '22', 'mono_id' => '22', 'clasificacion_id' => '5'),
        array('Id' => '23', 'mono_id' => '23', 'clasificacion_id' => '5'),
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->clasificacion as $registro) {
            MonoClasificacion::create($registro);
        }
    }
}
