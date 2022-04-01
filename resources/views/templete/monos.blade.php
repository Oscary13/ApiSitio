@extends('templete.layout.index')

@section('contenido');
<div class="home">
            <div class="home_background_container prlx_parent">
                <div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
            </div>
            <div class="home_content">
                <h1>The News</h1>
            </div>
        </div>

        <div class="news">
            <div class="container">
                <div class="row">

                    <!-- News Column -->

                    <div class="col-lg-12">

                        <div class="news_posts">
                            <!-- News Post -->


                            <!-- News Post -->
                            @foreach ($monos as $mono)
                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="{{$mono['imagen']}}" alt="https://unsplash.com/@dsmacinnes">
                                </div> <br />
                                <div class=" text-dark">
                                    <h1> {{$mono['nombre']}}</h1>
                                    <p class="text-dark"> {{$mono['descripcion']}}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- News Post -->

                        </div>

                    </div>
                </div>
            </div>

        </div>
@endsection
