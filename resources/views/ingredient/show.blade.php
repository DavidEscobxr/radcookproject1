@extends('layouts.app')

@section('template_title')
    {{ $ingredient->name ?? "{{ __('Show') Ingredient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ingredient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingredients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $ingredient->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $ingredient->type }}
                        </div>
                        <div class="form-group">
                            <strong>Client Id:</strong>
                            {{ $ingredient->client_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
