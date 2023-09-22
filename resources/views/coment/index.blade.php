@extends('layouts.app')

@section('template_title')
    Coments
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comentarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('Coment_recipes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Id User</th>
										<th>Id recipe</th>
										<th>Description</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Coment_recipe as $Coment_recipe)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $Coment_recipe->user_id }}</td>
											<td>{{ $Coment_recipe->recipe_id }}</td>
											<td>{{ $Coment_recipe->description }}</td>
											

                                            <td>
                                                <form action="{{ route('Coment_recipes.destroy',$Coment_recipes->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Coment_recipes.show',$Coment_forum->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Coment_recipes.edit',$Coment_forum->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $Coment_recipes->links() !!} --}}
            </div>
        </div>
    </div>
@endsection