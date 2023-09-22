@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
                <div class="d-flex flex-column align-items-center">
                    <br>
                    <a><img class="logo" src="{{ asset('images/logo.png') }}" alt="RadCook Logo"></a>
                    <br>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('¡Felicidades, ya iniciaste sesión!') }}</h4>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection


