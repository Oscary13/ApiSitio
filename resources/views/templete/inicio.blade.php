@extends('templete.layout.index')

@section('contenido')
	<!-- Popular -->
    <div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">El mono es un animal que lleva viviendo millones de años en el planeta Tierra.</h1>
						</div>
					</div>
				</div>

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/22.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Guarda un gran parecido en los humanos, tanto en su morfología como en el comportamiento.</h1>
						</div>
					</div>
				</div>

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/23.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Existen más de 260 especies de monos. Hasta el momento, claro.</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"><</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">></span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/mono-arana.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Clasificación</h2>
                                <a href="{{ route('clasificacion') }}" class="hero_box_link" >leer más..</a>
							</div>

						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/monito.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Monos</h2>
								<a href="{{ route('monos') }}" class="hero_box_link">Leer más..</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/monito2.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Consulta API</h2>
								<a href="{{route('clasificacion2')}}" class="hero_box_link">Leer más..</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- Register -->



    @endsection
