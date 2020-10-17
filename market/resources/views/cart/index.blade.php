@extends('layouts.admin-master')


@section('content')


     <h2>Your Cart</h2>

         <div class="table-responsive">
             <table class="table">
                 <thead class="thead-light">
                 <tr>
                     <th scope="col">Name</th>
                     <th scope="col">Price</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Action</th>

                 </tr>
                 </thead>
                 <tbody>
                  @foreach($cartItems as $item)
                 <tr>
                     <td>{{ $item->name }}</td>
                     <td>
                         {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                     </td>
                     <td>
                         <form action="{{route('cart.update', $item->id)}}">
                             <input name="quantity" type="number" value="{{$item->quantity}}">

                             <input type="submit" value="save">
                         </form>


                     </td>
                     <td>
                         <a href="{{route('cart.destroy',$item->id)}}">Delete</a>
                     </td>
                 </tr>
                  @endforeach
                 </tbody>
             </table>
             <h3>
                 Total Price : ₺ {{Cart::session(auth()->id())->getTotal()}}
             </h3>
             <a class="btn btn-primary" href="{{route('cart.checkout')}}" role="button">Proced To Checkout</a>
         </div>




@endsection
