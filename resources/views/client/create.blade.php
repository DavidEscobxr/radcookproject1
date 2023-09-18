@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Client
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 justify-content">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clients.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('client.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
 
</div>

        
    </section>
@endsection
