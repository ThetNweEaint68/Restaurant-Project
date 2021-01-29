@extends('layout')
@section('content')
    <div class="col-sm-6">
        <h1>Edit Restaurant</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('restaurant.update',$restaurant->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $restaurant->name }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $restaurant->email }}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="address" name="address" class="form-control" id="address" value="{{ $restaurant->address }}">
                </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div> 
@endsection