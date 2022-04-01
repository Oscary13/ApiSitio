@extends('templete.layout.index')

@section('contenido');
<div class="news">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="news_posts">
                    <!-- News Post -->

                        @foreach ($monos as $mono)
                        <div class="news_post">
                            <div class="">
                                <img src="{{$mono['imagen']}}" alt="https://unsplash.com/@dsmacinnes">
                            </div> <br />
                            <div class=" text-dark">
                                <h1> {{$mono['nombre']}}</h1>
                                <p class="text-dark"> {{$mono['descripcion']}}</p>
                            </div>
                        </div>
                        @endforeach



                </div>

                <!-- Page Nav -->

                <div class="news_page_nav">
                    <ul>
                        <li class="active text-center trans_200"><a href="#">01</a></li>
                        <li class="text-center trans_200"><a href="#">02</a></li>
                        <li class="text-center trans_200"><a href="#">03</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection
