@extends('layout')

@section('content')
    <h1>Restaurant List page is here</h1>
    <table class="table table-striped table-responsive-md btn-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Operation</th>
            </tr>
        </thead>
        @foreach($restaurant as $item)
            <tbody>
                <tr>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <form action="{{ route('restaurant.delete',$item->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('restaurant.edit',$item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
       @endforeach
    </table>
@endsection