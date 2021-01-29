@extends('layout')
@section('content')

    <h1 class="grey-text mt-4">All Order Lists</h1>
    <div class="container">
        <table class="table table-striped table-responsive-md btn-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Food</th>
                    <th scope="col">Hot Drink</th>
                    <th scope="col">Ice Drink</th>
                    <th scope="col">Price</th>
                    <th scope="col"> Edit Order</th>
                    <th scope="col">Order Complete</th>
                </tr>
            </thead>
            @foreach ($order as $row)
                <tbody>
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->username }}</td>
                        <td>{{ $row->food }}</td>
                        <td>{{ $row->hotDrink }}</td>
                        <td>{{ $row->iceDrink }}</td>
                        <td>{{ $row->price }}</td>
                        <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalLoginForm">Edit Order</button></td>
                        <td><button class="btn btn-sm btn-success">Order Complete</button></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mt-4">
                            <input type="text" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">User Name</label>
                        </div>
                        <div class="md-form mt-4">
                            <input type="text" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">Food</label>
                        </div>
                        <div class="md-form mt-4">
                            <input type="text" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail"> Hot Drink</label>
                        </div>
                        <div class="md-form mt-4">
                            <input type="text" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">Ice Drink</label>
                        </div>
                        <div class="md-form mt-4">
                            <input type="text" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">Price</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn indigo white-text">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection