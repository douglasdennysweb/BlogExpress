@extends('app')

@section('content')

    <div class="container">
        <h2>List of Category</h2>

        <div class="col-xs-12">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary"> New</a>
        </div>

        <table class="table">
            <thead>
                <th>Cod.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-default"> Edit</a>
                            <a href="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" class="btn btn-danger"> Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $categories->render() !!}

    </div>

@endsection