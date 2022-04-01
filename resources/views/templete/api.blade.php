@extends('templete.layout.index')

@section('contenido');
<div class="testimonials page_section">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url(https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABVd7Rys3k35bFowTNHSW1gUfax2HZ6LFU3F5sxw4rv-t7HGr748kk1ebteqrYUs_zpiR0SU-jkINRKOC10iK_2TXKneA.jpg?r=9eb)"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <br><br><br><br><br><br><br>
                    <?php
                    $pokemon = mt_rand(0,1000);

                    $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
                    curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($api);
                    curl_close($api);

                    $json = json_decode($response);

                    echo '<h1>HABILIDADES</h1>';
                    foreach ($json->abilities as $k => $v) {
                        echo $v->ability->name . '<br>';
                    }

                    echo '<h1>TIPO</h1>';
                    echo $json->types[0]->type->name;

                    echo '<h1>FOTOS</h1>';
                    echo '<img src="' . $json->sprites->back_default . '" width="200">';
                    echo '<img src="' . $json->sprites->front_default . '" width="200">';
                    ?>
                    <br><br>
                    <div class="bu"><a class="a" href="{{route('pokeApi')}}">DESCUBRIR POKÉMON</a></div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
