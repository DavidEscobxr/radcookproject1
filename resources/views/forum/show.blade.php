@extends('layouts.app')

@section('template_title')
    {{ $Coment_forum->id ?? "{{ __('Show') Coment_forum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Coment_forum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Coment_forum.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Coment:</strong>
                            {{ $Coment_forum->description }}
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
