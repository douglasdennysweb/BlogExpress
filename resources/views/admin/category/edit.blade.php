@extends('app')

@section('content')
    <div class="container">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'put']) !!}
        <div class="col-xs-12">
            <h2>Edit Category</h2>
        </div>

        @include('admin.category._form')

        <div class="col-xs=12">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection