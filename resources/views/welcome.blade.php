@extends('layouts.app')


@section('content')

<h1>HOLAAAAAAAAAAAA DESDE welcome</h1>
<div class="container">
    <nav class="bg-light py-4 text-center">
        <a href="#" class="text-success p-2 lead">Radcook</a>
    </nav>
    <div class="row bg-success mx-0 py-5">
        <div class="col-md-12 text-center my-5">
            <h1 class="display-4">Lorem, ipsum dolor.</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, maiores.</p>
            <div class="">
                <a href="#" class="text-white bg-dark p-2">Contacto</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center " >

        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Light card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Light card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 row justify-content-center">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Light card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark py-3 text-center">
        <a href="#" class="text-white">Todos los derechos reservados</a>
    </footer>

</div>

<img class="logo" src="{{ asset('images/logo.png') }}"
@endsection
