@extends('templete.layout.index')

@section('contenido');
<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(https://wallpaperstock.net/wallpapers/thumbs1/26862hd.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
                        <br><br>
                        <p></p>
						<h1>--Monos--</h1>
                        <h2>Consulta todos los monos:</h2>
                        <p>GET => <strong>http://api-sitio.herokuapp.com/api/mono</strong></p>
                        <h2>Consulta mono por id:</h2>
                        <p>GET => <strong>http://api-sitio.herokuapp.com/api/mono/{id}</strong></p>
                        <h2>Agrega un Mono:</h2>
                        <p>POST => <strong>http://api-sitio.herokuapp.com/api/mono</strong></p>
                        <h2>Edita los datos de un mono:</h2>
                        <p>POST => <strong>http://api-sitio.herokuapp.com/api/mono/{id}</strong></p>
                        <h2>Elimina un mono:</h2>
                        <p>DELETE => <strong>http://api-sitio.herokuapp.com/api/mono/{id}</strong></p>
                        <br><br>
                        <h1>--Clasificación de Monos--</h1>
                        <h2>Consulta todas las clasificaciones de monos:</h2>
                        <p>GET => <strong>http://api-sitio.herokuapp.com/api/clasificacion</strong></p>
                        <h2>Consulta clasificacion por id:</h2>
                        <p>GET => <strong>http://api-sitio.herokuapp.com/api/clasificacion/{id}</strong></p>
                        <h2>Agrega una clasificación:</h2>
                        <p>POST => <strong>http://api-sitio.herokuapp.com/api/clasificacion</strong></p>
                        <h2>Edita los datos de una clasificación:</h2>
                        <p>POST => <strong>http://api-sitio.herokuapp.com/api/clasificacion/{id}</strong></p>
                        <h2>Elimina una clasificación:</h2>
                        <p>DELETE => <strong>http://api-sitio.herokuapp.com/api/clasificacion/{id}</strong></p>

                        <br><br>
					</div>
				</div>
			</div>


		</div>
	</div>
@endsection
