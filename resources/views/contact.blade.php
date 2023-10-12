@extends('layouts.app')


@section('content')

<div class="container">

    <div class="container py-5">

        <div class="jumbotron custom-jumbotron rounded shadow-sm text-center text-success bg-custom-beish">
            <h1 class="display-4">Descubre más a cerca de <br> RadcooK</h1>
            <p class="lead">RadCook es un proyecto que trata de recetas, donde los clientes <br>
            puedan interactuar con lo ingredientes y realizar deliciosas elaboraciones </p>
            <hr class="my-4">
            <p>Esta es la página WEB del proyecto, elaborado por los aprendices del SENA
                <br>David González Escobar, Pablo Sebatián Paz y Tatiana Velez Montenegro <br>
                Adscritos al programa de análsis y desarrollo de sofware a la ficha 2502319 <br>
                del centro de comercio y servicios
            </p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="{{ url('/') }}"role="button">Inicio</a>
            </p>
            <br>
        </div>

    </div>

    <div class="row justify-content-center ">

        <div class="card">
            <img src="imagen.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Título de la tarjeta</h5>
              <p class="card-text">Contenido de la tarjeta.</p>
              <a href="#" class="btn btn-primary">Botón</a>
            </div>
        </div>

        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                <div class="card-header shadow-sm rounded text-success"><h2>David G. Escobar</h2></div>
                <div class="card-body">
                    <img class="retrato rounded" src="{{ asset('images/david.jpeg') }}" alt="">
                    <br>
                  <h2 class="card-title text-success">Desarrollador</h2>
                  <p class="card-text"> Desarrollador, documentador y diseñador en el poyecto RadCook
                  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                <div class="card-header shadow-sm rounded text-success"><h2>Tatiana Velez</h2></div>
                <div class="card-body">
                    <img class="retrato rounded" src="{{ asset('images/tatiana.jpeg') }}" alt="">
                    <br>
                  <h2 class="card-title text-success">Desarrolladora</h2>
                  <p class="card-text"> Desarrolladora, documentadora y diseñadora en el poyecto RadCook
                  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 18rem;">
                <div class="card-header shadow-sm rounded text-success"><h2>Pablo S. Paz</h2></div>
                <div class="card-body">
                    <img class="retrato rounded" src="{{ asset('images/pablo.jpeg') }}" alt="">
                    <br>
                  <h2 class="card-title text-success">Desarrollador</h2>
                  <p class="card-text"> Desarrollador, documentador y diseñador en el poyecto RadCook
                  </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <div class="jumbotron custom-jumbotron rounded shadow-sm text-center text-success bg-custom-beish">
            <h1 class="display-4">Misión</h1>
            <p class="lead">RadCook es un proyecto que trata de recetas, donde los clientes <br>
            puedan interactuar con lo ingredientes y realizar deliciosas elaboraciones </p>
            <hr class="my-4">
            <p>Esta es la página WEB del proyecto, elaborado por los aprendices del SENA
                <br>David González Escobar, Pablo Sebatián Paz y Tatiana Velez Montenegro <br>
                Adscritos al programa de análsis y desarrollo de sofware a la ficha 2502319 <br>
                del centro de comercio y servicios
            </p>


        </div>

        <div class="container py-5">
            <div class="jumbotron custom-jumbotron rounded shadow-sm text-center text-success bg-custom-beish">
                <h1 class="display-4">Visión</h1>
                <p class="lead">RadCook es un proyecto que trata de recetas, donde los clientes <br>
                puedan interactuar con lo ingredientes y realizar deliciosas elaboraciones </p>
                <hr class="my-4">
                <p>Esta es la página WEB del proyecto, elaborado por los aprendices del SENA
                    <br>David González Escobar, Pablo Sebatián Paz y Tatiana Velez Montenegro <br>
                    Adscritos al programa de análsis y desarrollo de sofware a la ficha 2502319 <br>
                    del centro de comercio y servicios
                </p>

            </div>
        </div>

        <div class="container py-5">
            <div class="jumbotron custom-jumbotron rounded shadow-sm text-center text-success bg-custom-beish">
                <h1 class="display-4">Logo del proyecto <br> RadCook</h1>
                <br>
                <p class="lead"> <br>
                    <img class="rounded custom-image" src="{{ asset('images/Logo.png') }}" alt="">
                <br><br><br><br>
            </div>
        </div>


    </div>

    <footer class="bg-dark py-3 text-center">
        <a href="#" class="text-white">Todos los derechos reservados</a>
    </footer>


</div>



@endsection
