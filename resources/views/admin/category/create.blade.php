@extends('app')

@section('content')
    <div class="container">
        {!! Form::open(['route' => 'admin.categories.store', 'method' => 'post']) !!}
            <div class="col-xs-12">
                <h2>Register Category</h2>
            </div>

            @include('admin.category._form')

            <div class="col-xs=12">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection