@extends('app')

@section('content')

    <div class="container">
        <h2>List of Product</h2>

        <div class="col-xs-12">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary"> New</a>
        </div>

        <table class="table">
            <thead>
                <th>Cod.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn btn-default"> Edit</a>
                        <a href="{{ route('admin.products.destroy', ['id' => $product->id]) }}" class="btn btn-danger"> Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $products->render() !!}

    </div>

@endsection