@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Radcook') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ya estás registrado') }}
                </div>
            </div>
        </div>
    </div>
</div>

<h1>HOLAAAAAAAAAAAA DESDE HOME</h1>

</div>

@endsection


