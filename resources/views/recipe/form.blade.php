<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $recipe->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category') }}
            {{ Form::text('category', $recipe->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Category']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $recipe->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        @foreach($map as $type => $ingredients)
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$type}}" aria-expanded="true" aria-controls="collapseOne">
                    {{$type}}
                </button>
              </h2>
            </div>
          </div>
            @foreach ($ingredients as $ingredient)
            <div id="collapseOne-{{$type}}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="ingredients[]" value={{$ingredient['id']}}> <label>{{$ingredient['name']}}</label>
                    </div>
                </div>
              </div>
            @endforeach
        @endforeach


        <!--
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $recipe->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('image_id') }}
            {{ Form::text('image_id', $recipe->image_id, ['class' => 'form-control' . ($errors->has('image_id') ? ' is-invalid' : ''), 'placeholder' => 'Image Id']) }}
            {!! $errors->first('image_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        -->

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
