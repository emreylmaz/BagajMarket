@extends('layouts.admin-master')


@section('content')

    <h2>Checkout</h2>


    <h3>Shipping Information</h3>

    <form action="{{route('orders.store')}}" method="post">
        @csrf


        <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" name="shipping_fullname" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">State</label>
            <input type="text" name="shipping_state" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="shipping_city" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Zip</label>
            <input type="number" name="shipping_zipcode" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Full Address</label>
            <input type="text" name="shipping_address" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" name="shipping_phone" id="" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Place Order</button>


    </form>


@endsection
