<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clasificacion;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $clasificacion = array(
        array('Id' => '1', 'nombre' => 'Los titís y tamarinos', 'descripcion' => 'Los titís o Callitrichidae por su nombre científico son
        primates que viven en América del Sur y América Central, en esta familia hay un total de 7 géneros distintos', 'imagen' => 'https://t1.ea.ltmcdn.com/es/posts/5/7/8/los_titis_y_tamarinos_20875_1_600.webp'),
        array('Id' => '2', 'nombre' => 'El mono capuchino', 'descripcion' => 'En la familia de los Cébidos, por su nombre científico,
        encontramos un total de 17 especies distribuidas en 3 géneros distintos', 'imagen' => 'https://t1.ea.ltmcdn.com/es/posts/5/7/8/el_mono_capuchino_20875_2_600.webp'),
        array('Id' => '3', 'nombre' => 'Los monos uakarís', 'descripcion' => 'Pitécidos por su nombre científico, son una familia de primates
         que viven en las selvas tropicales de Sudamérica, en la mayoría de los casos árboreros. En esta familia existen 4 géneros y un total de 54 especies', 'imagen' => 'https://t1.ea.ltmcdn.com/es/posts/5/7/8/los_monos_uakaris_20875_4_600.webp'),
         array('Id' => '4', 'nombre' => 'Los monos aulladores', 'descripcion' => 'Los monos Atélidos son una familia de primates que se pueden
         encontrar a lo largo de América Central y América del Sur, incluso desde la parte Sur mexicana. En esta familia se incluyen 5 géneros y un total de 27 especies', 'imagen' => 'https://t1.ea.ltmcdn.com/es/posts/5/7/8/los_monos_aulladores_20875_5_600.webp'),
         array('Id' => '5', 'nombre' => 'Los monos del viejo mundo', 'descripcion' => 'Los Cercopitécidos por su nombre científico, conocidos también como los monos del viejo
         mundo, pertenecen a la parvórden Catarrhini y a la superfamilia Cercopithecoidea. Es una familia donde hay un total de 21 géneros y 139 especies de monos. Estos animales
         viven en África y Asia, en climas variados y hábitats igual de cambiantes.', 'imagen' => 'https://t2.ea.ltmcdn.com/es/posts/5/7/8/los_monos_del_viejo_mundo_20875_6_600.webp'),
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->clasificacion as $registro) {
            Clasificacion::create($registro);
        }
    }
}
