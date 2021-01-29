@extends('layout')
@section('content')

    <h1 class="grey-text mt-4">Welcome from Colorado.</h1>
    <img src="{{ asset('images/coffee.jpg') }}" width="900px" height="300px" class="img-responsive mt-3">

    <!-- Material form register -->
<div class="card mt-4">

    <h5 class="card-header indigo white-text text-center py-4">
        <strong>Food order form</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" action="{{ route('order.store') }}" method="POST">
            @csrf

            <!-- Food List -->
            <div class="md-form mt-4">
                <input name="username" type="text" id="username" class="form-control">
                <label for="username">User Name</label>
            </div>
            <div class="md-form mt-4">
                <input name="food" type="text" id="food" class="form-control">
                <label for="food">Food</label>
            </div>
            <div class="md-form mt-4">
                <input name="hotDrink" type="text" id="hotDrink" class="form-control">
                <label for="hotDrink"> Hot Drink</label>
            </div>
            <div class="md-form mt-4">
                <input name="iceDrink" type="text" id="iceDrink" class="form-control">
                <label for="iceDrink">Ice Drink</label>
            </div>
            <div class="md-form mt-4">
                <input name="price" type="text" id="price" class="form-control">
                <label for="price">Price</label>
            </div>

            <!-- Order button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Order</button>

            <!-- Social register -->
            <p>or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a>

            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
    
@endsection