@extends('app')

@section('content')
    <div class="container">
        {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'put']) !!}
        <div class="col-xs-12">
            <h2>Edit Products</h2>
        </div>

        @include('admin.product._form')

        <div class="col-xs-12">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection