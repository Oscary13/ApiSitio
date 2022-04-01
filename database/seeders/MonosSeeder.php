<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monos;

class MonosSeeder extends Seeder
{
    private $monos = array(
        array('Id' => '1', 'nombre' => 'Tití de corona negra', 'descripcion' => 'Es un primate que habita en la Amazonia, pueden llegar a medir hasta 39 cm
         en la edad adulta, siendo uno de los más pequeños titís.', 'imagen' => 'https://www.animalesenlaweb.com/wp-content/uploads/2018/05/Informaci%C3%B3n-sobre-los-tit%C3%ADs-1.jpg'),
        array('Id' => '2', 'nombre' => 'Tití pigmeo o tití enano', 'descripcion' => 'Se caracteriza por su tamaño pequeño, siendo la especie de mono más pequeña
         de los designados al nuevo mundo. Habita en la Amazonia.', 'imagen' => 'https://www.monkeyworlds.com/wp-content/uploads/titi_pigmeo.jpg'),
        array('Id' => '3', 'nombre' => 'Tamarino de Goeldi', 'descripcion' => 'Es un habitante también de la Amazonia, caracterizados por su pelaje lustroso largo
         y negro, con excepción en el vientre donde no tienen pelo. Tienen una melena que puede llegar a los 3 cm de largo.',  'imagen' => 'https://www.zoobotanicojerez.com/fileadmin/imagenes/2013/Animales/Goeldi.JPG'),
        array('Id' => '4', 'nombre' => 'Tití neotropical', 'descripcion' => 'Los titís neotropicales son un total de 6 especies de primates en donde está el tití común,
        tití de pinceles negro, tití de orejas negras, tití de cabeza beige, tití de orejas blancas y el tití de Geoffroy.',  'imagen' => 'https://www.tekcrispy.com/wp-content/uploads/2019/08/mono-titi-2.jpg'),
        array('Id' => '5', 'nombre' => 'El género Mico', 'descripcion' => 'Comprende a un total de 14 especies de titís que viven en la selva amazónica y al norte del chaco
         paraguayo. Entre las especies destacadas está el tití plateado, tití cola negra, tití oreja de borla y el tití dorado.',  'imagen' => 'https://inaturalist-open-data.s3.amazonaws.com/photos/13213369/large.jpeg'),
        array('Id' => '6', 'nombre' => 'Tamarino león', 'descripcion' => 'Los tamarinos león son un género de monos pequeños que deben su nombre a la melena que poseen, son
        propios de la selva de Brasil. Las especies son fácilmente distinguibles por sus colores, en donde está el tamarino león dorado, tamarino león cabeza dorada, tamarino
        león negro y tamarino león cara negra.',  'imagen' => 'https://www.anipedia.net/imagenes/leontopithecus-rosalia.jpg'),
        array('Id' => '7', 'nombre' => 'Tamarino', 'descripcion' => 'Los tamarinos como tal, son un género de primates que habitan en Centro y Sudamérica. Característicos por
         tener caninos pequeños y largos incisivos, en donde hay un total de 15 especies.',  'imagen' => 'https://www.zoobarcelona.cat/sites/default/files/animal/2016-12/Leonthopithecus%20chrysomelas2.jpg'),

        array('Id' => '8', 'nombre' => 'Mono capuchino grácil', 'descripcion' => ' Los monos capuchinos gráciles deben su nombre a la capucha blanca de pelos que rodea su cara,
        pueden llegar a medir 45 cm y comprenden a 4 especies, el mono carablanca, el capuchino llorón, el capuchino de frente blanca y el cairara.',  'imagen' => 'https://www.anipedia.net/imagenes/monos-capuchinos.jpg'),

         array('Id' => '9', 'nombre' => 'Mono capuchino robusto', 'descripcion' => 'Los monos capuchinos robustos son endémicos de las regiones cálidas de América del Sur, como
         su nombre lo indica son más corpulentos que los capuchinos gráciles, caracterizados por presentar mechones en la cabeza. Cuentan con un total de 8 especies. Tanto capuchinos gráciles y robustos pertenecen a la
          familia Cebidae, pero a la subfamilia Cebinae.', 'imagen' => 'https://inaturalist-open-data.s3.amazonaws.com/photos/4968376/large.jpg'),
         array('Id' => '10', 'nombre' => 'Mono ardilla', 'descripcion' => 'Los monos ardilla viven en bosques de Sudamérica y Centroamérica, se pueden encontrar en la Amazonia o
         en Panamá y Costa Rica, dependiendo de la especie. Cuentan con un total de 5 especies, pertenecen a la familia Cebidae, pero a la subfamilia Saimiriinae.',  'imagen' => 'https://zooguadalajaramxa.imgix.net/animal/178/foto-four.jpeg'),


         array('Id' => '11', 'nombre' => 'Mono uakarí', 'descripcion' => 'Los monos uakarís o también llamados guakarís en donde se conocen un total de 4 especies. Caracterizados
         por tener una cola mucho más corta que el tamaño de su cuerpo, hablamos de la mitad o un poco menos en muchos de los casos.',  'imagen' => 'https://sooluciona.com/wp-content/uploads/2018/10/como-es-el-mono-uakari.jpg'),
         array('Id' => '12', 'nombre' => 'Sakí barbudo', 'descripcion' => 'los sakís barbudos son primates que viven en Suramérica, deben su nombre a una notoria barba que les cubre
         la quijada, cuello y pecho. Tienen una cola espesa que solo les sirve para balancearse. En este género se conocen 5 especies distintas.',  'imagen' => 'http://www.animalesextremos.com/Imagenes/saki-cariblanco-animales-mas-raros-del-mundo.jpg'),
         array('Id' => '13', 'nombre' => 'Sakí', 'descripcion' => 'Los sakís propiamente dicho son primates que viven en las selvas de Ecuador, en donde se distinguen un total de
         16 especies de monos,.Tanto sakís, sakís barbudos y monos uakarís pertenecen a la subfamilia Pitheciinae, siempre en la familia Pitheciidae.',  'imagen' => 'https://i1.wp.com/www.sopitas.com/wp-content/uploads/2019/03/saki-cara-blanca.jpg'),
         array('Id' => '14', 'nombre' => 'Mono huicoco', 'descripcion' => 'Los monos huicocos son un género de primates que viven en Perú, Brasil, Colombia, Paraguay y Bolivia.
         Pueden llegar a medir hasta 46 cm, con una cola igual o 10 cm más larga. El género incluye un total de 30 especies, pertenecen a la subfamilia Callicebinae y a la familia Pitheciidae.',
           'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/f/f6/Callicebus_ornatus_mg.jpg'),


         array('Id' => '15', 'nombre' => 'Mono aullador', 'descripcion' => 'los monos aulladores son animales que viven en zonas tropicales, se pueden encontrar desde Argentina, hasta el Sur de México.
         Deben su nombre al característico sonido que emiten para comunicarse, muy útil cuando están en peligro. Pueden llegar a medir hasta 92 cm de largo, con una cola de medidas similares. Poseen un
         rostro corto y nariz chata, pertenecen a la subfamilia Alouttinae, siempre dentro de la familia Atelidae. Se pueden distinguir un total de 13 especies.',  'imagen' => 'https://okdiario.com/img/2020/05/21/-como-son-los-monos-aulladores_-655x368.jpg'),
         array('Id' => '16', 'nombre' => 'Mono araña', 'descripcion' => 'Los monos araña deben su nombre a la ausencia de un pulgar oponible en sus miembros, se encuentran desde México hasta Sudamérica.
         Pueden llegar a medir hasta 90 cm, con una cola de tamaño similar. Es un género que cuenta con un total de 7 especies.',  'imagen' => 'https://t2.ev.ltmcdn.com/es/posts/0/2/2/el_mono_arana_esta_en_peligro_de_extincion_3220_600.jpg'),
         array('Id' => '17', 'nombre' => 'Mono araña lanudo', 'descripcion' => 'Los monos araña lanudos se pueden encontrar en Brasil, de color gris o marrón completamente contrastante al negro de un mono
         araña común. Se trata del género de platirrinos más grande, el cual cuenta con 2 especies.',  'imagen' => 'https://c8.alamy.com/zoomses/9/8c06a7efba7e4faaad6ddb35d2604488/axdte4.jpg'),
         array('Id' => '18', 'nombre' => 'Mono lanudo', 'descripcion' => 'Los monos lanudos son primates en selvas y bosques de Sudamérica. Pueden llegar a medir 49 cm y su rasgo distintivo es la presencia
         de pelaje lanoso de color marrón a castaño. Este género cuenta con 4 especies de monos.',  'imagen' => 'https://static.inaturalist.org/photos/44830870/large.jpeg'),
         array('Id' => '19', 'nombre' => 'Choro de cola amarilla', 'descripcion' => 'Es la única especie del género Oreonax, endémica de Perú. Su situación actual es poco prometedora, ya que está clasificada
         en peligro crítico, un paso antes de extinguirse la especie en estado salvaje y dos pasos antes de la extinción completa. Pueden llegar a medir hasta 54 cm, con una cola un poco más grande que su cuerpo. Tanto el choro de cola amarilla,
          el mono lanudo, el mono araña lanudo y el mono araña pertenecen a la subfamilia Atelinae y a la familia Atelidae.', 'imagen' => 'https://planetanimales.com/wp-content/uploads/2020/08/Mono-choro-de-cola-amarilla.jpg'),


         array('Id' => '20', 'nombre' => 'Mono rojo', 'descripcion' => 'Es una especie de primate de África oriental, viven en sabanas y zonas semidesérticas. Pueden llegar a medir 85 cm y tienen una cola 10
         cm más corta. Es uno de los primates más rápido, puede llegar a alcanzar los 55 km/h.',  'imagen' => 'https://www.milenio.com/uploads/media/2019/03/19/mono-aullador-rojo-especies-riesgo.jpg'),
         array('Id' => '21', 'nombre' => 'Macaco', 'descripcion' => 'Los macacos se encuentran en África, China, Gibraltar y Japón. Estos monos tienen una cola corta poco desarrollada o carecen de la misma.
         En este género aparecen un total de 22 especies.',  'imagen' => 'https://static.nationalgeographic.es/files/styles/image_3200/public/monkey-gbc6124207_1920.jpg?w=1600&h=1067'),
         array('Id' => '22', 'nombre' => 'Babuino', 'descripcion' => 'Los babuinos son animales terrestres que rara vez suben a los árboles, se trata de los monos más grandes del viejo mundo. Son animales
         cuadrúpedos, de cabeza larga y fina, con una mandíbula con caninos poderosos. Prefieren los hábitats abiertos, en este género se distinguen 5 especies distintas.', 'imagen' => 'https://www.anipedia.net/imagenes/babuino.jpg'),
         array('Id' => '23', 'nombre' => 'Mono narigudo', 'descripcion' => 'Es un primate endémico de la isla de Bormeo, característico por tener una nariz larga a la que debe su nombre. Son animales que
         se encuentran en peligro de extinción, se sabe que hoy en día hay apenas 7000 ejemplares.',  'imagen' => 'https://www.ngenespanol.com/wp-content/uploads/2018/08/%C2%BFPara-qu%C3%A9-usa-su-nariz-el-mono-narigudo.jpg'),
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->monos as $registro) {
            Monos::create($registro);
        }
    }
}
