@extends('app')

@section('content')

    <div class="container">
        <h2>List of Category</h2>

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
                        <td>{{ $category-description }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection